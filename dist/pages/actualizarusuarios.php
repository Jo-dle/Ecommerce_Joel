<?php
include_once "./controladores/actualizarusuarioscontroladores.php"
?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <script>
          $(".alert").alert();
        </script>
      </div>
    </div>
  </div>
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Gestor ecommerce</h3>
          </div>
           <!-- /.card-header -->
          <div class="card-body">
            <h1>Actualizar Perfil De Usuario</h1>
            <form method="REQUEST" action="index.php">
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo htmlspecialchars($row['nombre']); ?>" required>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row['email']); ?>" required>
              </div>
              <div class="form-group">
                <label for="clave">Clave:</label>
                <input type="password" name="clave" class="form-control" placeholder="Deje en blanco para no cambiarla">
              </div>
              <div class="form-group">
                <label for="tipo">Tipo:</label>
               <input type="radio" id="empleado" name="tipo" value="Empleado"/> <label for="empleado">Empleado</label>
              <input type="radio" id="administrador" name="tipo" value="administrador"/> <label for="administrador">Administrador</label>
              </div>
              <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']) ?>" required>
              <div class="form group">
                <input type="hidden" name="modulo" value="actualizarusuarios">
                <button type="submit" name="actualizar" value="1" class="btn btn-primary"> Actualizar</button>
                <a class="btn btn-danger" href="index.php?modulo=usuarios" role ="button">Cancelar</a>
              </div> 
            </form>      
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>