<?php

class Accueil extends BaseController
{

    public function index()
    {

        //calling to read post view
        $this->render('index');
    }

}
