<?php
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

   include_once "../models/userFunctions.php" ;
   include_once "../models/connectionDb.php" ;
    if(emptyInputLogin($username,$password) !==false ){
      
        header("location:../connect.php?error=emptyInput");
         exit();
    }


// log the user to the data base

loginUser($conn,$username,$password);


    }else{
        // header("location:../login.php");
        //  exit();
    }

