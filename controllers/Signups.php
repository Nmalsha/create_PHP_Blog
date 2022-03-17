<?php
use Symfony\Component\HttpFoundation\RedirectResponse;

class Signups extends BaseController
{

    public function index()
    {
        //loading model signup
        $this->loadModel('Signup');

        if ($this->request->get('signup') !== null) {
//getting user inserted data converting special caractores specific in to html format -to prevent XSS attack
            $username = htmlspecialchars($this->request->get('username'));

            $email = htmlspecialchars($this->request->get('email'));
            $password = htmlspecialchars($this->request->get('password1'));
            $password2 = htmlspecialchars($this->request->get('password2'));

            if (empty($username || $email || $password || $password2)) {
                // check if the fields are empty
                //  header("location:/signups?error=emptyInput");
                throw new \Exception('Empty input');
            }
            //check if the username has no charactore epecific
            if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
                // echo "IninvalidUid"
                //  header("location:/signups?error=IninvalidUid");
                throw new \Exception('Invalid UID');
            }
            // check if the email is a valide email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // echo "IninvalidEmail"
                // header("location:/signups?error=IninvalidEmail");
                throw new \Exception('invalidEmail');
            }
            //check if the passwords matched
            if ($password !== $password2) {
                // echo "password dont matched"
                // header("location:/signups?error=passworddontmatched");
                throw new \Exception('passworddontmatched');
            }
            //check if the user already exist
            if (!$this->Signup->checkUser($username, $email)) {
                // echo "Usernametaken"
                //  header("location:/signups?error=Usernametaken");
                throw new \Exception('Usernametaken');
            }

//save user informations to the database after verifying necessary details
            $this->Signup->setUser($username, $password, $email);
            $url = "http://localhost:8080/logins";

            $response = new RedirectResponse($url);
            $response->send();

        }
        //randering signu form view
        $this->render('index');

    }

}
