<?php
session_start();

// Archivos requeridos en la web
require_once "funciones.php";
require_once "bbdd/bd.php";

// Si el usuario ya esta logueado lo lleva la pagina de las tareas del tiron
if (isset($_SESSION['usuario'])) {
    header("Location: tareas.php");
}

// Funciones necesarias
function user($bd) {
    
    // Sentencia sql para listar los usuarios
    $sql = "SELECT id_usuario, usuario, contrasena FROM usuarios WHERE usuario = :usuario";
    // Consultas
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario']]);
    $usuario = $consulta->fetch(PDO::FETCH_OBJ);
    // Si el usuario no esta vacia y la contraseña es correcta con la contraseña del usuario hara lo que le digamos
    if (!empty($usuario) and password_verify($_POST['password'], $usuario->contrasena)) {
        $_SESSION['usuario'] = $usuario->usuario;
        $_SESSION['id_usuario'] = $usuario->id_usuario;
        header("Location: tareas.php");
    } else {
        //echo 'Usuario o clave incorrectos';
        echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
    }

}

if (isset($_POST["login"])) {
    user($bd);
}

// Encabezado de la web
encabezado1();

// Titulo
echo "<h3>Login sesion</h3>";

// Formulario
echo "<form name=\"formularioLogin\" action=\"login.php\" method=\"post\">";
echo "<p>Usuario: <input type=\"text\" name=\"usuario\" required></p>";
echo "<p>Contraseña: <input type=\"password\" name=\"password\" required></p>";
echo "<p><input class=\"boton_personalizado\" type=\"submit\" name=\"login\" value=\"login\"></p>";
echo "</form>";

echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
// Pie de la web
pie();

?>
