<?php

class Login extends Controller
{


    public function __construct()
    {
        parent::__construct();
        error_log('LOGIN::__CONSTRUCT-> INICIO DEL LOGIN');
    }

    public function render()
    {
        error_log('LOGIN::RENDER-> VISTA DEL LOGIN');
        $this->view->render('login/index', ['title' => 'Pagina de login']);
    }
}