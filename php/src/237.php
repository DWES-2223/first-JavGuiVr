<!DOCTYPE html>
<html lang="en">
<?php
const MAX = 99999;
const MIN = 0;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 237 php - Javier Guijarro</title>
</head>
<body>
<?php
if (isset($_GET["noms"]) && isset($_GET["alturas"]) && isset($_GET["emails"])) {
    $noms = $_GET["noms"];
    $altures = $_GET["alturas"];
    $emails = $_GET["emails"];

    $nombreMasBajo = "";
    $nombreMasAlto = "";
    $alturaMasBaja = MAX;
    $alturaMasAlta = MIN;

    echo "<table>";
    echo "<tr><th>Nom</th><th>Altura</th><th>Email</th></tr>";

    for ($i = 0; $i < count($noms) ; $i++) {
        echo "<tr>";
        echo "<td>" . $noms[$i] . "</td>";
        echo "<td>" . $altures[$i] . "</td>";
        echo "<td>" . $emails[$i] . "</td>";
        echo "</tr>";

        if ($altures[$i] > $alturaMasAlta) {
            $alturaMasAlta = $altures[$i];
            $nombreMasAlto = $noms[$i];
        }

        if ($altures[$i] < $alturaMasBaja) {
            $alturaMasBaja = $altures[$i];
            $nombreMasBajo = $noms[$i];
        }
    }
    echo "</table><br>";
    echo "La altura más alta es de $nombreMasAlto i es de $alturaMasAlta <br>";
    echo "La altura más baja es de $nombreMasBajo i es de $alturaMasBaja";
} else {
    echo "No s'han introduit persones";
}
?>
</body>
</html>