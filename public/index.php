<?php
echo "test";
die;
// define('ROOT',str_replace('index.php', '' , $_SERVER['SCRIPT_FILENAME']));
// die(ROOT);
//  require 'inclueds/autoloader.mvc.php';
//  use controllers\HelpController;
//  use controllers\FaqController;

// $params = explode('/',$_GET['p']);
require_once __DIR__ . '/../vendor/autoload.php';

// echo'<pre>';
//  var_dump(dirname(__DIR__));
//  echo'</pre>';
//  exit;

use app\core\Application;
use app\controllers\SiteController;

$app = new Application(dirname(__DIR__));



$app->router->get('/',[SiteController::class,'home']);
//  echo '<pres>';
//  var_dump($app->router);
//  echo '</pres>';
$app->router->get('/signup',[SiteController::class,'signupForm']);


//handle signup user
$app->router->post('/signup',[SiteController::class,'signupUser']);

$app->run();

/*
$page = $_GET['page'] ?? '';

if($page === 'help'){
    $ctrl = new HelpController();
}elseif($page === 'faq'){
    $ctrl = new FaqController();
}

if(isset($ctrl)){
    $body = $ctrl->getBody();
}else{
    $body = "Err";
}

require_once "template.php";
*/
?>
