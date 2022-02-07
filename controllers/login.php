<?php
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
  
    include_once "connectionDb.php" ;
    include_once "functions.php" ;
    if(emptyInputLogin($username,$password) !==false ){
      
        header("location:../connect.php?error=emptyInput");
         exit();
    }


// log the user to the data base

loginUser($conn,$username,$password);
var_dump($uidExists);
    die;

    }else{
        // header("location:../login.php");
        //  exit();
    }

