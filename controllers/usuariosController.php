<?php

class Usuarios extends Controller
{


      public function __construct()
      {
            parent::__construct();
      }

      public function render()
      {

            $this->view->render('login/index', ['title' => 'usuarios']);
      }

      public function crearUsuario()
      {
            // nombre, apellido, cedula, correo, nickname, password, rol_id
            if ($this->existPOSTS(['nombre_usu', 'apellido_usu', 'cedula_usu', 'correo_usu', 'nickname', 'password', 'rol_id'])) {
                  $this->model->setNombre($this->getPost('nombre_usu'));
                  $this->model->setApellido($this->getPost('apellido_usu'));
                  $this->model->setCedula($this->getPost('cedula_usu'));
                  $this->model->setCorreo($this->getPost('correo_usu'));
                  $this->model->setNickname($this->getPost('nickname'));
                  $this->model->setPassword($this->getPost('password'));
                  $this->model->setRol_id($this->getPost('rol_id'));
                  if ($this->model->save()) {
                        echo 'usuario creado';
                  }
            }
      }
}