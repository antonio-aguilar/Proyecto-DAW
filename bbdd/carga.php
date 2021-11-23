<?php

// Llamada a archivos requeridos
require_once "bd.php";

/* Insercion de datos de usuarios */

// INSERT INTO usuarios (usuario,nombre,password_hash) SELECT 'antonio','antonioaguilar','admin' FROM usuarios WHERE NOT EXISTS(SELECT * FROM usuarios WHERE usuarios.usuario='antonio') 

// Usuario 1
$usuario_1 = "antonio";
$contrasena_1 = password_hash("antonio", PASSWORD_DEFAULT);
$nombre_1 = "Antonio Aguilar";
$email_1 = "aaguilar.infor1@gmail.com";
$bd->exec('INSERT INTO usuarios (usuario, contrasena, nombre, email)
        VALUES ("' . $usuario_1 . '", "' . $contrasena_1 . '", "' . $nombre_1 . '", "' . $email_1 . '")');
/*
// Usuario 2
$usuario_2 = "david";
$nombre_2 = "David Gutierrez";
$clave_2 = password_hash("david", PASSWORD_DEFAULT);
$bd->exec('INSERT INTO usuarios (usuario, nombre, password_hash)
        VALUES ("' . $usuario_2 . '", "' . $nombre_2 . '", "' . $clave_2 . '")');

// Usuario 3
$usuario_3 = "yaye";
$nombre_3 = "Valle Delgado";
$clave_3 = password_hash("yaye", PASSWORD_DEFAULT);
$bd->exec('INSERT INTO usuarios (usuario, nombre, password_hash)
        VALUES ("' . $usuario_3 . '", "' . $nombre_3 . '", "' . $clave_3 . '")');

// Usuario 4
$usuario_4 = "dani";
$nombre_4 = "Daniel Ortiz";
$clave_4 = password_hash("dani", PASSWORD_DEFAULT);
$bd->exec('INSERT INTO usuarios (usuario, nombre, password_hash)
        VALUES ("' . $usuario_4 . '", "' . $nombre_4 . '", "' . $clave_4 . '")');

// Usuario 5
$usuario_5 = "alfonso";
$nombre_5 = "Alfonso Jimenez";
$clave_5 = password_hash("alfonso", PASSWORD_DEFAULT);
$bd->exec('INSERT INTO usuarios (usuario, nombre, password_hash)
        VALUES ("' . $usuario_5 . '", "' . $nombre_5 . '", "' . $clave_5 . '")');

// Usuario 6
/*$usuario_6 = "alfonso";
$nombre_6 = "Alfonso Jimenez";
$clave_6 = password_hash("alfonso", PASSWORD_DEFAULT);
$bd->exec('INSERT INTO usuarios (usuario, nombre, password_hash)
        VALUES ("' . $usuario_5 . '", "' . $nombre_5 . '", "' . $clave_5 . '")');*/

?>