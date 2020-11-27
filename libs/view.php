<?php

class View extends SessionController
{

    public function __construct()
    {
    }

    public function render($nombre, $data = [])
    {
        $this->d  = $data;
        $this->handleMessages();
        require 'views/' . $nombre . '.php';
    }
    private function handleMessages()
    {
        if (isset($_GET['success']) && isset($_GET['error'])) {
            //error
        } else if (isset($_GET['success'])) {
            $this->handleSuccess();
        } else if (isset($_GET['error'])) {
            $this->handleError();
        }
    }

    private function handleSuccess()
    {
        $hash = $_GET['success'];
        $success = new SuccessMessages();

        if ($success->existKey($hash)) {
            $this->d['success'] = $success->get($hash);
        }
    }

    private function handleError()
    {
        $hash = $_GET['error'];
        $error = new ErrorMessages();

        if ($error->existKey($hash)) {
            $this->d['error'] = $error->get($hash);
        }
    }

    public function showNombreApellido()
    {
        //$this->initSession();
        $nombres = $this->getSession('nombre') . ' ' . $this->getSession('apellido');

        return ucwords($nombres);
    }

    public function showTitle()
    {
        if (array_key_exists('title', $this->d)) {
            echo '<title>' . $this->d['title'] . '</title>';
        }
    }

    public function showMessages()
    {
        $this->showErrors();
        $this->showSuccess();
    }

    public function showErrors()
    {
        if (array_key_exists('error', $this->d)) {
            echo '<div class="alert alert-danger">' . $this->d['error'] . '</div>';
        }
    }
    public function showSuccess()
    {
        if (array_key_exists('success', $this->d)) {
            echo '<div class="alert alert-success">' . $this->d['success'] . '</div>';
        }
    }

    public function showProyectos()
    {
        require_once 'models/proyectomodel.php';
        $model = new ProyectoModel();
        $proyectos = $model->getAll();
        return $proyectos;
    }
}