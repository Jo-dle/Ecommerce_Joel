<!--AÃ±addido para la carga de DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">




_______________________________________________________________________
 <!-- jQuery Slim y Bootstrap 4 (posible compatibilidad con componentes antiguos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery (requerido por DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

<!-- InicializaciÃ³n de DataTable para la tabla 'tablaclientes' -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Verifica si el elemento existe en el DOM actual
    if ($('#tabla').length) {
      $('#tabla').DataTable({
        paging: true,
        lengthChange: false,
        searching: true,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true
      });
    }
  });
</script>

_______________________________________________________________________

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php
// Mostrar errores de PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once "db_connect.php";

try {
  $query = "SELECT id, nombre, apellido, email, clave, dni, direccion FROM clientes";
  $resultset = mysqli_query($conexion, $query);
} catch (mysqli_sql_exception $e) {
  die("Error en la consulta: " . $e->getMessage());
}

try {
    $query = "SELECT id, nombre, apellido, email, clave, dni, direccion FROM clientes";
    $resultset = mysqli_query($conexion, $query);
} 
catch (mysqli_sql_exception $e) {
  echo '<div class="alert alert-danger">Error: ' . htmlspecialchars($e->getMessage()) . '</div>';
  exit;
}
?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <script>
              $(".alert").alert();
            </script>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title">Gestor  ecommerce</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <h1>Ecommerce</h1>  
                <p>Bienvenido Constantino</p>
                <p>Subeme un poco la nota por este detallito</p>
                

              <!-- /.card-header -->
         

                          
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
                 