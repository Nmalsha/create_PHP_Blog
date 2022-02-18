
<?php
/*
namespace controllers;


class Router {

    private $ctrl;
    private $view;

    public function routeReq(){
try{

    //automatic charge classes in the document models
    spl_autoload_register(function ($class) {
        require_once 'models/' . $class . '.php';
    });
    //create viriable url
$url='';

if(isset($_GET['url'])){
    //decompose de url and apply the filter
    $url = explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
//get the first parameter from the url and make it simple letters with the first capital letter
    $controller = ucfirst(strtolower($url[0]));
$controllerClass= "Controller" . $controller;
//get the controller classes
$controllerFile = "controllers/".$controllerClass. ".php";

if(file_exists($controllerFile)){


    require_once ($controllerFile);
    $this->ctlr= new $controllerClass($url);
}else{
    throw new \Exeption("Can not find the file",1);
}


}else {
  //  require_once ('controllers/');
}

}

    catch(\Exeption $e){
$errorMsg = $e->getMessage();

    }
}
}
*/