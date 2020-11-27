<?php

class Proyecto extends SessionController
{
      public function __construct()
      {
            parent::__construct();
      }
      public function render()
      {
            $this->view->render('proyecto/index', ['title' => 'Proyecto index']);
      }

      public function crear()
      {
            if ($this->existPost('formulario')) {
                  $valores = ['nombre_pro', 'fecha_inicio_pro'];
                  if ($this->existPOSTS($valores) && $this->existDataPost($valores) && isset($_FILES['imagen_pro'])) {

                        $this->model->setFecha($this->getPost('fecha_inicio_pro'));
                        $this->model->setDescripcion($this->getPost('descripcion_pro'));
                        $this->model->setNombre($this->getPost('nombre_pro'));
                        $fechaActual = new DateTime();
                        $img = $_FILES['imagen_pro'];
                        $rutaImg = 'public/images/subidas/' . $fechaActual->getTimestamp() . $img['name'];
                        move_uploaded_file($img['tmp_name'], './' . $rutaImg);
                        $this->model->setImagen($rutaImg);

                        if ($this->model->save()) {

                              $this->redirect('/proyecto/crear', ['success' => SuccessMessages::SUCCESS_PROYECTO_CREAR_SEHACREADO]);
                        } else {
                              $this->redirect('/proyecto/crear', ['error' => ErrorMessages::ERROR_PROYECTO_CREAR_FALLOGUARDAR]);
                              return;
                        }
                  } else {
                        $this->redirect('/proyecto/crear', ['error' => ErrorMessages::ERROR_PROYECTO_CREAR_EMPTY]);
                        return;
                  }
            } else {
                  $this->view->render('proyecto/crear', ['title' => 'Crear Proyecto']);
            }
      }
}