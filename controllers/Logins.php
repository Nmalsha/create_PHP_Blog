<?php
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;

class Logins extends BaseController
{

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
            $user = $this->Login->getUser($username, $password);
            /* Configure le délai d'expiration à 30 minutes */
            session_cache_expire(30);
            $cache_expire = session_cache_expire();

            $session = new Session();
//set user infos to the session
            $sessionId = $session->set('id', $user[0]["userId"]);
            $session->set('username', $user[0]["username"]);
            $session->set('isAdmin', $user[0]["isAdmin"]);
            $sessionUserid = $session->get('id');

            if ($sessionUserid !== null) {

                $isAdmin = $session->get('isAdmin');
/**
 * @Route("/admins", name="homepage")
 */
                //if the user is admin redirecting to the admin view and passing user id to the url
                if ($isAdmin !== null) {
                    // return $this->redirectToRoute('adminindex');
                    $url = "http://localhost:8080/admins/index";

                    $response = new RedirectResponse($url);
                    $response->send();

                } else {
                    $url = "http://localhost:8080/posts";
                    $response = new RedirectResponse($url);
                    $response->send();

                }
            }

        }

        //calling to readpost view

        $this->render('index');
    }

}
