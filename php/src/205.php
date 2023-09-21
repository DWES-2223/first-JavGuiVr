<!DOCTYPE html>
<html lang="en">
    <?php
        const DINERO = [500, 200, 100, 50, 20, 10, 5, 2, 1];
        $saldo = [];
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 205 php - Javier Guijarro</title>
</head>
<body>
    <?php
    $diners = $_GET["quantitat"];
        
    if ($diners === null) {

    echo "Posa la quantitat a la variable quantitat pel QueryString";

    } else {
    
    $billets = array(500, 200, 100, 50, 20, 10, 5);
    $monedas = array(2, 1);

    foreach ($billets as $a) {
        $num = intdiv($diners, $a);
        echo "<p>" . $num . " bitllet de " . $a . "</p>";
        $diners -= $num * $a;
    }

    foreach ($monedas as $a) {
        $num = intdiv($diners, $a);
        echo "<p>" . $num . " moneda de " . $a . "</p>";
        $diners -= $num * $a;
    }
    }
    ?>
</body>
</html>