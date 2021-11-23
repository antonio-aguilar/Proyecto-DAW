<?php
session_start();

// Destruimos la sesion
session_destroy();
// Y despues llevamos al usuario a la pagina de inicio de la web
header("Location: index.php");

?>