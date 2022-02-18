<?php

namespace models;
use \Exception;
class login extends Dbh{

    protected   function  getUser($username,$password){
//crating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('SELECT  passwords FROM users WHERE username=? OR email=?;');   
            
      
        if(!$stmt->execute(array($username,$password))){
            $stmt=null;
            throw new \Exception('statement failled');
          
    
        }
        
   if($stmt->rowCount() == 0){
    $stmt=null;
    throw new \Exception('user not found');
   
   }

 
 //if has records check if the passwords are matching

 $hashPassword= $stmt->fetchAll();

//return  $hashPassword[0]["passwords"];

 $checkPwd = password_verify ($password,$hashPassword[0]["passwords"]);


 if( $checkPwd===false){
    $stmt=null;
    throw new \Exception('Wrong password');

   }elseif($checkPwd===true){
       //crating statement to prevent SQL injections
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username=? OR email=? AND passwords=?;');  
    if(!$stmt->execute(array($username,$username,$password))){
        $stmt=null;
        throw new \Exception('statement failled');

    }
    if($stmt->rowCount() == 0){
        $stmt=null;
        throw new \Exception('user not found');
    
       }
       $user = $stmt->fetchAll();

session_start();
$_SESSION["id"]= $user[0]["iduser"];
$_SESSION["username"]= $user[0]["username"];

$_SESSION["isAdmin"]= $user[0]["isAdmin"];

$stmt=null;
   }
    $stmt=null;
    
    
        }


  //get One User

Protected function getOneUser($username){
    
    $sql="SELECT * FROM users WHERE username=?";
    //crating statement to prevent SQL injections
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$username]);


    $results = $stmt->fetchAll();
    return $results;


}

}