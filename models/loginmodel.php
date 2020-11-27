<?php

class LoginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($nickname, $password)
    {
        try {
            $query = $this->prepare('SELECT 
            mvc_usuarios.id_usu, mvc_usuarios.nombre_usu, mvc_usuarios.apellido_usu, mvc_usuarios.cedula_usu, mvc_usuarios.correo_usu, mvc_usuarios.nickname, mvc_usuarios.password, mvc_usuarios.rol_id, mvc_roles.rol
            FROM mvc_usuarios 
            INNER JOIN mvc_roles 
            ON mvc_usuarios.rol_id = mvc_roles.id_rol 
            WHERE mvc_usuarios.nickname = :nickname');
            $query->execute(['nickname' => $nickname]);

            if ($query->rowCount() == 1) {
                $item = $query->fetch(PDO::FETCH_ASSOC);

                require_once 'models/usuariosmodel.php';
                $user = new UsuariosModel();
                $user->from($item);

                if (password_verify($password, $user->getPassword())) {
                    return $user;
                } else {
                    return NULL;
                }
            }
        } catch (PDOException $e) {
            error_log('LOGINMODEL::LOGIN->PDOEXCEPTION ' . $e);
            return NULL;
        }
    }
}