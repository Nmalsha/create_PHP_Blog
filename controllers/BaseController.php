<?php

abstract class BaseController{


    public function loadModel(string $model){
        //loading models on folder models
        require_once(ROOT.'/models/'.$model.'.php');
        $this->$model = new $model();
    }
    public function render(string $fichier,array $data = []){
        extract($data);
        // var_dump($posts);
        // die;

        //Output buffer start

//ob_start();

        //randing the html docs from views/../..
        require_once(ROOT.'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');


       // $content= ob_get_clean();

       // require_once (ROOT.'views/layout/defult.php');
        
    }
   
}