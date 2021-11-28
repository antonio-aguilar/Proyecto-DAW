<?php
session_start();
/* Desarrolla una página web que muestre una lista de cosas por hacer, más usuarios */

// Llamada a archivos requeridos
require_once "funciones.php";
require_once "bbdd/bd.php";
require_once "funcionesConsultas.php";
//require_once "carga.php";

/* Cabecera html de la web */
encabezado();

// Listar Usuarios, si esta logueado saldra el campo de la contraseña de lo contrario no
if (isset($_SESSION['usuario'])) {
    listarUsuarios($bd);
} else {
    listarUsuarios1($bd);
}

// Incluir algunos usuarios de prueba con el siguiente archivo php
//include "bbdd/carga.php";

/* Pie html de la web */
pie();

?>