<?php 

namespace models;

use controllers\LoginController;

class LoginHandler{
    public static function login(){
// check if the sumbil button clicked
 if(isset($_POST["login"])){
//getting user inserted data converting special caractores specific in to html format -to prevent XSS attack
   
    $username = htmlspecialchars($_POST["username"]);
  $password =htmlspecialchars ($_POST["password"]);
 
 //signup controller classe
 

// creating object
$login = new LoginController($username,$password);

//running error handlers and user signup
$login->loginUser();
//redirect user
header("location: /logUserView.php?error=no_errors");
 }

}
}