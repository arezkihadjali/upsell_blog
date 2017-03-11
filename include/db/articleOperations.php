<?php 
require_once(__DIR__."/dbPDO.php");

$pdo= DbPDO::getInstance() ; 


function insertArticle ($articleTitre,  $articleTexte, $date_parution)  {
	
	$pdo= DbPDO::getInstance() ; 

	$pdo->prepare('INSERT INTO articles (id, titre, texte, date_parution )VALUES(:titre, :texte, :date_parution)') ; 

	$pdo->bindParam(':titre' ,  $articleTitre ) ;
	$pdo->bindParam(':texte' ,  $articleTexte ) ;
	$pdo->bindParam(':date_parution' , $date_parution ) ;

	$pdo->execute() ; 

	$pdo->close();
}
function readArticles () {

	$pdo= DbPDO::getInstance() ; 
    
	$pdo->prepare("SELECT * FROM articles");
	$pdo->execute() ; 
	$result = $pdo->stmt->fetchAll(); 	

	$pdo->close();
	return $result ; 
}

function readArticle($idArticle) {
	
	$pdo= DbPDO::getInstance() ; 

	$pdo->prepare("SELECT * FROM articles WHERE id = :id  LIMIT 1");
	$pdo->bindParam(':id' ,  $idArticle ) ;

	$pdo->execute() ; 
	$resultat = $pdo->stmt->fetch() ; 

	$pdo->close();
	return  $resultat ; 
}
