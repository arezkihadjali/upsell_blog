<?php 

class DbPDO
{
  private $PDOInstance = null;
 
  private static $instance = null;

  const SQL_USER = 'root';
 
  const SQL_HOST = 'localhost';
 
  const SQL_PASS = '';
 
  const SQL_DTB = 'upsell_blog_db';

  const FETCH_TYPE = PDO::FETCH_ASSOC ; 

 
  public  $stmt ; 
 
  public  function __construct()
  {
        $dsn = 'mysql:host=' .self::SQL_HOST. ';dbname=' . self::SQL_DTB;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        try{
            $this->PDOInstance = new \PDO($dsn, self::SQL_USER, self::SQL_PASS, $options);
        }
        catch(PDOException $e){
            echo  $e->getMessage();
        }
  }

  public static function getInstance()
  {  
    if(is_null(self::$instance))
    {
      try{
        self::$instance = new DbPDO();
      }catch(\PDOException $e) {
        echo $e->getMessage() ; 
      }

    }
    return self::$instance;
  }
 
  public function query($query)
  {
    return $this->PDOInstance->query($query);
  }

  public function prepare ($query)
  {
    try{
      $this->stmt = $this->PDOInstance->prepare($query) ;       
    }
    catch(\PDOException $e) {
      echo  $e->getMessage() ; 
    } 

  } 
  public function  getInsertedId() {
     return  $this->PDOInstance->lastInsertId() ;  
  }

  public  function bindParam(  $paramName, $paramValue ) 
  {
    try{
        $this->stmt->bindParam($paramName, $paramValue) ; 
    }
    catch(\PDOException $e) {
      echo  $e->getMessage() ; 
    } 
  } 

  public function  execute () {
      $this->stmt->execute() ; 
  }

  public  function  closeStmt () {
    $this->stmt->close() ; 
  } 

  public function close() {
    $this->PDOInstance = null ; 
  }

}