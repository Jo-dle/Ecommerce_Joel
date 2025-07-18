<?php
include_once "./controladores/productoscontroladores.php";

?>
<main>
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 classs="card-title"> Gestor Ecommerce - Productos </h3>
                        </div>
                    <div class ="card-body">
                        <h1> &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0z"/>
</svg>
</svg>  &nbsp;Productos </h1>
                    
<table id="tabla" class = "table table-dark table-hover table-striped">
<thead>
    <tr>
<th>Nombre</th>
<th>Descripción</th>
<th>Precio</th>
<th>Existencias</th>
<th>Imagen</th>

<th><a href= "index.php?modulo=crearproductos"> <i class="bi bi-database-fill-add"></i></th>


</tr>
</thead>
<tbody>


<?php
while ($row = mysqli_fetch_assoc($resultset)) {
    ?>
<tr>
    <td><?php print $row["nombre"] ?></td>
    <td><?php print $row["descripcion"] ?></td>
    <td><?php print $row["precio"] ?></td>
    <td><?php print $row["existencias"] ?></td>
    <td><img src="http://192.168.1.66/AdminLTE/dist/pages/img/<?php print $row ['imagen']?>" style="width: 50px; height. auto;"/> </td>
    <td><a href= "index.php?modulo=actualizarproductos&id=<?php echo $row ["id"]?>" > <i class="bi bi-pencil-square"></i>&nbsp;</i>   
    <a href= "index.php?modulo=borrarproductos&id=<?php echo $row ["id"]?>" ><i class="bi bi-trash-fill"></i></td>
  
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