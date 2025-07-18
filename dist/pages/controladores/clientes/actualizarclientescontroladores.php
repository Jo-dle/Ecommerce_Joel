<?php

include_once "./controladores/db_connect.php";

$id = sanitizar($conexion, $_REQUEST ["id"]);

try {
  $query = ("SELECT id,nombre,apellido,email,dni,direccion FROM clientes WHERE id=$id");
  $resulset = mysqli_query($conexion, $query);
  $row = $resulset->fetch_assoc();
}
catch (mysqli_sql_exception $e){
  echo '<div class="alert alet-danger">Error:Cliente No Existente ' . htmlspecialchars($e->getMessage()) . '</div>';
  exit;
}

if (isset($_REQUEST["actualizar"])) {
 
  try {
    $id = intval($_REQUEST ["id"]);
    $nombre = sanitizar($conexion, $_REQUEST["nombre"]);
    $apellido = sanitizar($conexion, $_REQUEST["apellido"]);
    $email = sanitizar($conexion, $_REQUEST["email"]);
    $nueva_clave = trim($_REQUEST["clave"]);
    $dni = sanitizar($conexion, $_REQUEST["dni"]);
    $direccion = sanitizar($conexion, $_REQUEST["direccion"]);

    $clave_actual_query="SELECT clave FROM clientes WHERE id =?";
    $stmt_actual = $conexion->prepare ($clave_actual_query);
    $stmt_actual->bind_param ("i", $id);
    $stmt_actual->execute();
    $resulset = $stmt_actual ->get_result();
    $row=$resulset->fetch_assoc();
    $clave_actual =$row["clave"];

if (!empty ($nueva_clave) && $clave_actual !== hash("sha256", $nueva_clave)){
$query = "UPDATE clientes SET nombre=?,apellido=?,email=?,clave=SHA2(?,256),dni=?,direccion=? WHERE id =?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("ssssssi",$nombre,$apellido,$email,$nueva_clave,$dni,$direccion,$id);
}
else{
$query = "UPDATE clientes SET nombre=?,apellido=?,email=?,dni =?,direccion=? WHERE id=?";
$stmt =$conexion->prepare($query);
$stmt->bind_param("sssssi",$nombre,$apellido,$email,$dni,$direccion,$id);
}

  if ($stmt->execute()) {
      echo "<script>window.location.href = 'index.php?modulo=clientes&mensaje=Cliente actualizado con éxito';</script>";
      exit;
  }
}
 catch (mysqli_sql_exception $e) 
 {
  echo "<script>window.location.href = 'index.php?modulo=clientes&mensaje=Error al actualizar cliente';</script>";
  exit;
 }
}
?>