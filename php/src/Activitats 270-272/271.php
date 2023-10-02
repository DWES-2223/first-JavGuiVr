<!DOCTYPE html>
<html lang="en">
<?php
include ("atletes.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 271 php - Javier Guijarro</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    extract($_POST);
    if (array_key_exists($prova, $records)) {
        echo "<h1>Modificar una prova</h1>";
        $records[$prova]['marca'] = $marca;
        $records[$prova]['atleta'] = $atleta;
        $records[$prova]['natalici'] = $natalici;
        $records[$prova]['club'] = $club;
        $records[$prova]['data'] = $data;
        $records[$prova]['lloc'] = $lloc;
        echo "El record ha sigut modificat correctament <br><br>";
        include ("270a.php");
    } else {
        echo "La prova $prova no existeix en la llista de records oficials de la FEA";
    }
} else {
    include_once ("formulari.html");
}
?>
</body>
</html>