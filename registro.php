<?php
session_start();

// Archivos requeridos en la web
require_once "funciones.php";

// Si el usuario ya esta logueado lo lleva al index del tiron
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
}

// Encabezado de la web
encabezado();

// Funciones necesarias
function registro($bd) {
    
    // Registrar usuarios en la web
    if(isset($_POST['registro'])) { 
        if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '' or $_POST['nombre'] == '' or $_POST['email'] == '') { 
            echo 'Por favor llene todos los campos.'; 
        } else { 
            $sql = 'SELECT * FROM usuarios'; 
            $rec = mysql_query($sql); 
            $verificar_usuario = 0; 
            while($result = mysql_fetch_object($rec)) { 
                if($result->usuario == $_POST['usuario']) { 
                    $verificar_usuario = 1; 
                } 
            } 
            if($verificar_usuario) { 
                if($_POST['password'] == $_POST['repassword']) { 
                    $usuario = $_POST['usuario']; 
                    $password = $_POST['password']; 
                    $nombre =$_POST['nombre'];
                    $email = $_POST['email'];
                    $sql = "INSERT INTO usuarios (usuario,password,nombre,email) VALUES ('$usuario','$password','$nombre','$email')"; 
                    mysql_query($sql); 
                    echo 'Usted se ha registrado correctamente.'; 
                } else { 
                    echo 'Las claves no son iguales, intente nuevamente.'; 
                } 
            } else {
                echo 'Este usuario ya ha sido registrado anteriormente.'; 
            } 
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
