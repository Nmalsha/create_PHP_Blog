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
            //$posts= $this->Post->getAllPostsForOneUser($userid);
            header("location:/users");
           
           
        }
     
     //calling to readpost view
         $this->render('index');
    }



}