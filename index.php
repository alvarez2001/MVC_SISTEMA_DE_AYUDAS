<?php

error_reporting(E_ALL);

ini_set('ignore_repeated_errors', TRUE);

ini_set('display_errors', FALSE);

ini_set('log_errors', TRUE);

ini_set('error_log', 'C:\xampp\htdocs\mvc\php-error.log');

error_log('INICIO DE APLICACION WEB');

require_once 'libs/database.php';
require_once 'classes/errorMessages.php';
require_once 'classes/successMessages.php';
require_once 'libs/controller.php';
require_once 'classes/sessionController.php';
require_once 'libs/model.php';
require_once 'libs/view.php';
require_once 'libs/app.php';



require_once 'config/config.php';

$app = new App();