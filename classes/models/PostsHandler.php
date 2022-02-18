<?php
namespace models;

use controllers\PostController;

class PostsHandler{



    public static function post(){
//getting user inserted data converting special caractores specific in to html format -to prevent XSS attack
        $userid = htmlspecialchars($_POST["userid"]);
        $postTitle = htmlspecialchars($_POST["postTitle"]);
        $postChapo = htmlspecialchars($_POST["chapo"]);
    
     $postContent = htmlspecialchars($_POST["contenue"]);
     //image file
     $postImage =($_FILES["fileToUpload"]);
    $filename= $postImage["name"];
    $templateName = $postImage["tmp_name"];
  
    // creating object
    $posts = new PostController($userid,$postTitle,$postChapo,$postContent,$postImage,$filename,$templateName);
    
    //running error handlers and user signup
    $posts->createPost();
    //redirect user
    header("location:../logUserView.php?error=no_errors");



    }
}