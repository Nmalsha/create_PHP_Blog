<?php

class Signup extends Dbh{

    public function __construct()
    {
  
        $this->table = "users";
        $this->connect();
    }

    public   function  setUser($username,$password,$email){
//crating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('INSERT INTO users( username,passwords,email) VALUES (?,?,?);');    
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);

   
        if(!$stmt->execute(array($username,$hashPassword,$email))){
            $stmt=null;
            throw new \Exception('statement failled');
    
        }
   
    $stmt=null;
    
    
        }


    public   function  checkUser($username,$email){
//crating statement to prevent SQL injections
    $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username=? OR email=? ;');    

    if(!$stmt->execute(array($username,$email))){
        $stmt=null;
        throw new \Exception('statement failled');

    }
//if the username and email found already 

$user;
if($stmt->rowCount()> 0){
    $user =false;

}else{

    $user =true;
    
}
return  $user;

    }

}