<?php

class Errores extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {

        $this->view->render('errores/index', ['title' => 'Error 404']);
    }
}