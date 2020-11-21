<?php

class ErrorMessages
{
      // NOMENCLATURA: ERROR_CONTROLLER_METHOD_ACTION
      const ERROR_ADMIN_NEWCATEGORY_EXIST = 'f6f0aedf686a5c562660e679a4bc6699';


      private $errorList = [];

      public function __construct()
      {
            $this->errorList = [
                  ErrorMessages::ERROR_ADMIN_NEWCATEGORY_EXIST => 'la categoria ya existe, intente otra'
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