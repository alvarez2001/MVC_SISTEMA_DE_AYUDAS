<?php
class SessionController extends Controller
{
      public function __construct()
      {
            parent::__construct();
      }

      public function initSession()
      {
            session_start();
      }
      public function addSession($sessions)
      {
            foreach ($sessions as $key => $session) {
                  $_SESSION[$key] = $session;
            }
      }

      public function getSession($key)
      {
            return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
      }

      public function getAllSession()
      {
            return $_SESSION;
      }

      public function cleanVarSession($key)
      {
            unset($_SESSION[$key]);
      }

      public function closeSession()
      {
            session_unset();
            session_destroy();
      }

      public function isAdmin()
      {
            return $this->comprobarRol('administrador');
      }
      public function isColaborador()
      {
            return $this->comprobarRol('colaborador');
      }

      private function comprobarRol($value)
      {
            $this->initSession();
            return $value == $this->getSession('rol') ? true : false;
      }
}