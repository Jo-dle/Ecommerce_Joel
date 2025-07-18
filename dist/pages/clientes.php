<?php
include_once "./controladores/clientescontroladores.php";
?>

<main>
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 classs="card-title"> Gestor Ecommerce - Clientes </h3>
                        </div>
                    <div class ="card-body">
                        <h1> &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg>  &nbsp; Clientes </h1>

<?php
mostrarAlertaMensaje();
?>  
          
<table id="tabla" class = "table table-dark table-hover table-striped">
<thead>
    <tr>
<th>Nombre</th>
<th>Apellido</th>
<th>Email</th>
<th>DNI</th>
<th>Direccion</th>
<th><a href= "index.php?modulo=crearclientes"> <i class="bi bi-database-fill-add"></i></th>

</tr>
</thead>
<tbody>

<?php

while ($row = mysqli_fetch_assoc($resultset)) {
?>

<tr>
    <td><?php print $row["nombre"] ?></td>
    <td><?php print $row["apellido"] ?></td>
    <td><?php print $row["email"] ?></td>
    <td><?php print $row["dni"] ?></td>
    <td><?php print $row["direccion"] ?></td>
    <td><a href= "index.php?modulo=actualizarclientes&id=<?php echo $row ["id"]?>" > <i class="bi bi-pencil-square"></i>&nbsp;</i>
    <a href= "index.php?modulo=borrarclientes&id=<?php echo $row ["id"]?>" ><i class="bi bi-trash-fill"></i></td>
</tr>
<?php
}
?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
</main>