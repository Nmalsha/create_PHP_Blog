<?php

class Login extends BaseController{

    public function login()
    {
 
     //calling to readpost view
         $this->render('login');
    }
}