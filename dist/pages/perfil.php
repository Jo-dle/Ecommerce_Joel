<?php
include_once "./controladores/actualizarclientescontroladores.php";
//include_once "./controladores/actualizarusuarioscontroladores.php"
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
                <h1>Perfil</h1>  
            <form method="get" action="index.php">
                <div class ="form-group">
                  <label for ="nombre"> Nombre:</label>
                  <input type ="text" name="nombre" class ="form-control" value ="<?php print $row['nombre'] ?>" required>
                </div>
                <div class ="form-group">
                  <label for ="apellido"> Apellidos:</label>
                  <input type ="text" name="apellido" class ="form-control" value ="<?php print $row['apellido'] ?>" required>
                </div>
              <div class ="form-group">
              <label for ="email"> Email:</label>
              <input type ="email" name="email" class ="form-control" value = "<?php print $row['email'] ?>" required>
              </div>  
              <div 
              class ="form-group">
              <label for ="clave"> Clave:</label>
              <input type ="password" name="clave" class ="form-control" value = "<?php print $row['clave']?>">
              </div> 
              <div  class ="form-group">
              <label for ="dni"> DNI:</label>
              <input type ="text" name="dni" class ="form-control" value = "<?php print $row['dni']?>" required>
              </div>
              <div class ="form-group">
              <label for ="direccion"> Direccion:</label>
              <input type ="text" name="direccion" class ="form-control" value = "<?php print $row['direccion']?>" required>
              </div> 
              <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']) ?>" required>
              <div class="form group">
                <input type="hidden" name="modulo" value="perfil">
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
                 