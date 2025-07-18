<?php
  include_once "db_connect.php";
  $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
  if ($conexion->connect_errno) 
  {
    die("<p>Error de conexión Nº: $conexion->connect_errno - $conexion->connect_error</p>\n</body>\n</html>");
  }

  if (isset($_REQUEST["id"]))
  {
    $query = "SELECT ventas.id, ventas.fecha, ventas.codoperacion, ventas.formadepago, clientes.nombre, clientes.apellido, clientes.email, clientes.id as idcliente FROM ventas INNER JOIN clientes WHERE idcliente = $_REQUEST[id] and ventas.idcliente = clientes.id";
    $resultset = mysqli_query($conexion, $query);
  
    
  }
  else
  {
    $query = "SELECT ventas.id, ventas.fecha, ventas.codoperacion, ventas.formadepago, clientes.nombre, clientes.apellido, clientes.email, clientes.id as idcliente FROM ventas INNER JOIN clientes WHERE ventas.idcliente = clientes.id";
    $resultset = mysqli_query($conexion, $query);
    
  }
?>