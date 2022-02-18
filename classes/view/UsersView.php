<?php

namespace view;
use models\Login;

class UsersView extends Login{

    public function showUser($username)
    {
        $results = $this->getOneUser($username);
       
        
echo $results[0]['username'] . "" .$results[0]['email'];
    }


}