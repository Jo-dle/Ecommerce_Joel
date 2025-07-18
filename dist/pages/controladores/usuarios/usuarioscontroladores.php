<?php
session_start();
include_once "./controladores/db_connect.php";
$query = "SELECT id,nombre,email,clave,tipo FROM usuarios";

$resultset = mysqli_query ($conexion, $query);
mostrarAlertaMensaje();
if (isset($_REQUEST["sesion"])){
    
    exit;
}
?>