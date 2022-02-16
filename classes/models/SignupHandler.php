<?php

namespace models;

use controllers\signupUserController;

class SignupHandler{



    public static function signup(){

        $username = ($_POST["username"]);
        $email = ($_POST["email"]);
    
     $password = ($_POST["password1"]);
     $password2 =($_POST["password2"]);
    
     //signup controller classe
    

    // creating object
    $signup = new signupUserController($username,$email,$password,$password2);
    
    //running error handlers and user signup
    $signup->signupUser();



    }
}