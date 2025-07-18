<?php
include_once "./clientes/db_connect.php";
$query = "SELECT id,nombre,apellido,email,clave,dni,direccion FROM clientes";
 
$resultset = mysqli_query ($conexion, $query);
mostrarAlertaMensaje();
?>