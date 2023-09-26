<!DOCTYPE html>
<html lang="en">
<?php
const MAX = 999;
const MIN = 100;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 237 php - Javier Guijarro</title>
</head>
<body>
<?php
$arrayBidimensional = [];
$filas = 6;
$columnas = 9;

for ($i = 0; $i < $filas; $i++) {
    $fila = [];
    for ($j = 0; $j < $columnas ; $j++) {
        do {
            $numero = rand(MIN, MAX);
        } while(in_array($numero, $fila));
        array_push($fila, $numero);
        //POSIBLE ERROR
    }
    $arrayBidimensional = $fila;
}

$numeroMinimo = 99999;
$numeroMaximo = 0;
$columnaMaximo = 0;
$filaMinimo = 0;

for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas ; $j++) {
        $numero = $arrayBidimensional[$i][$j];
        if ($numero > $numeroMaximo) {
            $numeroMaximo = $numero;
            $columnaMaximo = $j;
        }

        if ($numero < $numeroMinimo) {
            $numeroMinimo = $numero;
            $filaMinimo = $i;
        }
    }
}

echo "<table>";
for ($i = 0; $i < $filas; $i++) {
    echo "<tr>";
    for ($j = 0; j < $columnas ; $j++) {
        $numero = $arrayBidimensional[$i][$j];
        echo '<td style="color: black;">' . $numero . '</td>';
    }
    echo "</tr>";
}
echo "</table>"

?>
</body>
</html>