<?php

$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="videoclub";

$conn = new mysqli($servidor, $usuario, $clave, $basedatos);
$sql = "select * from clientes";
if (isset($_GET["nombre"])) {
  $sql=$sql. " where nombre='". $_GET["nombre"]."'";
}
echo $sql;
$resultado = $conn->query($sql);
?>


    <table class="table">
      <tr>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Borrar</th>
        <th>Ver Alquileres</th>
        <th>AJAX</th>
      </tr>
    <?php while($fila = $resultado->fetch_assoc()){?>
      <tr>
        <td><?=$fila["dni"]?></td>
        <td><?=$fila["nombre"]?></td>
        <td><?=$fila["apellidos"]?></td>
        <td><a href="borrarCliente.php?dni=<?=$fila["dni"]?>" class="btn btn-primary">Borrar</a></td>
        <td><a href="verAlquileresCliente.php?dni=<?=$fila["dni"]?>" class="btn btn-primary">Ver</a></td>
        <td><a href="verAlquileresCliente.php?dni=<?=$fila["dni"]?>" class="btn btn-primary alquileres" data-dni="<?=$fila["dni"]?>">Ver Ajax</a></td>    
      </tr>
      <?php } ?>
    </table>

<?php $conn->close();?>