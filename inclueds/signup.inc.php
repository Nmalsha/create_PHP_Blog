<?php 



// check if the sumbil button clicked
 if(isset($_POST["signup"])){

   
    $username = ($_POST["username"]);
    $email = ($_POST["email"]);

 $password = ($_POST["password1"]);
 $password2 =($_POST["password2"]);

 //signup controller classe
 include "../classes/dbh.classes.php";
 include "../classes/signup.classes.php";
 include "../classes/signup.controller.php";

$signup = new signupController($username,$email,$password,$password2);

//running error handlers and user signup
$signup->signupUser();
//redirect user
header("location:../connect.php?error=no_errors");
 }
