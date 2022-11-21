<?php

$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="curso2";

$conn = new mysqli($servidor, $usuario, $clave, $basedatos);
$sql = "select * from Facturas";
$resultado = $conn->query($sql);
?>

<html>
<body>

<?php // el bucle while lo que hace es recorrer las filas
//lo que hace es pedir a la variable resultado una fila
//al pedir una fila puede acceder a las columnas
//esto siempre es cierto mientras haya una fila y el bucle se cumpla
?>

<?php while($fila = $resultado->fetch_assoc()){?>
  <p><?=$fila["numero"]?>,
  <?=$fila["concepto"]?>,
  <?=$fila["importe"]?>,
  <a href="borrar.php?numero=<?=$fila["numero"]?>">Borrar</a>
</p>  
<?php } ?>

<a href="formularionuevo.html">Nuevo</a>
</body>
</html>
<?php $conn->close();?>