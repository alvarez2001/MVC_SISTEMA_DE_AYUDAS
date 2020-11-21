<?php

class Errores extends Controller
{

    public function __construct()
    {
        parent::__construct();
        error_log('ERRORES::__CONSTRUCT -> PAGINA DE ERRORES');
    }

    public function render()
    {
        error_log('ERRORES::__CONSTRUCT -> PAGINA DE ERRORES');
        $this->view->render('errores/index', ['title' => 'Error 404']);
    }
}