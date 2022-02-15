<?php 



// check if the sumbil button clicked
 if(isset($_POST["login"])){

   
    $username = ($_POST["username"]);
  $password = ($_POST["password"]);
 
 //signup controller classe
 
 include "../classes/dbh.classes.php";
 include "../classes/login.classes.php";
 include "../classes/loginController.classes.php";
// creating object
$login = new loginController($username,$password);

//running error handlers and user signup
$login->loginUser();
//redirect user
header("location:../logUserView.php?error=no_errors");
 }
