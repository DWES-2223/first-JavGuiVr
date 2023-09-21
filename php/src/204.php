<!DOCTYPE html>
<html lang="en">
<?php
$edat = $_GET["edat"];
$edad_futura = $edat + 10;
$edad_pasada = $edat - 10;
$any_actual = date("Y");
const JUBILACION = 67;
$any_jubilacio = $any_actual + (JUBILACION - $edat);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 204 php - Javier Guijarro</title>
</head>
<body>
    <?php
    if(isset($_GET["edat"])) {
        echo $edad_pasada . "<br>";
        echo $edad_futura . "<br>";
        echo $any_jubilacio;
    } else {
        echo "Posa la teu edat actual a la variable edat pel QueryString";
    }
    ?>
</body>
</html>