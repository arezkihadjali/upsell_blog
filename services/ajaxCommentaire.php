<?php 
require_once(__DIR__."/commentaireService.php") ;


$idCommentaire = saveCommentaire () ; 
echo json_encode (getCommentaire($idCommentaire) ) ; 
die(); 