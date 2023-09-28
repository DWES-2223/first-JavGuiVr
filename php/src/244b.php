<!DOCTYPE html>
<html lang="en">
<?php
include_once("functions.php");
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
if (isset($_POST["noms"]) && isset($_POST["preus"])) {
    $noms = $_POST["noms"];
    $producteEuros = $_POST["preus"];
    if (count($noms) === count($producteEuros)) {
        if (count($noms) > 0 && count($producteEuros) > 0) {
            echo "<table style='border: 1px solid black;'>";
            echo "<tr>
        <th>Producto</th>
        <th>Precio en euro</th>
        <th>Precio en peseta</th>
        </tr>";
            for ($i = 0; $i < count($noms); $i++) {
                $productePesetas = euro2pesetes($producteEuros[$i]);
                $totalEuros += $producteEuros[$i];
                $totalPesetes += $productePesetas;
                echo "<tr>";
                echo "<td>$noms[$i]</td>";
                echo "<td>$producteEuros[$i]</td>";
                echo "<td>$productePesetas</td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td><b>Total</b></td>";
            echo "<td><b>$totalEuros</b></td>";
            echo "<td><b>$totalPesetes</b></td>";
            echo "</tr>";
            echo "</table>";
        }
    } else {
        echo "La quantitat introduida no es vàlida";
    }
} else {
    echo "Tens que introduir una quantitat vàlida";
}
?>
</body>
</html>