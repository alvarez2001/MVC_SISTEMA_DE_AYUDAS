<?php
define('URL', 'http://localhost/mvc');

define('HOST', 'localhost');
define('DB', 'mvc_app');
define('USER', 'root');
define('PASSWORD', '');
define('CHARSET', 'utf8mb4');

/*

    CREATE TABLE IF NOT EXISTS mvc_roles(
        id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
        rol VARCHAR(50) UNIQUE NOT NULL
    );
    
    

    CREATE TABLE  IF NOT EXISTS mvc_beneficiados(
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    apellido VARCHAR(150) NOT NULL,
    cedula VARCHAR(9) UNIQUE NOT NULL,
    sexo  ENUM('M','F') NOT NULL,
    imagen_cedula VARCHAR(255),
    correo VARCHAR(255),
    telefono VARCHAR(20),
    fecha_nacimiento DATE NOT NULL
);

CREATE TABLE IF NOT EXISTS mvc_usuarios(
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    apellido VARCHAR(150) NOT NULL,
    cedula VARCHAR(9) UNIQUE NOT NULL,
    correo VARCHAR(255) NOT NULL,
    nickname VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(500) NOT NULL,
    rol_id INT(11),
    FOREIGN KEY (rol_id) REFERENCES mvc_roles(id)
);

CREATE TABLE IF NOT EXISTS mvc_proyectos(
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(255) UNIQUE NOT NULL,
    descripcion VARCHAR(255),
    fecha_inicio DATE NOT NULL,
    imagen VARCHAR(255) NOT NULL
);


CREATE TABLE IF NOT EXISTS mvc_ayudas(
    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    beneficiado_id INT(11) NOT NULL, 
    proyecto_id INT(11) NOT NULL,
    fecha_ayuda DATE NOT NULL,
    descripcion_ayuda VARCHAR(500) NOT NULL,
    FOREIGN KEY (proyecto_id) REFERENCES mvc_proyectos(id),
    FOREIGN KEY (beneficiado_id) REFERENCES mvc_beneficiados(id)
);

*/