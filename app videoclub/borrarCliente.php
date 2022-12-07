<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="videoclub";

      $sql="delete from clientes where dni=".$_GET["dni"];
       $conn = mysqli_connect($servidor,
       $usuario,
       $clave, $basedatos);
       if (mysqli_query($conn,$sql)) {
        header('location:listaGeneral.php');
       } else {
        echo "ha petado todo".mysqli_error($conn);
       }
       mysqli_close($conn);
    ?>
</body>
</html>