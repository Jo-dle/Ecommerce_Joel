<?php
 $db_host = "localhost";
 $db_user = "root";
 $db_pass = "1234";
 $db_database = "adminlte";
 $db_port = "3306";
//directivas necesarias para desactivar errores y warnings así como no detener la ejecución si hay error
ini_set("display_errors", 0);
ini_set("display_startup_errors", 0);
mysqli_report(MYSQLI_REPORT_OFF);
mostrarAlertaMensaje();
try {
    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
      
  } catch (mysqli_sql_exception $e) {
      echo '<div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between align-items-center" role="alert">
              <div>No se ha podido conectar a la base de datos: ' . $e->getMessage() . '</div>
              <a href="#" class="text-dark" data-dismiss="alert" aria-label="Cerrar" style="font-size: 1.5rem; text-decoration: none;">&times;</a>
              </button>
            </div>';
  }
       
function sanitizar($conexion, $datos){
return mysqli_real_escape_string($conexion,htmlspecialchars(trim(strip_tags($datos ?? ""))));
}

function mostrarAlertaMensaje()
{
    if (!empty($_GET['mensaje'])) {
        $mensaje = htmlspecialchars($_GET['mensaje'], ENT_QUOTES, 'UTF-8');
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> ' . $mensaje . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
        ';
    }
}

?> 