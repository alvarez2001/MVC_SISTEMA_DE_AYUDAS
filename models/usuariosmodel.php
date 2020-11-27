<?php

class UsuariosModel extends Model implements IModel
{
      private $id;
      private $nombre;
      private $apellido;
      private $cedula;
      private $correo;
      private $nickname;
      private $password; //
      private $rol_id; //
      private $rol_name;


      public function __construct()
      {
            parent::__construct();
            $this->nombre = '';
            $this->apellido = '';
            $this->cedula = '';
            $this->correo = '';
            $this->nickname = '';
            $this->password = '';
      }



      public function save()
      {
            try {
                  $query = $this->prepare('INSERT INTO mvc_usuarios(nombre_usu, apellido_usu, cedula_usu, correo_usu, nickname, password, rol_id) VALUES (:nombre_usu, :apellido_usu, :cedula_usu, :correo_usu, :nickname, :password, :rol_id)');
                  $query->execute([
                        'nombre_usu' => $this->nombre,
                        'apellido_usu' => $this->apellido,
                        'cedula_usu' => $this->cedula,
                        'correo_usu' => $this->correo,
                        'nickname' => $this->nickname,
                        'password' => $this->password,
                        'rol_id' => $this->rol_id
                  ]);
                  return true;
            } catch (PDOException $e) {
                  error_log('USERMODEL::SAVE->PDOEXCEPTION ' . $e);
                  return false;
            }
      }
      public function getAll()
      {
            $items = [];
            try {
                  $query = $this->query('SELECT * FROM mvc_usuarios');
                  while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
                        $item = new UsuariosModel();
                        $item->setId($p['id_usu']);
                        $item->setNombre($p['nombre_usu']);
                        $item->setApellido($p['apellido_usu']);
                        $item->setCedula($p['cedula_usu']);
                        $item->setCorreo($p['correo_usu']);
                        $item->setNickname($p['nickname']);
                        $item->setRol_id($p['rol_id']);
                        array_push($items, $item);
                  }

                  return $items;
            } catch (PDOException $e) {
                  error_log('USERMODEL::getAll->PDOEXCEPTION ' . $e);
                  return false;
            }
      }
      public function get($id)
      {
            try {
                  $query = $this->prepare('SELECT * FROM mvc_usuarios WHERE id_usu = :id');
                  $query->execute([
                        'id_usu' => $id
                  ]);

                  $usuario = $query->fetch(PDO::FETCH_ASSOC);
                  $this->setId($usuario['id_usu']);
                  $this->setNombre($usuario['nombre_usu']);
                  $this->setApellido($usuario['apellido_usu']);
                  $this->setCedula($usuario['cedula_usu']);
                  $this->setCorreo($usuario['correo_usu']);
                  $this->setNickname($usuario['nickname']);
                  $this->setPassword($usuario['password']);
                  $this->setRol_id($usuario['rol_id']);
                  //$this->setRol_name($usuario['rol']);

                  return $this;
            } catch (PDOException $e) {
                  error_log('USERMODEL::getId->PDOEXCEPTION ' . $e);
                  return false;
            }
      }
      public function delete($id)
      {
            try {
                  $query = $this->prepare('DELETE FROM mvc_usuarios WHERE id_usu = :id');
                  $query->execute([
                        'id_usu' => $id
                  ]);
                  return true;
            } catch (PDOException $e) {
                  error_log('USERMODEL::delete->PDOEXCEPTION ' . $e);
                  return false;
            }
      }
      public function update()
      {
      }
      public function from($array)
      {
            $this->id         = $array['id_usu'];
            $this->nombre     = $array['nombre_usu'];
            $this->apellido   = $array['apellido_usu'];
            $this->cedula     = $array['cedula_usu'];
            $this->correo     = $array['correo_usu'];
            $this->nickname   = $array['nickname'];
            $this->password   = $array['password'];
            $this->rol_id     = $array['rol_id'];
            if (array_key_exists('rol', $array)) {
                  $this->rol_name = $array['rol'];
            }
      }

      private function getHashedPassword($password)
      {
            return password_hash($password, PASSWORD_DEFAULT, ['cost' => 15]);
      }
      public function exists($nickname)
      {
            try {
                  $query = $this->prepare('SELECT nickname FROM mvc_usuarios WHERE nickname = :nickname');
                  $query->execute([
                        'nickname' => $nickname
                  ]);
                  if ($query->rowCount() > 0) {
                        return true;
                  } else {
                        return false;
                  }
            } catch (PDOException $e) {
                  error_log('USERMODEL::exists->PDOEXCEPTION ' . $e);
                  return false;
            }
      }

      public function compararPassword($password, $id)
      {
            try {
                  $user = $this->get($id);
                  return password_verify($password, $user->getPassword());
            } catch (PDOException $e) {
                  error_log('USERMODEL::compararPassword->PDOEXCEPTION ' . $e);
                  return false;
            }
      }

      public function setId($id)
      {
            $this->id = $id;
      }
      public function setNombre($nombre)
      {
            $this->nombre = $nombre;
      }
      public function setApellido($apellido)
      {
            $this->apellido = $apellido;
      }
      public function setCedula($cedula)
      {
            $this->cedula = $cedula;
      }
      public function setCorreo($correo)
      {
            $this->correo = $correo;
      }
      public function setNickname($nickname)
      {
            $this->nickname = $nickname;
      }
      public function setPassword($password)
      {
            $this->password = $this->getHashedPassword($password);
      }
      public function setRol_id($rol)
      {
            $this->rol_id = $rol;
      }
      public function setRol_name($name)
      {
            $this->rol_name = $name;
      }


      public function getId()
      {
            return $this->id;
      }
      public function getNombre()
      {
            return $this->nombre;
      }
      public function getApellido()
      {
            return $this->apellido;
      }
      public function getCedula()
      {
            return $this->cedula;
      }
      public function getCorreo()
      {
            return $this->correo;
      }
      public function getNickname()
      {
            return $this->nickname;
      }
      public function getPassword()
      {
            return $this->password;
      }
      public function getRol_id()
      {
            return $this->rol_id;
      }
      public function getRol_name()
      {
            return $this->rol_name;
      }
}