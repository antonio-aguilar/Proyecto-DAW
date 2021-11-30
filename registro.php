<?php
session_start();

// Archivos requeridos en la web
require_once "funciones.php";
require_once "bbdd/bd.php";

// Si el usuario ya esta logueado lo lleva al index del tiron
if (isset($_SESSION['usuario'])) {
    header("Location: usuarios.php");
}

// Encabezado de la web
encabezado();

// Funciones necesarias
function registro($bd) {
  // Declaracion de variables para el envío de informacion
  $usuario = $_POST['usuario'];
  $contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
      
  // Sentencia que inserta la palabra en la base de datos
  $sql = "INSERT INTO usuarios (usuario,contrasena,nombre,email) VALUES ('$usuario','$contrasena','$nombre','$email')";
  //echo $consulta;
  try {
    $sql = $bd->exec($sql);

    echo ("Usuario registrado con éxito");
  } catch (\PDOException $e) {
    echo ("Ha habido un error insertando el usuario: ".$e->getMessage());
  }

  /*if ($sql = $bd->exec($sql)) {
    echo ("Usuario registrado con éxito");
  } else {
    echo ("Ha habido un error insertando el usuario");
  }*/
}

// Titulo  
echo "<h3>Registro de Usuario</h3>";

// Formulario de registro de usuario
echo "<form name=\"formularioRegistro\" action=\"registro.php\" method=\"post\">";
echo "<p>Usuario: <input type=\"text\" name=\"usuario\" required></p>";
echo "<p>Contraseña: <input type=\"password\" name=\"contrasena\" required></p>";
echo "<p>Nombre: <input type=\"text\" name=\"nombre\" required></p>";
echo "<p>Email: <input type=\"email\" name=\"email\" required></p>";
echo "<p><input class=\"boton_personalizado\" type=\"submit\" name=\"registro\" value=\"registro\"></p>";
echo "</form>";

if (isset($_POST["registro"])) {
  registro($bd);
}

echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
// Pie de la web
pie();

?>
