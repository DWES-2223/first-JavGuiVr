<!DOCTYPE html>
<html lang="en">
<?php
include_once ("functions.php");
$totalEuros = 0;
$totalPesetes = 0;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 244b php - Javier Guijarro</title>
</head>
<body>
<?php
if (isset($_GET["productes"])) {
    $productes = $_GET["productes"];
    if ($productes > 0) {
        echo "<table>";
        echo "<tr>
        <th>Producto</th>
        <th>Precio en euro</th>
        <th>Precio en peseta</th>
        </tr>";
        foreach ($productes as $producte) {
            $nombre = $producte['nombre'];
            $producteEuros = $producte['cost'];
            $productePesetas = euro2pesetes($producteEuros);

            $totalEuros += $producteEuros;
            $totalPesetes += $productePesetas;
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$producteEuros</td>";
            echo "<td>$productePesetas</td>";
            echo "</tr>";
        }
        echo "<tr>";
        echo "<td><b>Total</b></td>";
        echo "<td><b>$totalEuros</b></td>";
        echo "<td><b>$totalPesetes</b></td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "La quantitat introduida no es vàlida";
    }
} else {
    echo "Tens que introduir una quantitat vàlida";
}
?>
</body>
</html>