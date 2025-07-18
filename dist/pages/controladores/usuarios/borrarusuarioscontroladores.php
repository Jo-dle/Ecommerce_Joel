 <?php

include_once "./controladores/db_connect.php";

$id= sanitizar($conexion,$_REQUEST["id"]);

try {
    $query = "SELECT * FROM usuarios WHERE id =$id";
    $resultset = mysqli_query($conexion, $query);
    while ($row = $resultset->fetch_assoc()) {
  }
} 
catch (mysqli_sql_exception $e) {
  echo '<div class="alert alert-danger">Error: ' . htmlspecialchars($e->getMessage()) . '</div>';
  exit;
}
if (isset($_REQUEST["borrar"])){
        try {
          $query = "DELETE FROM usuarios WHERE id =$id";
            $resultset = mysqli_query($conexion, $query);
            
        if (!$resultset){
          echo '<div class="alert alet-danger"> Error al eliminar '. mysqli_error ($conexion) . '</div>';
          exit;
        }
        else {
          echo "<script>window.location.href = 'index.php?modulo=usuarios&mensaje=Usuario eliminado';</script>";
        }
      }
        catch (mysqli_sql_exception $e) {
          echo '<div class="alert alert-danger">Error: ' . htmlspecialchars($e->getMessage()) . '</div>';
          exit;
        }
}
?>