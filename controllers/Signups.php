<?php


class Signups extends BaseController{


    public function index()
    {
        //loading model signup
        $this->loadModel('Signup');



if(isset($_POST['signup'])){
//getting user inserted data converting special caractores specific in to html format -to prevent XSS attack
            $username = htmlspecialchars($_POST["username"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password1"]);
            $password2 = htmlspecialchars($_POST["password2"]);
           
             

             if(empty($username||$email||$password ||$password2)){
                // check if the fields are empty
                        header("location:../signup.php?error=emptyInput");
                              throw new \Exception('Empty input');
                    }
                    //check if the username has no charactore epecific
                    if(!preg_match("/^[a-zA-Z0-9]*$/",$username )){
                // echo "IninvalidUid"
                        header("location:../signup.php?error=IninvalidUid");
                        throw new \Exception('Invalid UID');
                    }
                    // check if the email is a valide email
                    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                        // echo "IninvalidEmail"
                        header("location:../signup.php?error=IninvalidEmail");
                        throw new \Exception('invalidEmail');
                            }
                            //check if the passwords matched
                            if($password !==$password2){
                                // echo "password dont matched"
                                header("location:views/layout/default.php?error=passworddontmatched");
                                throw new \Exception('passworddontmatched');
                                    }
                                    //check if the user already exist
                                     if(!$this->Signup->checkUser($username,$email)){
                                          // echo "Usernametaken"
                                      header("location:../signup.php?error=Usernametaken");
                                         throw new \Exception('Usernametaken');
                                          }
     
//save user informations to the database after verifying necessary details
$this->Signup->setUser($username,$password,$email);
header("location:localhost:8080/login");
        }
        //randering signu form view
        $this->render('index');
    
    }

}