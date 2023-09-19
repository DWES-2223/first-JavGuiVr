<!DOCTYPE html>
<html lang="es">
<?php
$amplada = 5;
$altura = 10;
define("FACTOR", 2);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos ejercicio 201</title>
</head>
<body>
    <p>
        <?php
            $area = $amplada * $altura * FACTOR;
            echo "àrea del rectangle és: " . $area;
        ?>
    </p>
</body>
</html>


