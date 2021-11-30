<?php
session_start();

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bbdd/bd.php";
require_once "funcionesConsultas.php";

// Llama a la funcion necesaria
añadirTarea($bd, $titulo, $descripcion, $f_inicio, $f_fin)

?>