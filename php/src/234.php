<!DOCTYPE html>
<html lang="en">
<?php
$personas = ['Sergi' => 170,
    'Viti' => 175,
    'Pons' => 180,
    'Arthur' => 192,
    'Nico' => 200];
$sumaAlturas = array_sum($personas);
$numPersonas = count($personas);

$mitjana = $sumaAlturas/$numPersonas;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 234 php - Javier Guijarro</title>
</head>
<body>
<table>
    <tr>
        <th>Nom</th>
        <th>Altura</th>
    </tr>
    <?php
    foreach ($personas as $nom => $altura) {
        echo "<tr>";
        echo "<td>$nom</td>";
        echo "<td>$altura</td>";
        echo "</tr>";
    }
    ?>
    <tr>
        <?php
        echo "<td>Media</td>";
        echo "<td>$mitjana</td>";
        ?>
    </tr>
</table>
</body>
</html>