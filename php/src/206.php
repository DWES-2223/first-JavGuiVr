<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 206 php - Javier Guijarro</title>
</head>
<body>
    <?php
    if(isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        if ($numero > 0) {
            echo "El número ".$numero." és positiu";
        } elseif ($numero < 0) {
            echo "El número ".$numero." és negatiu";
        } else {
            echo "El número ".$numero." és zero";
        }
    } else {
        echo "Posa el numero a comprobar a la variable numero del QueryString";
    }
    ?>
</body>
</html>