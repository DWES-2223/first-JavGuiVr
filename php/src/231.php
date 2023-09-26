<!DOCTYPE html>
<html lang="en">
<?php
$array = [];
for ($i=1; $i<=33; $i++) {
    $num = rand(0, 99);
    array_push($array, $num);
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 231 php - Javier Guijarro</title>
</head>
<body>
<ul>
    <?php
    sort($array);
    echo "<li>Máximo: $array[32]</li>";
    echo "<li>Mediano: $array[16]</li>";
    echo "<li>Mínimo: $array[0]</li>";
    ?>
</ul>

</body>
</html>