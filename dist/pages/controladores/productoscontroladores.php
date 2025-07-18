<?php
include_once "db_connect.php";

 $query = "select id,nombre,descripcion,precio,existencias,imagen FROM productos";
 
$resultset = mysqli_query ($conexion, $query);
?>