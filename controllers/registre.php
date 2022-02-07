<?php 



// check if the sumbil button clicked
 if(isset($_POST["signup"])){
    $username = ($_POST["username"]);
    $email = ($_POST["email"]);

 $password = ($_POST["password1"]);
 $password2 =($_POST["password2"]);



 include_once "connectionDb.php" ;
 include_once "functions.php" ;

//checking the if there is a empty filds
 if(emptyInputSignup($username,$email,$password,$password2) !==false ){
     
     
    header("location:../signup.php?error=emptyInput");
     exit();
     //if username invalid
}if(invalidUid($username) !==false ){
    header("location:../signup.php?error=IninvalidUid");
    exit();
}
 //if email invalid
if(invalidEmail($email) !==false ){
    header("location:../signup.php?error=IninvalidEmail");
    exit();
}
 //if passwords dont machted 
if(pwdMatch($password,$password2) !==false ){
    header("location:../signup.php?error=passworddontmatched");
    exit();
}
 //if username already in the database
if(uidExists($conn,$username,$email) !==false ){
  
    header("location:../signup.php?error=Usernametaken");
    exit();
}
// if not create user in the database


createUser($conn,$username,$password,$email);
 }

else{
//header("location:../signup.php?error = error");
  //exit();
    }


