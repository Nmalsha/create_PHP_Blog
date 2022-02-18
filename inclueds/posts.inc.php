<?php

/*
// check if the submit button clicked
if(isset($_POST["submit"])){
    $userid = htmlspecialchars($_POST["userid"]);
    $postTitle = htmlspecialchars($_POST["postTitle"]);
    $postChapo = htmlspecialchars($_POST["chapo"]);

 $postContent = htmlspecialchars($_POST["contenue"]);
 //image file
 $postImage =($_FILES["fileToUpload"]);
$filename= $postImage["name"];
$templateName = $postImage["tmp_name"];
// var_dump($postImage);
//  var_dump($postChapo);
//  var_dump($userid);
//  var_dump($postContent);
//  var_dump($postImage);

// die;
 //Posts controller classe
 
 include "../models/Dbh.php";
 include "../models/Posts.php";
 include "../controllers/PostController.php";
// creating object
$posts = new PostController($userid,$postTitle,$postChapo,$postContent,$postImage,$filename,$templateName);

//running error handlers and user signup
$posts->createPost();
//redirect user
header("location:../logUserView.php?error=no_errors");
 }
