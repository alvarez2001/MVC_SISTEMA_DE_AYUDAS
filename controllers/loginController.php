<?php

class Login extends SessionController
{


    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {

        $this->view->render('login/index', ['title' => 'Login']);
    }
    public function iniciarSesion()
    {
        if ($this->existPOSTS(['nickname', 'password'])) {
            $nickname = $this->getPost('nickname');
            $password = $this->getPost('password');
            if ($nickname == '' || empty($nickname) || $password == '' || empty($password)) {
                // CAMPOS VACIOS
                $this->redirect('/', ['error' => ErrorMessages::ERROR_LOGIN_INICIARSESION_INGRESAR]);
                return;
            }
            $usuario = $this->model->login($nickname, $password);
            if ($usuario != NULL) {
                //TODO PERFECTO, GUARDO SESSION Y REDIRIJO A LA VISTA MAIN
                $this->initSession();
                $this->addSession([
                    'rol' => $usuario->getRol_name(),
                    'nombre' => $usuario->getNombre(),
                    'apellido' => $usuario->getApellido(),
                    'id' => $usuario->getId(),
                    'cedula' => $usuario->getCedula(),
                    'correo' => $usuario->getCorreo()
                ]);


                $this->redirect('/inicio', []);
            } else {
                //error al registrar los datos
                //revise su usuario y/o contraseña
                $this->redirect('/', ['error' => ErrorMessages::ERROR_LOGIN_INICIARSESION_INCORRECTO]);
                return;
            }
        } else {
            // PARAMETROS POST VACIOS
            $this->redirect('/', ['error' => ErrorMessages::ERROR_LOGIN_INICIARSESION_INGRESAR]);
            return;
        }
    }
}