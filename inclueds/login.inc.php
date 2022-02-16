<?php 

//include 'autoloader.inc.php';

// check if the sumbil button clicked
 if(isset($_POST["login"])){

   
    $username = ($_POST["username"]);
  $password = ($_POST["password"]);
 
 //signup controller classe
 
 include "../classes/Dbh.php";
 include "../classes/login.php";
 include "../classes/loginController.php";
 
// creating object
$login = new loginController($username,$password);

//running error handlers and user signup
$login->loginUser();
//redirect user
header("location:../logUserView.php?error=no_errors");
 }
