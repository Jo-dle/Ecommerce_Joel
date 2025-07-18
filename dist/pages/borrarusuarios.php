 <?php
include_once "./controladores/usuarios/borrarusuarioscontroladores.php";
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
                <h1>Borrar Usuario</h1>  
                <h1> ¿Seguro que quiere borrar el usuario? </h1>
                <form method="GET" action="index.php?modulo=borrarusuarios">                
              <input type="hidden" name="modulo" value="borrarusuarios">
              <input type="hidden" name="id" value ="<?php echo $id; ?>">
              <div class="form-group">
              <button type="submit" name="borrar"  class="btn btn-primary">Borrar</button>
              <a class="btn btn-danger" href="index.php?modulo=usuarios" role="button">Cancelar</a>
              </div>
            </form>

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
                 