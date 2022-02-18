<?php
namespace controllers;

use models\Login;

class LoginController extends Login{

    private $username;
    
    private $password;
 

    public function __construct($username,$password){
$this->username = $username;

$this->password = $password;


    }
// creating methods

public function loginUser(){

    if($this->emptyInputlogin()===false){
// echo "emptyInput"
        header("location:../login.php?error=emptyInput");
        throw new \Exception('Empty input');
    }
   
     $this->getUser($this->username,$this->password);
}

    private function  emptyInputlogin(){
$result;

if(empty($this ->username)||empty($this->password) ){
    

    $result= false;

}else{
    $result= true;
}

return $result;
    }



 



}