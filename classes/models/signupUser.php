<?php

namespace models;

class signupUser extends Dbh{

    protected   function  setUser($username,$password,$email){

        $stmt = $this->connect()->prepare('INSERT INTO users( username,passwords,email) VALUES (?,?,?);');    
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);


    
        if(!$stmt->execute(array($username,$hashPassword,$email))){
            $stmt=null;
            header("location:../signup.php?error=statment failed");
            exit();
    
        }
   
    $stmt=null;
    
    
        }


    protected   function  checkUser($username,$email){

    $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username=? OR email=? ;');    

    if(!$stmt->execute(array($username,$email))){
        $stmt=null;
        header("location:../signup.php?error=statment failed");
        exit();

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