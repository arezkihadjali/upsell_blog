 <?php
      require_once(__DIR__."/services/articleService.php") ; 
      require_once(__DIR__."/services/commentaireService.php") ; 
      
      $article = getArticle() ;
      $commentaires = getCommentaires($article['id']) ; 

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

    <div class="row article">
        <h1><?php echo  $article['titre'] ; ?>  
        </h1> <code> <?php echo $article['date_parution'];?></code>
        <div>
        <br>        
            <?php echo $article['texte'] ;?>
            
        </div>
        <code class="pull-right">Par : <?php echo $article['auteur'] ;?></code>
    </div>
    <div class="row" id="liste-commentaires">
        <h4>Commentaires </h4>
        <?php 
            foreach($commentaires as $commentaire)
            {?>
            <div class="row">
                <div class="col-md-8">
                    <div class="comment">
                        <span class="label label-primary">
                            <?php  echo $commentaire['commentaire_auteur'] ; ?>
                        </span>
                        
                        <div class ="comment-text">
                            <?php  echo $commentaire['texte'] ; ?>
                        </div>
                    </div>
                </div>
                
            </div>
        <?php } ?>
    </div>
<!--comment html for ajax -->
      <div class="row hidden" id="new-comment">
                <div class="col-md-8">
                    <div class="comment">
                        <span class="label label-primary" id="new-comment-author">
                            not available 
                        </span>
                        <div id="new-comment-text"  class ="comment-text">
                            not available
                        </div>
                    </div>
                </div>
      </div>

    <div class="row">
       <h4>Ajouter un commentaire </h4>
        <div class="col-md-8">
            <form class="form" method="POST" id="commentaire-form">
                <div class="form-group">
                    <label for="commentaire-auteur">Nom et Prenom</label>
                    <input type="text"  required class="form-control no-radius" id="commentaire-auteur" name="commentaire_auteur">
                </div>
                <div class="form-group">
                    <textarea  class="form-control no-radius" required  id="commentaire-texte" name="commentaire_texte"> 
                    </textarea>
                </div>
                    <input  type="hidden"   name="id_article" value="<?php echo $article['id'] ; ?>"> 
                
                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
        </div>
     </div>

</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>