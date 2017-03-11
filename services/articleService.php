<?php
require_once(__DIR__."/../include/db/articleOperations.php");
require_once(__DIR__."/../helpers.php");


function  saveArticle () {

    $articleTitre =  sanitize_input($_POST['titre']); 
    $articleTexte = sanitize_input($_POST['texte'] );
    $date_parution = date('Y-m-d H:i:s');

    insertArticle($articleTitre , $articleTexte , $date_parution ) ; 
}

function  getArticles () {
    return  readArticles() ;  
}

function  getArticle () {
    $idArticle = sanitize_input($_GET['id_article'] );
    return  readArticle($idArticle) ;  
}