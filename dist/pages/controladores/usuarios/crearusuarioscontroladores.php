<?php
include_once "./controladores/db_connect.php";


if (isset($_REQUEST["guardar"])) {
  try {
      $nombre = sanitizar($conexion, $_REQUEST["nombre"]);
      $email = sanitizar($conexion, $_REQUEST["email"]);
      $clave = sanitizar($conexion, $_REQUEST["clave"]);
      $tipo = sanitizar($conexion, $_REQUEST["tipo"]);

      $query = "INSERT INTO usuarios (nombre, email, clave, tipo)
                VALUES (?, ?, SHA2(?, 256), ?)";

      $stmt = $conexion->prepare($query);
      $stmt->bind_param("ssss", $nombre, $email, $clave, $tipo);
      $stmt->execute();

      echo '<meta http-equiv="refresh" content="0; url=index.php?modulo=usuarios&mensaje=Usuario creado exitosamente" />';
  } catch (mysqli_sql_exception $e) {
      echo '<div class="alert alert-danger float-right" role="alert">
              <strong>¡Atención! No se ha creado el usuario: ' . $e->getMessage() . '</strong>
            </div>';
  }
}
?>