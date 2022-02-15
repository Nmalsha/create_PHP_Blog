<?php
class UsersView extends login{

    public function showUser($username)
    {
        $results = $this->getOneUser($username);

echo $results[0]['username'] . "" .$results[0]['email'];
    }


}