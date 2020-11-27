<?php

require_once 'controllers/erroresController.php';

class App
{


    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($url[0])) {

            $archivoController = 'controllers/loginController.php';
            require_once $archivoController;
            $controller = new Login();
            $controller->loadModel('login');
            $controller->render();
            return false;
        }

        $archivoController = 'controllers/' . $url[0] . 'Controller.php';
        if (file_exists($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    if (isset($url[2])) {
                        // numero de parametros
                        $nparam = count($url) - 2;
                        //arreglo de parametros
                        $params = [];

                        for ($i = 0; $i < $nparam; $i++) {
                            array_push($params, $url[$i] + 2);
                        }

                        $controller->{$url[1]}($params);
                    } else {
                        //no tiene parametros , se manda a llamar
                        // el metodo tal cual
                        $controller->{$url[1]}();
                    }
                } else {
                    // error, no existe el metodo
                    $controller = new Errores();
                }
            } else {
                // no hay metodo a cargar, se carga el metodo default 
                $controller->render();
            }
        } else {
            // no existe el archivo, mandar error
            $controller = new Errores();
            $controller->render();
        }
    }
}
