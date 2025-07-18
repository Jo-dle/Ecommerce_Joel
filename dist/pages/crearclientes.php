
  <?php
include_once "./controladores/clientes/crearclientescontroladores.php";
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
                <h1>Crear nuevo cliente</h1>  
            <form
                $method=get
                $action="index.php">
                <div
                class ="form-group">
                  <label for ="nombre"> Nombre:</label>
                  <input type ="text" name="nombre" class ="form-control" value ="" required>
                  </div>
                  <div 
              class ="form-group">
              <label for ="apellido"> Apellido:</label>
              <input type ="text" name="apellido" class ="form-control" value = "" required>
              </div> 
              <div 
              class ="form-group">
              <label for ="email"> Email:</label>
              <input type ="email" name="email" class ="form-control" value = "" required>
              </div>  
              <div 
              class ="form-group">
              <label for ="clave"> Clave:</label>
              <input type ="password" name="clave" class ="form-control" value = "" required>
              </div> 
              <div 
              class ="form-group">
              <label for ="dni"> DNI:</label>
              <input type ="text" name="dni" class ="form-control" value = "" required>
              </div>
              <div
              class ="form-group">
              <label for ="direccion"> Direccion:</label>
              <input type ="text" name="direccion" class ="form-control" value = "" required>
              </div> 
              <div class="form group">
                <input type="hidden" name="modulo" value="crearclientes">
                <button type="submit" name="guardar" class="btn btn-primary"> Guardar</button>
                <a class="btn btn-danger" href="index.php?modulo=clientes" role ="button">Cancelar</a>
                <a class="btn btn-success position-fixed" href="loginclientes.php" role="button" style="right : 30px;">¿Ya tienes una cuenta?</a>
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
                 