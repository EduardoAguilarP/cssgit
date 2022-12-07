<?php

$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="videoclub";

$conn = new mysqli($servidor, $usuario, $clave, $basedatos);
$sql = "select numero, date_format(fecha,'%d/%m/%y') as fecha, titulo from alquileres 
inner join peliculas on peliculas.isbn= alquileres.peliculas_isbn where clientes_dni='".$_GET["dni"]."'";
$resultado = $conn->query($sql);
?>

<html>
  <head>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  <?php
  ?>
  <div class="container">
    <table class="table">
      <tr>
        <th>Alquiler</th>
        <th>Fecha</th>
        <th>Titulo</th>        
      </tr>
    <?php while($fila = $resultado->fetch_assoc()){?>
      <tr>
        <td><?=$fila["numero"]?></td>
        <td><?=$fila["fecha"]?></td>
        <td><?=$fila["titulo"]?></td>                  
      </tr>
      <?php } ?>
    </table>
    <a href="formulariolista.html" class="btn btn-primary">Nuevo</a>
  </div>
</body>
</html>
<?php $conn->close();?>