<?php  
     require_once(__DIR__."/services/articleService.php") ;
     require_once(__DIR__."/helpers.php") ; 
     
     $articles = getArticles() ;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Upsell Blog </title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
<div class="container">
	<h1>
	  Liste des articles 
	</h1>
    <div class="row ">
            <?php  
            foreach($articles as $article)
            { 
            ?> 
            <div class="col-md-6 ">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 class="pull-left"><?php echo $article['titre']  ;?></h4>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <h4 class="pull-right">
                                        <small>
                                            <code><?php echo $article['date_parution'] ;  ?></code> 
                                            <code class="text-uppercase"> <?php echo $article['auteur'] ;  ?></code> 
                                        </small>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel-body">
                            <?php echo limit_text($article['texte'] , 15) ; ?>
                            <a href="article.php?id_article=<?php echo $article['id']?>">Lire</a>
                        </div>
                </div>
            </div>
            
            <?php } ?>
    </div>
 
</div>
</body>
</html>
