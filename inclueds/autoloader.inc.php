<?php

/*
spl_autoload_register("autoLoader");

function autoLoader($className){
    $url =$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'inclueds') !==false){
        $path='../classes/';
      
        
    }else{
        $path='classes/'; 
    }
   
    $extension= ".classes.php";
    $fullPath = $path.$className.$extension;

    // if the path is wrong, gives a error
if(!file_exists( $fullPath)){
return false;
}
    include_once $fullPath;
}
*/

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});