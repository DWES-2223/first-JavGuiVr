<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 244a php - Javier Guijarro</title>
</head>
<body>
<?php
if (isset($_GET["productes"])) {
    $productes = $_GET["productes"];
    if ($productes > 0) {
        foreach ($productes as $producte) {
            echo "<p>" . $producte['nom'] . "</p><p>" . $producte['cost'] . "</p><br>";
            echo "Nombre: " . $producte->nom . "<br>";
            echo "Preu: " . $producte->cost . "<br><br>";
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