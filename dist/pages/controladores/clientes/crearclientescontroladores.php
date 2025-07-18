
  <?php

include_once "./controladores/db_connect.php";

if (isset($_REQUEST["guardar"])) 
{
  try 
  {
      $nombre = sanitizar($conexion, $_REQUEST["nombre"]);
      $apellido = sanitizar($conexion, $_REQUEST["apellido"]);
      $email = sanitizar($conexion, $_REQUEST["email"]);
      $clave = sanitizar($conexion, $_REQUEST["clave"]);
      $dni = sanitizar($conexion, $_REQUEST["dni"]);
      $direccion = sanitizar($conexion, $_REQUEST["direccion"]);

      $query = "INSERT INTO clientes (nombre, apellido, email, clave, dni, direccion)
                VALUES (?, ?, ?, SHA2(?, 256), ?, ?)";
      $stmt = $conexion->prepare($query);
      $stmt->bind_param("ssssss", $nombre, $apellido, $email, $clave, $dni, $direccion);

  
      if($stmt->execute())
    {
      echo 
      "<script>window.location.href = 'index.php?modulo=clientes&mensaje=Cliente Creado Con Éxito';</script>";
    } 
    }   catch (mysqli_sql_exception $e) 
    {
      echo '<div class="alert alert-danger float-right" role="alert">
              <strong>atencion! No se ha creado el cliente: ' . $e->getMessage() . '</strong>
            </div>';
    }
}


?>