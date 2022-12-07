<?php

$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="videoclub";

$conn = new mysqli($servidor, $usuario, $clave, $basedatos);
$sql = "select * from clientes";
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
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $.get("tablaClientesAjax.php",function(datos) {
        $("#datos").empty().append(datos);
      })
      $(".alquileres").click(function(e) {
        var dni=$(this).data("dni");
        e.preventDefault();
        $.get("verAlquileresClienteAjax.php?dni="+dni,function(datos) {
          $("#veralquileres").empty().append(datos);
        })
      })
      $("#filtrar").click(function(e) {
        e.preventDefault();
        var nombre=$("#nombre").val();
        $.get("tablaClientesAjax.php?nombre="+nombre,function(datos) {
          $("#datos").empty().append(datos);
        })
      })
    })
    </script>
  </head>
<body>
  <?php
  ?>
  <div class="container">
    <form>
      <label>Nombre:</label> <input type="text" id="nombre" />
      <button class="btn btn-primary" id="filtrar">Filtrar</button>
    </form>    
    <div id="datos"></div>
    <a href="formulariolista.html" class="btn btn-primary">Nuevo</a>
    <div id="veralquileres">
      zona de alquileres
    </div>
</body>
</html>
<?php $conn->close();?>