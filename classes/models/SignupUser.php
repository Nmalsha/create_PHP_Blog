<?php

namespace models;

class SignupUser extends Dbh{

    protected   function  setUser($username,$password,$email){
//crating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('INSERT INTO users( username,passwords,email) VALUES (?,?,?);');    
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);


    
        if(!$stmt->execute(array($username,$hashPassword,$email))){
            $stmt=null;
            throw new \Exception('statement failled');
    
        }
   
    $stmt=null;
    
    
        }


    protected   function  checkUser($username,$email){
//crating statement to prevent SQL injections
    $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username=? OR email=? ;');    

    if(!$stmt->execute(array($username,$email))){
        $stmt=null;
        throw new \Exception('statement failled');

    }
//if the username and email found already 

$resultCheck;
if($stmt->rowCount()> 0){
    $resultCheck =false;

}else{

    $resultCheck =true;
    
}
return  $resultCheck;

    }





}