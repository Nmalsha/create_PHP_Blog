<?php

class login extends Dbh{

    protected   function  getUser($username,$password){

        $stmt = $this->connect()->prepare('SELECT  passwords FROM users WHERE username=? OR email=?;');   
            
      
        if(!$stmt->execute(array($username,$password))){
            $stmt=null;
            header("location:../login.php?error=statment failed");
            exit();
    
        }
        //if no records user go back to the login page
   if($stmt->rowCount() == 0){
    $stmt=null;
    header("location:../login.php?error=no user");
            exit();

   }

 
 //if has records check if the passwords are matching

 $hashPassword= $stmt->fetchAll();

//return  $hashPassword[0]["passwords"];

 $checkPwd = password_verify ($password,$hashPassword[0]["passwords"]);


 if( $checkPwd==false){
    $stmt=null;
    header("location:../login.php?error=wrong passwordr");
            exit();

   }elseif($checkPwd==true){
    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username=? OR email=? AND passwords=?;');  
    if(!$stmt->execute(array($username,$username,$password))){
        $stmt=null;
        header("location:../login.php?error=statment failed");
        exit();

    }
    if($stmt->rowCount() == 0){
        $stmt=null;
        header("location:../login.php?error=usernotfound");
                exit();
    
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


  

}