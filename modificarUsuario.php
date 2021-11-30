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

// Despues de pulsar sobre modificarUsuario nos llevará a la pagina usuario
if (isset($_POST['modificarUsuario'])) {
    header("Location: usuarios.php");
}

// Listar Usuarios, si esta logueado saldra el campo de la contraseña de lo contrario no
if (isset($_SESSION['usuario'])) {
    if (isset($_POST['modificarUsuario'])) {
        $id = $_GET["id"];
        $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        modificarUsuario($bd,$id,$contrasena,$nombre,$email);
    }
    
    // Titulo  
    echo "<h3>Modificar Usuario</h3>";
    
    // Formulario de registro de usuario
    echo "<form name=\"modificarUsuario\" action=\"".$_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING'] ."\" method=\"post\">";
    echo "<p>Contraseña: <input type=\"password\" name=\"contrasena\" required></p>";
    echo "<p>Nombre: <input type=\"text\" name=\"nombre\" required></p>";
    echo "<p>Email: <input type=\"email\" name=\"email\" required></p>";
    echo "<p><input class=\"boton_personalizado\" type=\"submit\" name=\"modificarUsuario\" value=\"Modificar Usuario\"></p>";
    echo "</form>";

    
}



pie();

?>