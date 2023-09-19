<!DOCTYPE html>
<html lang="en">
<?php
$nombre = "Javier";
$apellido1 = "Guijarro";
$apellido2 = "Verdú";
$email = "javguiver@alu.edu.gva.es";
$anyo = 1939;
$telefono = 666123456;

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculos ejercicio 202</title>
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