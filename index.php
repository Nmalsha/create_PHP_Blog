<?php

define ('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
//die(ROOT);
//require_once "inclueds/autoloader.mvc.php";

//require ROOT . 'vendor/autoload.php';

require_once (ROOT.'/controllers/BaseController.php');
require_once(ROOT.'/models/Dbh.php');


$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


//serapation the url parameters
$params =explode ('/',$uri);

// var_dump($params);
//  die;
//check if the parameter exist in the url
//unset ($params[0]);
if($params[1] !== ""){
    // var_dump($params[1]);
//controller (make first letter capital with ucfirst)
$controller = ucfirst($params[1]);
// var_dump($controller);
// die;
$action = isset($params[2])? $params[2] : 'index';
// var_dump($controller);
// var_dump($action);
// die;
require_once (__DIR__.'/controllers/'.$controller.'.php');

// var_dump($params[1] );
// die;
$controller = new $controller();

//check if the method exist in a controller
if(method_exists($controller,$action)){
// checking if there is third parameter in the url
// var_dump($controller);
// var_dump($action);

//  die;
unset($params[0]);
unset($params[1]);
unset($params[2]);


call_user_func_array(array (new $controller,$action),$params);
 
   // $controller->$action();
}else{
    throw new \Exception('The page does not exist');
}

}else{

}

