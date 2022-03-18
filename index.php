<?php

//replace index.php to ""
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
require ROOT . '/vendor/autoload.php';
require_once ROOT . '/controllers/BaseController.php';
require_once ROOT . '/models/Dbh.php';

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

//serapation the url parameters
$params = explode('/', $uri);
//var_dump($params);
if ($params[1] !== "") {

    //controller (make first letter capital with ucfirst)
    $controller = ucfirst($params[1]);

    $action = isset($params[2]) ? $params[2] : 'index';

    require_once __DIR__ . '/controllers/' . $controller . '.php';

    $controller = new $controller();
    // var_dump($controller);
    // die;
    //check if the method exist in a controller
    if (method_exists($controller, $action)) {
        // checking if there is third parameter in the url

        unset($params[0]);
        unset($params[1]);
        unset($params[2]);

        call_user_func_array([$controller, $action], $params);

    } else {
        // erreur 404 si l'action n'existe pas dans le controlleur ...
        throw new exception('404 Error, action "' . $action . '" doesn\'t exists into "' . (string) $controller . '" controller!');
    }

} else {
    // erreur 404 si l'action n'existe pas dans le controlleur ...
    throw new exception('404 Error, no params');
}
