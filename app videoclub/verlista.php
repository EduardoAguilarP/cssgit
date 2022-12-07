<?php
$servidor="localhost";
$usuario="root";
$clave="";
$basedatos="videoclub";

    $sql="insert into clientes (dni, nombre, apellidos) values (".$_GET["dni"].",'".$_GET["nombre"]."', '".$_GET["apellidos"]."');";
    echo $sql;

       $conn = mysqli_connect($servidor,
       $usuario,
       $clave, $basedatos);
       if (mysqli_query($conn,$sql)) {
        header('location:listaGeneral.php');
       } else {
        echo "error".mysqli_error($conn);
       }
       mysqli_close($conn);
    ?>
</body>
</html>