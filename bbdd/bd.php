<?php 

// Coneccion a la base de datos con mysql
try {
    $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    // Conexion a la base de datos en local
    //$bd = new PDO('mysql:host=localhost;dbname=agkan;charset=utf8', 'root', 'root', $opciones);
    // Conexion a la base de datos en remoto
    $bd = new PDO('mysql:host=remotemysql.com;dbname=UdabIuQ6Fy;charset=utf8', 'UdabIuQ6Fy', 'i7SJ4ho90y', $opciones);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

?>
