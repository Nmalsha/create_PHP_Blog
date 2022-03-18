<?php
use Symfony\Component\HttpFoundation\RedirectResponse;

class Logout extends BaseController
{

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        $response = new RedirectResponse('/posts');
        $response->send();
    }

}
