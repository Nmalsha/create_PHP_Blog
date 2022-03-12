<?php
use Symfony\Component\HttpFoundation\Request;

abstract class BaseController
{

    protected $request;

    public function __construct()
    {

        $this->request = Request::createFromGlobals();
        // var_dump($this->request->query->get('id'));
        // die('stop');
    }

    public function loadModel(string $model)
    {

        //loading models from folder models
        require_once ROOT . 'models/' . $model . '.php';

        $this->$model = new $model();

    }

    public function render(string $fichier, array $data = [])
    {
        extract($data);

        //Output buffer start
        ob_start();

        //randing the html docs from views/../..
        require_once ROOT . 'views/' . strtolower(get_class($this)) . '/' . $fichier . '.php';

        $content = ob_get_clean();

        require_once ROOT . 'views/layout/default.php';

    }

}
