<!DOCTYPE html>
<html lang="en">
<?php
$array = [];
for ($i=1; $i<=100; $i++) {
    $num = rand(0, 1);
    if ($num == 0) {
        array_push($array, "M");
    } else {
        array_push($array, "F");
    }
}
$contadorM = 0;
$contadorF = 0;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 232 php - Javier Guijarro</title>
</head>
<body>
<?php
    foreach ($array as $valor) {
        if ($valor == "M") {
            $contadorM++;
        } else {
            $contadorF++;
        }
    }
    echo "M => $contadorM <br>";
    echo "F => $contadorF";
?>

</body>
</html>