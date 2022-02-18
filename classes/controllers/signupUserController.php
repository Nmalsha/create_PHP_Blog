<?php
namespace controllers;

use models\signupUser;


class signupUserController extends signupUser{

    private $username;
    private $email;
    private $password;
    private $password2;

    public function __construct($username,$email,$password,$password2){
$this->username = $username;
$this->email = $email;
$this->password = $password;
$this->password2 = $password2;

    }
// creating methods

public function signupUser(){

    if($this->emptyInputSignup()==false){
// echo "emptyInput"
        header("location:../signup.php?error=emptyInput");
        exit();
    }
    if($this->invalidUid()==false){
// echo "IninvalidUid"
        header("location:../signup.php?error=IninvalidUid");
    exit();
    }
    if($this->invalidEmail()==false){
        // echo "IninvalidEmail"
        header("location:../signup.php?error=IninvalidEmail");
        exit();
            }
            if($this-> pwdMatch()==false){
                // echo "password dont matched"
                header("location:../signup.php?error=passworddontmatched");
                exit();
                    }
                    if($this->userTakenCheck()==false){
                        // echo "Usernametaken"
                        header("location:../signup.php?error=Usernametaken");
                        exit();
                            }
                            $this->setUser($this->username,$this->password,$this->email);
}

    private function  emptyInputSignup(){
$result;

if(empty($this ->username)||empty($this->email)||empty($this->password) ||empty($this->password2)){
    

    $result= false;

}else{
    $result= true;
}

return $result;
    }

    private function invalidUid(){
        $result;
        //if the charactors are valide caractors
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->username )){
            $result= false;
    
        }else{
            $result= true;
        }
    return  $result;
    }


    private  function invalidEmail(){
        $result;
        //if the email a valide email
        if(!filter_var($this->email,FILTER_VALIDATE_EMAIL) ){
            $result= false;
    
        }else{
            $result= true;
        }
    return  $result;
    }

    private   function pwdMatch(){
        $result;
        //if the email a valide email
        if($this->password !==$this->password2 ){
            $result= false;
    
        }else{
           
            $result= true;
        
        }
    return  $result;
    }


    private   function userTakenCheck(){
        $result;
        //if the user already existe
        if(!$this->checkUser($this ->username,$this->email) ){
            $result= false;
    
        }else{
           
            $result= true;
        
        }
    return  $result;
    }

}