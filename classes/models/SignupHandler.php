<?php

namespace models;

use controllers\signupUserController;

class SignupHandler{



    public static function signup(){
//getting user inserted data converting special caractores specifi in to html format -to prevent XSS attack
        $username = htmlspecialchars($_POST["username"]);
        $email = htmlspecialchars($_POST["email"]);
    
     $password = htmlspecialchars($_POST["password1"]);
     $password2 = htmlspecialchars($_POST["password2"]);
    
     //signup controller classe
    

    // creating object
    $signup = new signupUserController($username,$email,$password,$password2);
    
    //running error handlers and user signup
    $signup->signupUser();
//redirect user
header("location:../connect.php?error=no_errors");


    }
}