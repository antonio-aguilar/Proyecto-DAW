<?php
session_start();

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bbdd/bd.php";
require_once "funcionesConsultas.php";


// Encabezado de la web
encabezado();


if (isset($_POST['modificarTarea'])) {
    $id = $_GET["id"];
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    $f_fin = $_POST["f_fin"];
    modificarTarea($bd,$id,$titulo,$descripcion,$f_fin);
}

// Titulo  
echo "<h3>Modificar Tarea</h3>";

// Formulario de registro de usuario
echo "<form name=\"modificarTarea\" action=\"".$_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] ."\" method=\"post\">";
echo "<p>Titulo: <input type=\"text\" name=\"titulo\" required></p>";
echo "<p>Descripcion: <input type=\"text\" name=\"descripcion\" required></p>";
echo "<p>Fecha fin: <input type=\"date\" name=\"f_fin\" required></p>";
echo "<p><input class=\"boton_personalizado\" type=\"submit\" name=\"modificarTarea\" value=\"modificarTarea\"></p>";
echo "</form>";


// Pie de la web
pie();


?>