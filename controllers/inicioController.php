<?php

class Inicio extends SessionController
{
      public function __construct()
      {
            parent::__construct();
      }
      public function render()
      {
            $this->initSession();
            $rol = $this->getSession('rol');

            $this->view->render('inicio/' . $rol, ['title' => 'Inicio ' . $rol]);
      }

      public function administrador()
      {

            $this->render();
      }

      public function colaborador()
      {
            $this->render();
      }
}