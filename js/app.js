$(document).ready(function(){

$("#commentaire-form").submit(function(e) {

    var url = "services/ajaxCommentaire.php"; 
          $.ajax({
           type: "POST",
           url: url,
           data: $("#commentaire-form").serialize(), 
           success: function(data)
           {
               data = JSON.parse(data);

                var newComment = $("#new-comment").clone() ;
                newComment.removeClass("hidden") ; 
                           
                newComment.find("#new-comment-author").text(data.commentaire_auteur) ; 
                newComment.find("#new-comment-text").text(data.texte) ; 
                $("#liste-commentaires").append(newComment).fadeIn(300); 

           }
         });
    e.preventDefault() ; 
}) ; 
});