<?php
// Llamada a archivos requeridos
require_once "bbdd/bd.php";

// Header de la web
function encabezado() {
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon/favicon.ico">
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>AGKAN</title>
</head>
<body>

    <header>
        <?php
            
            // Titulo del encabezado de la web
            if (isset($_SESSION['usuario'])) {
                echo "<h1><a href=\"index.php\">Tareas pendientes del usuario " . $_SESSION['usuario'] . "</a></h1>";
            } else {
                echo "<h1><a href=\"index.php\">AGKAN</a></h1>";
            }

            // Si el usuario esta logueado mostrara el enlace para logout y de no estarlo mandara a la pagina de login
            if (isset($_SESSION['usuario'])) {
                echo "<a href=\"logout.php\">Logout</a>";
            } else {
                echo "<a href=\"login.php\">Login / </a>";
                echo "<a href=\"registro.php\">Registro</a>";
            }
        
        ?>
    </header>
    
    <div id="container">
    <div id="main">
<?php } ?>


<?php 
// Footer de la web
function pie() { ?>
    </div>
    </div>
    <footer>
        <p>Copyright © Antonio Manuel Aguilar Caro</p>
        <!-- Botonera de acceso a redes sociales -->
        <a href="https://www.facebook.com/antoniomanuelaguilarcaro/"><img src="images/iconos_sociales/facebook.png"
                alt="facebook" class="social-icons" width="25" height="25"></a>
        <a href="https://twitter.com/aaguilarcaro"><img src="images/iconos_sociales/twitter.png" alt="twitter"
                class="social-icons" width="25" height="25"></a>
        <a href="https://www.linkedin.com/in/antonio-manuel-aguilar-caro/"><img
                src="images/iconos_sociales/linkedin.png" alt="linkedin" class="social-icons" width="25" height="25"></a>
    </footer>
</body>
</html>
<?php } ?>