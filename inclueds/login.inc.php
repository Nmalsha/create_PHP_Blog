<?php 
/*
//include 'autoloader.inc.php';

// check if the sumbil button clicked
 if(isset($_POST["login"])){

   
    $username = ($_POST["username"]);
  $password = ($_POST["password"]);
 
 //signup controller classe
 
 include "../models/Dbh.php";
 include "../models/login.php";
 include "../controllers/loginController.php";
 
// creating object
$login = new loginController($username,$password);

//running error handlers and user signup
$login->loginUser();
//redirect user
header("location:../logUserView.php?error=no_errors");
 }
