<?php
session_start();

// Archivos requeridos en la web
require_once "funciones.php";
require_once "bbdd/bd.php";

// Si el usuario ya esta logueado lo lleva al index del tiron
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
}

// Encabezado de la web
encabezado();

// Funciones necesarias
function registro($bd) {
    
    $stmt = $db->prepare("INSERT INTO users(username,password,email,name) VALUES (:username,:hash_password,:email,:name)");
    $stmt->bindParam("username", $username,PDO::PARAM_STR) ;
    $hash_password= hash('sha256', $password); //Password encryption
    $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
    $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
    $stmt->bindParam("name", $name,PDO::PARAM_STR) ;
    $stmt->execute();

    INSERT INTO `usuarios` (`ID_USUARIO`, `USUARIO`, `CONTRASENA`, `NOMBRE`, `EMAIL`) VALUES (NULL, '', '', '', '')

  if (!empty($_POST['usuario']) && !empty($_POST['contrasena']) && !empty($_POST['nombre']) && !empty($_POST['email'])) {
    $sql = "INSERT INTO usuarios (usuario, contrasena, nombre, email) VALUES (:usuario, :contrasena, :nombre, :email)";
    $stmt = $bd->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
}
// Titulo  
echo "<h3>Registro de Usuario</h3>";

// Formulario de registro de usuario
echo "<form name=\"formularioRegistro\" action=\"registro.php\" method=\"post\">";
echo "<p>Usuario: <input type=\"text\" name=\"usuario\" required></p>";
echo "<p>Contraseña: <input type=\"password\" name=\"password\" required></p>";
echo "<p>Contraseña: <input type=\"password\" name=\"repassword\" required></p>";
echo "<p>Nombre: <input type=\"text\" name=\"nombre\" required></p>";
echo "<p>Email: <input type=\"email\" name=\"email\" required></p>";
echo "<p><input class=\"boton_personalizado\" type=\"submit\" name=\"registro\" value=\"registro\"></p>";
echo "</form>";

if (isset($_POST["registro"])) {
    registro($bd);
}

// Pie de la web
pie();

?>
