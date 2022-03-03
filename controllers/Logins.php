<?php

class Logins extends BaseController{

    public function index()
    {
        $this->loadModel('Login');
       // $this->loadModel('Post');

        if(isset($_POST['login'])){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(empty($username)||empty($password)){
      
                throw new \Exception('Empty input');
                 
            }
            //get the user informations from the database after verifying necessary details
            $this->Login->getUser($username,$password); 
            //passing user id to the url
           $userid= $_SESSION['id'];
            header("location:/users/index/".$userid);
            
        }
     
     //calling to readpost view
         $this->render('index');
    }

}