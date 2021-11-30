<?php
session_start();

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bbdd/bd.php";
require_once "funcionesConsultas.php";

/* Cabecera html de la web */
encabezado();

// Si se ha enviado el formulario, usar la funcion añadirTarea(bd, descripcion)
if (isset($_SESSION['usuario'])) {
    mostrarFormularioTareas();
    if (isset($_POST["enviar"])) {
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $f_inicio = $_POST["f_inicio"];
        $f_fin = $_POST["f_fin"];
        añadirTarea($bd, $_SESSION['id_usuario'], $titulo, $descripcion, $f_inicio, $f_fin);
    }
} else {
    echo "<p>Logueate para acceder a más funciones!!</p>";
}

// Con este bucle decidimos que funcion elegimos para mostrar las tareas completadas o no 
if (isset($_GET["mostrar_completadas"]) == 1 && isset($_SESSION['usuario'])) {
    listarTareas1($bd);
} elseif (isset($_SESSION['usuario'])) {
    listarTareas($bd);
} else {
    listarTareas2($bd);
}

// Enlace para mostrar las tareas completadas u ocultar las ya completadas
if (isset($_SESSION['usuario'])) {
    echo "<br /> <a href=\"tareas.php?mostrar_completadas=1\"> Mostrar Completadas </a> / <a href=\"tareas.php\"> Ocultar Completadas </a>";
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
}

/* Pie html de la web */
pie();

?>