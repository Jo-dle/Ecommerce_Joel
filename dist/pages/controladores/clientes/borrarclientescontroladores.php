

  <?php
include_once "./controladores/db_connect.php";

if (isset($_GET['borrar'])){
  $id =(int) $_GET['id'];
  $query = "DELETE FROM clientes WHERE id=$id";
  $resultset = mysqli_query($conexion, $query);

      if ($resultset){
        echo "<script>window.location.href = 'index.php?modulo=clientes&mensaje=Cliente eliminado';</script>";
        exit;
      }
      else {
        echo '<div class="alert alet-danger"> Error al eliminar '. mysqli_error ($conexion) . '</div>';
      }
}
try {
  $id =(int) $_GET ['id'];
  $query = "SELECT * FROM clientes WHERE id=$id";
  $resultset = mysqli_query($conexion, $query);
  $row = $resultset->fetch_assoc();
}
  //$row = mysqli_fetch_assoc($resultset);
catch (mysqli_sql_exception $e) {
  die("El cliente no existe" . $e->getMessage());
}



?>