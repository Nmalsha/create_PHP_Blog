<?php
include_once ("connectionDb.php") ;
// creating fonction for the signup process
function emptyInputSignup($username,$email,$password,$password2){
    $result;
    //if the fileds empty then
    if(empty($username)||empty($email)||empty($password) ||empty($password2)){
    

        $result= true;

    }else{
        $result= false;
    }
return  $result;
}

function invalidUid($username){
    $result;
    //if the charactors are valide caractors
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username )){
        $result= true;

    }else{
        $result= false;
    }
return  $result;
}
function invalidEmail($email){
    $result;
    //if the email a valide email
    if(!filter_var($email,FILTER_VALIDATE_EMAIL) ){
        $result= true;

    }else{
        $result= false;
    }
return  $result;
}
function pwdMatch($password,$password2){
    $result;
    //if the email a valide email
    if($password !==$password2 ){
        $result= true;

    }else{
       
        $result= false;
    
    }
return  $result;
}

function uidExists($conn,$username,$email){
   
    //if the username or email already exist in the data base
    $sql = "SELECT * FROM users WHERE username=? OR email=?;";
    // creating the preraire statment to prevent distroing data in the database by adding lines of codes by user instead of filling the signup fields
    $statment = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare ($statment,$sql)){
        header("location:../signup.php?error=statment failed");
        exit();

    }
        //if no errors  binding the parameters

  
        mysqli_stmt_bind_param($statment,"ss",$username,$email);
        mysqli_stmt_execute($statment);
        
        $resultData = mysqli_stmt_get_result($statment);
//if the username and email found already 
        if($row = mysqli_fetch_assoc($resultData)){
            return  $row;

        }else{

            $result=false; 
            return  $result;
        }
    
mysqli_stmt_close($statment);
}


function createUser($conn,$username,$password,$email){
   
    //if the username or email already exist in the data base
    $sql = "INSERT INTO users (username,passwords,email) VALUES (?,?,?);";
    // creating the preraire statment to prevent distroing data in the database by adding lines of codes by user instead of filling the signup fields
    $statment = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare ($statment,$sql)){
        header("location:../signup.php?error=statment failed");
        exit();

    }
       //if no errors ,hashing the password and binding the parameters
        $hashPassword = password_hash($password,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($statment,"sss",$username,$hashPassword,$email);
        mysqli_stmt_execute($statment);
        mysqli_stmt_close($statment);
        header("location:../connect.php?error=noerrors");
        exit();
        

}




