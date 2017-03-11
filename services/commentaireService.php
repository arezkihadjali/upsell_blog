<?php 
require_once(__DIR__."/../include/db/commentaireOperations.php");
require_once(__DIR__."/../helpers.php");

function saveCommentaire() {

    $commentaireTexte =  sanitize_input($_POST['commentaire_texte']); 
    $commentaireProprietaire = sanitize_input($_POST['commentaire_auteur'] );
    $idArticle = sanitize_input($_POST['id_article'] );

   return   insertCommentaire($commentaireTexte ,$commentaireProprietaire, $idArticle); 

}
function getCommentaires($idArticle) {

    return readCommentaires($idArticle) ; 
}

function getCommentaire($IdCommentaire) {
    return  readCommentaire($IdCommentaire) ;
}
