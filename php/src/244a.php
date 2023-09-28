<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 244a php - Javier Guijarro</title>
</head>
<body>
<?php
if (isset($_GET["quantitat"])) {
    $quantitat = $_GET["quantitat"];
    if ($quantitat > 0) {
        echo '<form method="post" action="244b.php">';
        for ($i = 1; $i <= $quantitat; $i++) {
            echo '<label for="nom">Nom producte ' . $i . ': </label>';
            echo '<input type="text" id="nom' . $i . '" name="noms[]"><br>';

            echo '<label for="altura">Preu del producte ' . $i . ': </label>';
            echo '<input type="text" id="altura' . $i . '" name="preus[]"><br><br>';
        }
        echo '<button type="submit">Enviar productos</button>';
        echo '</form>';
    } else {
        echo "La quantitat introduida no es vàlida";
    }
} else {
    echo "Tens que introduir una quantitat vàlida";
}
?>
</body>
</html>