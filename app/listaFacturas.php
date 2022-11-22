<?php

// variables en php se encargan de definir datos que puede variar
// empiezan por $
$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="curso2";

//mew my sqli genera un objeto a partir de unos parametros
//ese objeto es la conexion se mete en $conn
$conn = new mysqli($servidor, $usuario, $clave, $basedatos);
//defino una consulta SQL que es un texto
if (!empty($_GET["orden"])){
  echo $_GET["orden"];
}

$sql = "select * from facturas";
//conexion a la base de datos que la ejecute
//viene en la variable resultado
$resultado = $conn->query($sql);
?>

<html>
<body>
<table>
  <tr>
    <th><a href="?orden=numero">Numero</a></th>
    <th><a href="?orden=concepto">Concepto</a></th>
    <th><a href="?orden=importe">Importe</a></th>
  </tr>
  

<?php while($fila = $resultado->fetch_assoc()){?>
  <tr>
    <td><?=$fila["numero"]?></td>
    <td><?=$fila["concepto"]?></td>
    <td><?=$fila["importe"]?></td>
    <td><a href="borrar.php?numero=<?=$fila["numero"]?>">Borrar</td>
  </tr>
<?php } ?>
<?php
$sql2="select sum(importe) as suma from Facturas";
$resultado2=$conn->query($sql2);
$filaResultado2 = $resultado2->fetch_assoc();
?>
<tr>
  <td colspan="2">Total:</td>
  <td><?=$filaResultado2["suma"]?></td>
  <td>Euros</td>
</tr>
</table>
<a href="formularionuevo.html">Nuevo</a>
</body>
</html>
<?php $conn->close();?>