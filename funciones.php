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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Titulo de la pestaña del navegador -->
    <title>AGKAN</title>
</head>
<body>

  <header>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="btn btn-outline-light btn-floating m-1" href="index.php" role="button"><img src="images/img/Logo.png"
                alt="logo" class="social-icons" width="25" height="25"></a>
      <a class="navbar-brand" href="index.php">AGKAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        <?php
          if (isset($_SESSION['usuario'])) {
            echo "<li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"tareas.php\">Tareas <span class=\"sr-only\">Tareas</span></a>
          </li>";
          } ?>
          <li class=nav-item>
            <a class=nav-link href=usuarios.php>Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro Usuario</a>
          </li>
          
        </ul>
      </div>
      
      <?php

        // Titulo del encabezado de la web
        /*if (isset($_SESSION['usuario'])) {
            echo "<h1><a href=\"index.php\">Tareas pendientes del usuario " . $_SESSION['usuario'] . "</a></h1>";
          } else {
            echo "<h1><a href=\"index.php\">AGKAN</a></h1>";
          }*/

          // Si el usuario esta logueado mostrara el enlace para logout y de no estarlo mandara a la pagina de login
          if (isset($_SESSION['usuario'])) {
            echo "<a href=\"logout.php\">Logout</a>";
          } else {
            echo "<a href=\"login.php\">Login</a>";
          }
        ?>
    </nav>
      
  </header>
  <div class="men">

<?php } 

function encabezado1() {
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Titulo de la pestaña del navegador -->
    <title>AGKAN</title>
</head>
<body>

  <header>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"><a class="btn btn-outline-light btn-floating m-1" href="index.php" role="button"><img src="images/img/Logo.png"
                alt="logo" class="social-icons" width="25" height="25"></a>
      <a class="navbar-brand" href="index.php">AGKAN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        <?php
          if (isset($_SESSION['usuario'])) {
            echo "<li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"tareas.php\">Tareas <span class=\"sr-only\">Tareas</span></a>
          </li>";
          } ?>
          <li class=nav-item>
            <a class=nav-link href=usuarios.php>Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro Usuario</a>
          </li>
          
        </ul>
      </div>
      
      <?php

        // Titulo del encabezado de la web
        /*if (isset($_SESSION['usuario'])) {
            echo "<h1><a href=\"index.php\">Tareas pendientes del usuario " . $_SESSION['usuario'] . "</a></h1>";
          } else {
            echo "<h1><a href=\"index.php\">AGKAN</a></h1>";
          }*/

          // Si el usuario esta logueado mostrara el enlace para logout y de no estarlo mandara a la pagina de login
          if (isset($_SESSION['usuario'])) {
            echo "<a href=\"logout.php\">Logout</a>";
          } else {
            echo "<a href=\"login.php\">Login</a>";
          }
        ?>
    </nav>
      
  </header> 
  <div class="container">
  <br/>
<?php } ?>

<?php 
// Footer de la web
function pie() { ?>
    </div>

    <footer class="footer-expand-lg footer-dark bg-dark text-center text-white">

    <div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/antoniomanuelaguilarcaro/" role="button"><img src="images/iconos_sociales/facebook.png"
                alt="facebook" class="social-icons" width="25" height="25"></a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/aaguilarcaro" role="button"><img src="images/iconos_sociales/twitter.png" alt="twitter"
                class="social-icons" width="25" height="25"></a>
      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/antonio-manuel-aguilar-caro/" role="button"><img
                src="images/iconos_sociales/linkedin.png" alt="linkedin" class="social-icons" width="25" height="25"></a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/antonio-aguilar" role="button"><img
                src="images/iconos_sociales/github.png" alt="github" class="social-icons" width="25" height="25"></a>
    </section>
  </div>
    </div>
    <div class="col-sm">
      Titulaciones: <br/>
      - Técnico en Sistemas Microinformáticos y Redes <br/>
      - Administrador de Sistemas Informáticos en Red <br/>
      - Desarrollador de Aplicaciones Web
    </div>
    <div class="col-sm">
      Contacto: <br/>
      - Email: aaguilar.infor1@gmail.com <br/>
      - Movil: +34 619 553 405
    </div>
  </div>
</div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">Copyright © Antonio Manuel Aguilar Caro</div>
  <!-- Copyright -->
</footer>

<!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php } ?>