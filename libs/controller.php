<?php

class Controller
{

    public function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($model)
    {
        $url = 'models/' . $model . 'model.php';

        if (file_exists($url)) {
            require_once $url;

            $modelname =  $model . 'Model';
            $this->model = new $modelname();
        }
    }

    function existDataPost($params)
    {
        foreach ($params as $param) {
            if ($_POST[$param] == '' || empty($_POST[$param])) {

                return false;
            }

            return true;
        }
    }
    function existPOSTS($params)
    {
        foreach ($params as $param) {
            if (!isset($_POST[$param])) {

                return false;
            }

            return true;
        }
    }

    function existPost($post)
    {
        if (!isset($_POST[$post])) {

            return false;
        }
        return true;
    }

    function existGETS($params)
    {
        foreach ($params as $param) {
            if (!isset($_GET[$param])) {

                return false;
            }

            return true;
        }
    }
    function existGet($get)
    {
        if (!isset($_GET[$get])) {

            return false;
        }
        return true;
    }

    public function getGet($name)
    {
        return $_GET[$name];
    }

    public function getPost($name)
    {
        return $_POST[$name];
    }

    public function redirect($route, $mensajes)
    {
        $data = [];
        $params = '';

        foreach ($mensajes as $key => $mensaje) {
            array_push($data, $key . '=' . $mensaje);
        }
        $params = join('&', $data);

        if ($params != '') {
            $params = '?' . $params;
        }
        header('Location: ' . constant('URL') . $route . $params);
    }
}