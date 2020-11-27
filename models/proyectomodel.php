<?php

class ProyectoModel extends Model implements IModel
{
      private $id;
      private $nombre;
      private $descripcion;
      private $fecha_inicio;
      private $imagen;


      public function __construct()
      {
            parent::__construct();
            $this->nombre = '';
            $this->descripcion = '';
            $this->fecha_inicio = '';
            $this->imagen = '';
      }



      public function save()
      {
            try {
                  $query = $this->prepare('INSERT INTO mvc_proyectos(nombre_pro, descripcion_pro, fecha_inicio_pro, imagen_pro) VALUES (:nombre_pro, :descripcion_pro, :fecha_inicio_pro, :imagen_pro)');
                  $query->execute([
                        'nombre_pro' => $this->nombre,
                        'descripcion_pro' => $this->descripcion,
                        'fecha_inicio_pro' => $this->fecha_inicio,
                        'imagen_pro' => $this->imagen,

                  ]);
                  return true;
            } catch (PDOException $e) {
                  error_log('PROYECTOSMODEL::SAVE->PDOEXCEPTION ' . $e);
                  return false;
            }
      }
      public function getAll()
      {
            $items = [];
            try {
                  $query = $this->query('SELECT * FROM mvc_proyectos ORDER BY nombre_pro ASC');
                  while ($p = $query->fetch(PDO::FETCH_ASSOC)) {
                        $item = new ProyectoModel();
                        $item->setId($p['id_pro']);
                        $item->setNombre($p['nombre_pro']);
                        $item->setDescripcion($p['descripcion_pro']);
                        $item->setFecha($p['fecha_inicio_pro']);
                        $item->setImagen($p['imagen_pro']);

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
            /*try {
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
            }*/
      }
      public function delete($id)
      {
            /*try {
                  $query = $this->prepare('DELETE FROM mvc_usuarios WHERE id_usu = :id');
                  $query->execute([
                        'id_usu' => $id
                  ]);
                  return true;
            } catch (PDOException $e) {
                  error_log('USERMODEL::delete->PDOEXCEPTION ' . $e);
                  return false;
            }*/
      }
      public function update()
      {
      }
      public function from($array)
      {
            /*$this->id         = $array['id_usu'];
            $this->nombre     = $array['nombre_usu'];
            $this->apellido   = $array['apellido_usu'];
            $this->cedula     = $array['cedula_usu'];
            $this->correo     = $array['correo_usu'];
            $this->nickname   = $array['nickname'];
            $this->password   = $array['password'];
            $this->rol_id     = $array['rol_id'];
            if (array_key_exists('rol', $array)) {
                  $this->rol_name = $array['rol'];
            }*/
      }


      public function setImagenGuardada()
      {
      }





      public function setId($id)
      {
            $this->id = $id;
      }
      public function setNombre($nombre)
      {
            $this->nombre = $nombre;
      }
      public function setFecha($fecha)
      {
            $this->fecha_inicio = $fecha;
      }
      public function setDescripcion($descripcion)
      {
            $this->descripcion = $descripcion;
      }
      public function setImagen($imagen)
      {
            $this->imagen = $imagen;
      }



      public function getId()
      {
            return $this->id;
      }
      public function getNombre()
      {
            return $this->nombre;
      }
      public function getFecha()
      {
            return $this->fecha_inicio;
      }
      public function getDescripcion()
      {
            return $this->descripcion;
      }
      public function getImagen()
      {
            return $this->imagen;
      }
}