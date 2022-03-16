<?php
use Symfony\Component\HttpFoundation\RequestStack;

class Logins extends BaseController
{

    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function index()
    {
        $this->loadModel('Login');

        if ($this->request->get('login') !== null) {
            $username = $this->request->get('username');
            $password = $this->request->get('password');

            if (empty($username) || empty($password)) {

                throw new \Exception('Empty input');

            }
            //get the user informations from the database after verifying necessary details
            $session = $this->requestStack->getSession();
            var_dump($session);
            die;
            if (isset($_SESSION['id'])) {
                $isAdmin = $_SESSION["isAdmin"];

                $userid = $_SESSION["id"];
                //if the user is admin redirecting to the admin view and passing user id to the url
                if ($isAdmin !== null) {
                    header("location:/admins/index");

                } else {
                    //if the user is not admin redirecting user to the main page
                    header("location:/posts");
                }
            }

        }

        //calling to readpost view
        $this->render('index');
    }

}
