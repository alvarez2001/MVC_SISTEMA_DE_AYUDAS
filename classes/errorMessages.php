<?php

class ErrorMessages
{
      // NOMENCLATURA: ERROR_CONTROLLER_METHOD_ACTION
      const ERROR_LOGIN_INICIARSESION_INCORRECTO = '437e4c63f747215cb78a2c7fe8df6a51';
      const ERROR_LOGIN_INICIARSESION_INGRESAR = '9af80c02dcbdca7a042762896607ef7b';
      const ERROR_PROYECTO_CREAR_EMPTY = 'e49ac95663bfd6017914aff268a44548';
      const ERROR_PROYECTO_CREAR_FALLOGUARDAR = '7b27d322532f6511cadaa7803c0782a9';


      private $errorList = [];

      public function __construct()
      {
            $this->errorList = [
                  ErrorMessages::ERROR_LOGIN_INICIARSESION_INCORRECTO => 'Usuario/contraseña <strong>Incorrectas</strong>',
                  ErrorMessages::ERROR_LOGIN_INICIARSESION_INGRESAR => 'Usuario/contraseña son <strong>Obligatorios</strong>',
                  ErrorMessages::ERROR_PROYECTO_CREAR_EMPTY => 'Nombre | Fecha | Imagen del proyecto son <strong>Obligatorios</strong>',
                  ErrorMessages::ERROR_PROYECTO_CREAR_FALLOGUARDAR => 'Ha ocurrido un error al guardar los datos'
            ];
      }

      public function get($hash)
      {
            return $this->errorList[$hash];
      }

      public function existKey($key)
      {
            if (array_key_exists($key, $this->errorList)) {
                  return true;
            } else {
                  return false;
            }
      }
}