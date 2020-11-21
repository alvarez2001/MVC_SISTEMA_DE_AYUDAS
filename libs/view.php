<?php

class View
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
            echo '<p class="error">' . $this->d['error'] . '</p>';
        }
    }
    public function showSuccess()
    {
        if (array_key_exists('success', $this->d)) {
            echo '<p class="success">' . $this->d['success'] . '</p>';
        }
    }
}