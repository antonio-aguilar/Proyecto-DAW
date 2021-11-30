<?php 

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bbdd/bd.php";
require_once "funcionesConsultas.php";

// Recoger datos
$id = $_REQUEST["id"];

// Modificamos la tarea
borrarTareas($bd,$id);

// Volvemos a la pagina de las tareas
header("Location: tareas.php");

?>