<?php
include_once "./controladores/usuarioscontroladores.php";
session_start();
?>

<main>
    
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 classs="card-title"> Gestor Ecommerce - Usuarios </h3>
                        </div>
                    <div class ="card-body">
                        <h1> &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
</svg>
</svg>  &nbsp;Usuarios </h1>
                    
<table id="tabla" class = "table table-dark table-hover table-striped">
<thead>
    <tr>
<th>Nombre</th>
<th>Email</th>
<th>Tipo</th>
<th><a href= "index.php?modulo=crearusuarios">  <i class="bi bi-database-fill-add"></i></i></th>

</tr>
</thead>
<tbody>

<?php

while ($row = mysqli_fetch_assoc($resultset)) {
?>

<tr>
    <td><?php print $row["nombre"] ?></td>
    <td><?php print $row["email"] ?></td>
    <td><?php print $row["tipo"] ?></td>
    
    <td><a href= "index.php?modulo=actualizarusuarios&id=<?php echo $row ["id"]?>" > <i class="bi bi-pencil-square"></i></i> 
    
    <?php
    if ($_SESSION["tipo"] === "administrador"){
    echo '<a href= "index.php?modulo=borrarusuarios&id=' .  $row ["id"] . '>" ><i class="bi bi-trash-fill"></i></td>';
    }
    ?>
   
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