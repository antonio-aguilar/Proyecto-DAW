<?php
session_start();

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bbdd/bd.php";
require_once "funcionesConsultas.php";
//require_once "bbdd/carga.php";

/* Cabecera html de la web */
encabezado();

/* Contenido de la web */

// Si se ha enviado el formulario, usar la funcion añadirTarea(bd, descripcion)
mostrarFormularioTareas();
if (isset($_POST["enviar"])) {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $f_inicio = $_POST["f_inicio"];
    $f_fin = $_POST["f_fin"];
    añadirTarea($bd, $_SESSION['id_usuario'], $titulo, $descripcion, $f_inicio, $f_fin);
}

listarTareas($bd);

/* Pie html de la web */
pie();

?>