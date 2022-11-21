<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="curso2";

      $sql="delete from facturas where numero=".$_GET["numero"];
       $conn = mysqli_connect($servidor,
       $usuario,
       $clave, $basedatos);
       if (mysqli_query($conn,$sql)) {
        header('location:listaFacturas.php');
       } else {
        echo "ha petado todo".mysqli_error($conn);
       }
       mysqli_close($conn);
    ?>
</body>
</html>