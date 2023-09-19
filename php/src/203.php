<!DOCTYPE html>
<html lang="en">
<?php
$nombre = $_POST["nom"];
$apellido1 = $_POST["cognom1"];
$apellido2 = $_POST["cognom2"];
$email = $_POST["email"];
$anyo = $_POST["any"];
$telefono = $_POST["telefon"];

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos ejercicio 203</title>
</head>
<body>
    <table>
        <tr>
            <td>Nom</td>
            <td><?=$nombre?></td>
        </tr>

        <tr>
            <td>Cognoms</td>
            <td><?= $apellido1.' '.$apellido2?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>

        <tr>
            <td>Natalici</td>
            <td><?=$anyo?></td>
        </tr>

        <tr>
            <td>Telèfon</td>
            <td><?=$telefono?></td>
        </tr>
        
    </table>
</body>
</html>