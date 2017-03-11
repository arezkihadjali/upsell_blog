<?php 
require_once(__DIR__."/dbPDO.php");

function  insertCommentaire ($commentaireTexte ,$commentaireAuteur, $idArticle) {

   	$pdo = new DbPDO() ;  

    $pdo->prepare('INSERT INTO commentaires (texte, commentaire_auteur, id_article )VALUES( :texte, :commentaire_auteur, :id_article )') ; 


	$pdo->bindParam(':texte' , $commentaireTexte  ) ;
	$pdo->bindParam(':commentaire_auteur' ,  $commentaireAuteur ) ;
    $pdo->bindParam(':id_article' , $idArticle) ;
	$pdo->execute() ; 

	$lastInsertedId = $pdo->getInsertedId() ; 

    $pdo->close();
	return $lastInsertedId ; 
}

function readCommentaires ($idArticle) {

    $pdo = new DbPDO() ;  

   	$pdo->prepare("SELECT * FROM commentaires WHERE id_article = :id_article");
	$pdo->bindParam(':id_article' ,  $idArticle ) ;
	
	$pdo->execute() ; 
	$result = $pdo->stmt->fetchAll(); 	

	$pdo->close();

	return $result ; 
}

function readCommentaire($IdCommentaire) {
	$pdo = new DbPDO() ;  

	$pdo->prepare("SELECT * FROM commentaires WHERE id = :id  LIMIT 1");
	$pdo->bindParam(':id' ,  $IdCommentaire ) ;

	$pdo->execute() ; 
	$resultat = $pdo->stmt->fetch() ; 

	$pdo->close();
	return  $resultat ; 
}


