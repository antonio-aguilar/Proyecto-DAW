<?php

// Llamada a archivos requeridos
require_once "bbdd/bd.php";

/* ---------------------------------------------------------------------- LISTAR TAREAS ---------------------------------------------------------------------- */

// Funcion para ver las tareas pendientes sin completar
function listarTareas($bd) {
  echo "<h3>Listado de tareas</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT id_tarea, titulo, descripcion, f_inicio, f_fin, completada, id_usuario FROM tareas WHERE id_usuario = $_SESSION[id_usuario] AND completada = 0";
  // Encabezado de la tabla
  echo "<table class=\"table\" border=1 cellpadding=4 cellspacing=0>";
  echo "<thead class=\"thead-dark\"><tr>
  <th colspan=8> Tareas </th>
  <tr>
    <th> Titulo </th> <th> Descripción </th> <th> Fecha Inicio </th> <th> Fecha Fin </th> <th> Completada </th> <th> Operaciones </th> 
  </tr></thead>";

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna id
    //echo "<td>"; print $row['id_tarea'] . "\t"; echo "</td>";
    // Columna titulo
    echo "<td>"; print $row['titulo'] . "\t"; echo "</td>";
    // Columna descripcion
    echo "<td>"; print $row['descripcion'] . "\t"; echo "</td>";
    // Columna fecha inicio
    echo "<td>"; print $row['f_inicio'] . "\t"; echo "</td>";
    // Columna fecha fin
    echo "<td>"; print $row['f_fin'] . "\t"; echo "</td>";
    
    // Columna completada
    echo "<td>";if($row['completada'] == "0") {
      echo "<font color=\"#ff0000\">no</font>";
    } else {
      echo "<font color=\"#006600\">si</font>";
    } echo "</td>";
    // Operaciones
    echo "<td><a href=\"modificarTarea.php?id=" . $row['id_tarea'] . "\"> <img src=\"images/iconos/editar.png\" width=\"25\" height=\"25\"><a href=\"borrarTareas.php?id=" . $row['id_tarea'] . "\"> <img src=\"images/iconos/borrar.png\" width=\"25\" height=\"25\"> </a><a href=\"completarTareas.php?id=" . $row['id_tarea'] . "\"> <img src=\"images/iconos/completar.png\" width=\"25\" height=\"25\"> </a></td>";

    echo "</tr>";
  }
  echo "</table>";

  
}

// Funcion para ver todas las tareas
function listarTareas1($bd) {

  echo "<h3>Listado de tareas</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT id_tarea, titulo, descripcion, f_inicio, f_fin, completada, id_usuario FROM tareas WHERE id_usuario = $_SESSION[id_usuario]";

  // Encabezado de la tabla
  echo "<table class=\"table\" border=1 cellpadding=4 cellspacing=0>";
  echo "<thead class=\"thead-dark\"><tr>
  <th colspan=8> Tareas </th>
  <tr>
   <th> Titulo </th> <th> Descripción </th> <th> Fecha Inicio </th> <th> Fecha Fin </th> <th> Completada </th> <th> Operaciones </th>
  </tr></thead>";//<th> ID </th>

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna id
    //echo "<td>"; print $row['id_tarea'] . "\t"; echo "</td>";
    // Columna titulo
    echo "<td>"; print $row['titulo'] . "\t"; echo "</td>";
    // Columna descripcion
    echo "<td>"; print $row['descripcion'] . "\t"; echo "</td>";
    // Columna fecha inicio
    echo "<td>"; print $row['f_inicio'] . "\t"; echo "</td>";
    // Columna fecha fin
    echo "<td>"; print $row['f_fin'] . "\t"; echo "</td>";

    // Columna completada
    echo "<td>";if($row['completada'] == "0") {
      echo "<font color=\"#ff0000\">no</font>";
    } else {
      echo "<font color=\"#006600\">si</font>";
    } echo "</td>";

    // Operaciones
    echo "<td><a href=\"modificarTarea.php?id=" . $row['id_tarea'] . "\"> <img src=\"images/iconos/editar.png\" width=\"25\" height=\"25\"><a href=\"borrarTareas.php?id=" . $row['id_tarea'] . "\"> <img src=\"images/iconos/borrar.png\" width=\"25\" height=\"25\"> </a><a href=\"completarTareas.php?id=" . $row['id_tarea'] . "\"> <img src=\"images/iconos/completar.png\" width=\"25\" height=\"25\"> </a></td>";

    echo "</tr>";
  }
  echo "</table>";

  
}

// Funcion para ver las tareas pendientes sin completar para los usuarios sin registrar
function listarTareas2($bd) {

  echo "<h3>Listado de tareas</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT id_tarea, titulo, descripcion, f_inicio, f_fin, completada, id_usuario FROM tareas WHERE id_usuario = $_SESSION[id_usuario] AND completada = 1";

  // Encabezado de la tabla
  echo "<table class=\"table\" border=1 cellpadding=4 cellspacing=0>";
  echo "<thead class=\"thead-dark\"><tr>
  <th colspan=8> Tareas </th>
  <tr>
   <th> Titulo </th> <th> Descripción </th> <th> Fecha Inicio </th> <th> Fecha Fin </th> <th> Completada </th>
  </tr></thead>";//<th> ID </th>

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna id
    //echo "<td>"; print $row['id_tarea'] . "\t"; echo "</td>";
    // Columna titulo
    echo "<td>"; print $row['titulo'] . "\t"; echo "</td>";
    // Columna descripcion
    echo "<td>"; print $row['descripcion'] . "\t"; echo "</td>";
    // Columna fecha inicio
    echo "<td>"; print $row['f_inicio'] . "\t"; echo "</td>";
    // Columna fecha fin
    echo "<td>"; print $row['f_fin'] . "\t"; echo "</td>";

    // Columna completada
    echo "<td>";if($row['completada'] == "0") {
      echo "<font color=\"#ff0000\">no</font>";
    } else {
      echo "<font color=\"#006600\">si</font>";
    } echo "</td>";
    
    echo "</tr>";
  }
  echo "</table>";
}

// Funcion mostrar formulario
function mostrarFormularioTareas() {
  // Titulo  
  echo "<h3>Añadir tarea</h3>";

  // Formulario  tareas
  echo "<form name=\"formulario1\" action=\"tareas.php\" method=\"post\">";
  echo "<p>Titulo: <input type=\"text\" name=\"titulo\"></p>";
  echo "<p>Descripción: <input type=\"text\" name=\"descripcion\"></p>";
  echo "<p>Fecha inicio: <input type=\"date\" name=\"f_inicio\"></p>";
  echo "<p>Fecha fin: <input type=\"date\" name=\"f_fin\" id=\"f_fin\"></p>";
  echo "<p><input class=\"boton_personalizado\" type=\"submit\" name=\"enviar\" value=\"Enviar\"></p>";
  echo "</form>";

} 

/* ----------------------------------- AÑADIR TAREAS ----------------------------------- */
// Funcion para añadir tareas
function añadirTarea($bd, $id_usuario, $titulo, $descripcion, $f_inicio, $f_fin) {
  // Si la fecha de inicio es inferior a la de fin no se inserta la tarea y saldra un mensaje de error por pantalla
  if ($f_inicio < $f_fin) {
    $insertarDescripcion = $bd->exec("INSERT INTO `tareas` (`id_usuario`,`titulo`,`descripcion`,`f_inicio`,`f_fin`) VALUES ($id_usuario,'$titulo','$descripcion','$f_inicio','$f_fin')");
  } else {
    echo "La fecha de fin debe de ser mayor a la de inicio <br/><br/>";
  }
  
}

/* ----------------------------------- UPDATE completadas ----------------------------------- */
// Funcion para modificar si una tarea esta completada
function modificarCompletadas($bd,$id) {
  $modificaCompletada = $bd->exec("UPDATE `tareas` SET `completada` = '1' WHERE `tareas`.`id_tarea` = $id");
}

/* ----------------------------------- BORRAR TAREAS ----------------------------------- */
// Funcion para borrar tareas
function borrarTareas($bd,$id) {
  $borrar = $bd->exec("DELETE FROM `tareas` WHERE `tareas`.`id_tarea` = $id");
}

// Funcion para borrar tareas
function borrarUsuario($bd,$id) {
  $borrar = $bd->exec("DELETE FROM `usuarios` WHERE `usuarios`.`id_usuario` = $id");
}

/* ---------------------------------------------------------------------- Funciones Actualizar Tareas y Usuarios ---------------------------------------------------------------------- */

// Funcion para modificar las tareas, ya sea el titulok la descripcion, la fecha de fin
function modificarTarea($bd,$id,$titulo,$descripcion,$f_fin) {
  $modificarTareas = $bd->exec("UPDATE `tareas` SET `TITULO` = '$titulo', `DESCRIPCION` = '$descripcion', `F_FIN` = '$f_fin' WHERE `tareas`.`ID_TAREA` = $id");
}

// Funcion para modificar los usuarios
function modificarUsuario($bd,$id,$contrasena,$nombre,$email) {
  $modificarUsuario = $bd->exec("UPDATE `usuarios` SET `contrasena` = '$contrasena', `nombre` = '$nombre', `email` = '$email' WHERE `usuarios`.`ID_USUARIO` = $id");
}

/* ---------------------------------------------------------------------- Funciones Usuarios ---------------------------------------------------------------------- */

/* ----------------------------------- Listar Usuarios ----------------------------------- */
// Funcion para ver todos los usuarios, sin mostrar la contraseña
function listarUsuarios($bd) {

  echo "<h3>Listado de usuarios</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT usuario, nombre, email FROM usuarios";

  // Encabezado de la tabla
  echo "<table class=\"table\">";
  echo "<thead class=\"thead-dark\">
  <tr>
  <th colspan=5 text-align=center> Usuarios </th>
  <tr>
  <th> Usuario </th> <th> Nombre </th> <th> Email </th>
  </tr></thead>";

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna id
    echo "<td>"; print $row['usuario'] . "\t"; echo "</td>";
    // Columna descripcion
    echo "<td>"; print $row['nombre'] . "\t"; echo "</td>";
    // Columna email
    echo "<td>"; print $row['email'] . "\t"; echo "</td>";

    echo "</tr>";
  }
  echo "</table>";
}

// Funcion para ver todos los usuarios, sin mostrar la contraseña
function listarUsuarios1($bd) {

  echo "<h3>Listado de usuarios</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT id_usuario, usuario, nombre, email FROM usuarios";

  // Encabezado de la tabla
  echo "<table class=\"table\">";
  echo "<thead class=\"thead-dark\">
  <tr>
  <th colspan=5 text-align=center> Usuarios </th>
  <tr>
  <th> Usuario </th> <th> Nombre </th> <th> Email </th> <th> Operaciones </th>
  </tr></thead>";

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna id
    echo "<td>"; print $row['usuario'] . "\t"; echo "</td>";
    // Columna descripcion
    echo "<td>"; print $row['nombre'] . "\t"; echo "</td>";
    // Columna email
    echo "<td>"; print $row['email'] . "\t"; echo "</td>";

    // Operaciones
    echo "<td><a href=\"modificarUsuario.php?id=" . $row['id_usuario'] . "\"> <img src=\"images/iconos/editar.png\" width=\"25\" height=\"25\"><a href=\"borrarUsuario.php?id=" . $row['id_usuario'] . "\"> <img src=\"images/iconos/borrar.png\" width=\"25\" height=\"25\"> </a></td>";

    echo "</tr>";
  }
  echo "</table>";
}

// Funcion para ver todos los usuarios
function listarUsuarios2($bd) {

  echo "<h3>Listado de usuarios</h3>";
  // Realizamos la consulta SQL
  $sql = "SELECT usuario, nombre, contrasena, email FROM usuarios";

  // Encabezado de la tabla
  echo "<table border=1 cellpadding=4 cellspacing=0>";
  echo "<tr>
  <th colspan=5> Usuarios </th>
  <tr>
  <th> Usuario </th><th> Nombre </th><th> Contraseña </th> <th> email </th> 
  </tr>";

  // mostramos los datos en una tabla
  foreach ($bd->query($sql) as $row) {
    echo "<tr>";
    // Columna usuario
    echo "<td>"; print $row['usuario'] . "\t"; echo "</td>";
    // Columna nombre
    echo "<td>"; print $row['nombre'] . "\t"; echo "</td>";
    // Columna contraseña
    echo "<td>"; print $row['contrasena'] . "\t"; echo "</td>";
    // Columna email
    echo "<td>"; print $row['email'] . "\t"; echo "</td>";

    echo "</tr>";
  }
  echo "</table>";
}

?>
