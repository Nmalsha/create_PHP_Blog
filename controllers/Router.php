<?php
class Router {

    private $ctrl;
    private $view;

    public function routeReq(){
try{
    spl_autoload_register(function ($class) {
        require_once 'models/' . $class . '.php';
    });
}

    catch(\Exeption $e){

    }
}
}