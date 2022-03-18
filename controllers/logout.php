<!-- <?php
// session_start();
// session_unset();
// session_destroy();

// header("location:/posts");
// throw new \Exception('Logged out');
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session();
var_dump($session->get('session'));
die;
$session->get('session')->clear();
throw new \Exception('Logged out');
$url = "http://localhost:8080/posts";
$response = new RedirectResponse($url);
$response->send();
