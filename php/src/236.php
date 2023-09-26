<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 236 php - Javier Guijarro</title>
</head>
<body>
<?php
if (isset($_POST["quantitat"])) {
    $quantitat = $_POST["quantitat"];
    echo '<form method="get" action="237.php">';
    for ($i = 1; $i <= $quantitat; $i++) {
        echo '<label for="nom' . $i . '">Nom de la persona ' . $i . ':</label>';
                echo '<input type="text" id="nom' . $i . '" name="noms[]"><br>';

                echo '<label for="altura' . $i . '">Altura de la persona ' . $i . ':</label>';
                echo '<input type="text" id="altura' . $i . '" name="alturas[]"><br>';

                echo '<label for="email' . $i . '">Email de la persona ' . $i . ':</label>';
                echo '<input type="email" id="email' . $i . '" name="emails[]"><br><br>';
            }
        echo '<button type="submit">Enviar Datos</button>';
        echo '</form>';
} else {
    echo "Tens que introduir una quantitat vàlida";
}
?>
</body>
</html>