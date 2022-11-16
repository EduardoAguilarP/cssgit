<html>
    <body>
        <?php
            $numero1=$_GET["numero1"];
            $numero2=$_GET["numero2"];
            if ($numero1>$numero2){
                echo "El mayor es " .$numero1;
            } else {
                echo "El mayor es " .$numero2;
            }
            ?>
    </body>
</html>
