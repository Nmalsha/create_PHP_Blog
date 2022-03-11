<?php

class Login extends Dbh
{

    public function __construct()
    {

        $this->table = "users";
        $this->connect();
    }
    public function getUser($username, $password)
    {
//crating statement to prevent SQL injections
        $stmt = $this->connect()->prepare('SELECT  passwords FROM users WHERE username=? OR email=?;');

        if (!$stmt->execute(array($username, $password))) {
            $stmt = null;
            throw new \Exception('statement failled');

        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            throw new \Exception('user not found');

        }
//if has records check if the passwords are matching

        $hashPassword = $stmt->fetchAll();

        $checkPwd = password_verify($password, $hashPassword[0]["passwords"]);

        if ($checkPwd === false) {
            $stmt = null;
            throw new \Exception('Wrong password');

        } elseif ($checkPwd === true) {
//crating statement to prevent SQL injections
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username=? OR email=? AND passwords=?;');
            if (!$stmt->execute(array($username, $username, $password))) {
                $stmt = null;
                throw new \Exception('statement failled');

            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                throw new \Exception('user not found');

            }
            $user = $stmt->fetchAll();
/* Configure le limiteur de cache à 'private' */

            session_cache_limiter('private');
            $cache_limiter = session_cache_limiter();

/* Configure le délai d'expiration à 30 minutes */
            session_cache_expire(30);
            $cache_expire = session_cache_expire();

            session_start();
            $_SESSION["id"] = $user[0]["userId"];
            $userid = $_SESSION["id"];
            $_SESSION["username"] = $user[0]["username"];

            $_SESSION["isAdmin"] = $user[0]["isAdmin"];

            $stmt = null;
        }

        $stmt = null;
    }

//get One User

    protected function getOneUser($username)
    {

        $sql = "SELECT * FROM users WHERE username=?";
//crating statement to prevent SQL injections
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        $results = $stmt->fetchAll();
        return $results;

    }

//get All User

    public function getAllUsers()
    {

        $sql = "SELECT * FROM users ORDER BY userId DESC ";
//crating statement to prevent SQL injections

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $users = $stmt->fetchAll();

        return $users;

    }

//Function to delete the user
    public function deleteUser($id)
    {

        $sql = "DELETE FROM  users WHERE userId=$id ";
        $stmt = $this->connect()->prepare($sql);
        if (!$stmt->execute(array($id))) {
            $stmt = null;

            throw new \Exception('statement failled');

        }
        $user = $stmt->fetch();

        return $user;

    }

}
