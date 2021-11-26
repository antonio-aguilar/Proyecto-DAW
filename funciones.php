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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Titulo de la pestaña del navegador -->
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

    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>