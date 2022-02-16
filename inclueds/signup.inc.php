<?php 



// check if the sumbil button clicked
 if(isset($_POST["signup"])){

   
    $username = ($_POST["username"]);
    $email = ($_POST["email"]);

 $password = ($_POST["password1"]);
 $password2 =($_POST["password2"]);

 //signup controller classe

  include "../models/Dbh.php";
  include "../models/signupUser.php";
  include "../controllers/signupUserController.php";
// creating object
$signup = new signupUserController($username,$email,$password,$password2);

//running error handlers and user signup
$signup->signupUser();
//redirect user
header("location:../connect.php?error=no_errors");
 }
