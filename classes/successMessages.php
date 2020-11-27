<?php

class SuccessMessages
{
      const SUCCESS_ADMIN_NEWCATEGORY_EXIST = 'f6f0aedf686a5c562660e679a4bc6699';
      const SUCCESS_PROYECTO_CREAR_SEHACREADO = 'ea5b371c04b7df1bfcc9fc5ba67b9c15';
      private $successList = [];


      public function __construct()
      {
            $this->successList = [
                  SuccessMessages::SUCCESS_ADMIN_NEWCATEGORY_EXIST => 'se ha creado la categoria correctamente',
                  SuccessMessages::SUCCESS_PROYECTO_CREAR_SEHACREADO => 'Se ha creado correctamente el proyecto'
            ];
      }

      public function get($hash)
      {
            return $this->successList[$hash];
      }

      public function existKey($key)
      {
            if (array_key_exists($key, $this->successList)) {
                  return true;
            } else {
                  return false;
            }
      }
}