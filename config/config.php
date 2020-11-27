<?php
define('URL', 'http://localhost/mvc');

define('HOST', 'localhost');
define('DB', 'mvc_app');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8mb4');

/*

    CREATE TABLE IF NOT EXISTS mvc_roles(
        id_rol INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        rol VARCHAR(50) UNIQUE NOT NULL
    );

    INSERT INTO `mvc_roles` (`id_rol`, `rol`) VALUES (NULL, 'administrador'), (NULL, 'colaborador');
    

CREATE TABLE IF NOT EXISTS mvc_usuarios(
    id_usu INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre_usu VARCHAR(150) NOT NULL,
    apellido_usu VARCHAR(150) NOT NULL,
    cedula_usu VARCHAR(9) UNIQUE NOT NULL,
    correo_usu VARCHAR(255) NOT NULL,
    nickname VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(500) NOT NULL,
    rol_id INT(11),
    FOREIGN KEY (rol_id) REFERENCES mvc_roles(id_rol)
);

CREATE TABLE IF NOT EXISTS mvc_proyectos(
    id_pro INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre_pro VARCHAR(255) UNIQUE NOT NULL,
    descripcion_pro VARCHAR(255),
    fecha_inicio_pro DATE NOT NULL,
    imagen_pro VARCHAR(255) NOT NULL
);



CREATE TABLE IF NOT EXISTS mvc_cat_proyectos(
    id_cat INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre_cat VARCHAR(255) NOT NULL,
    proyecto_id INT(11) NOT NULL,
    FOREIGN KEY (proyecto_id) REFERENCES mvc_proyectos(id_pro)
);

    CREATE TABLE  IF NOT EXISTS mvc_beneficiados(
    id_benef INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre_benef VARCHAR(150) NOT NULL,
    apellido_benef VARCHAR(150) NOT NULL,
    cedula_benef VARCHAR(9) UNIQUE NOT NULL,
    sexo_benef  ENUM('M','F') NOT NULL,
    imagen_cedula_benef VARCHAR(255),
    correo_benef VARCHAR(255),
    telefono_benef VARCHAR(20),
    fecha_nacimiento_benef DATE NOT NULL,
    proyecto_id_benef INT(11) NOT NULL,
    FOREIGN KEY (proyecto_id_benef) REFERENCES mvc_proyectos(id_pro)
);


CREATE TABLE IF NOT EXISTS mvc_ayudas(
    id_ayu INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    beneficiado_id_ayu INT(11) NOT NULL, 
    cat_proyecto_id INT(11) NOT NULL,
    fecha_ayuda DATE NOT NULL,
    descripcion_ayuda VARCHAR(500) NOT NULL,
    FOREIGN KEY (cat_proyecto_id) REFERENCES mvc_cat_proyectos(id_cat),
    FOREIGN KEY (beneficiado_id_ayu) REFERENCES mvc_beneficiados(id_benef)
);

*/