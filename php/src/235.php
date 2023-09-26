<!DOCTYPE html>
<html lang="en">
<?php
$persona1 = ['nom' => 'Javier' , 'altura' => 170 , 'email' => 'javier@gmail.com'];
$persona2 = ['nom' => 'Nico' , 'altura' => 180 , 'email' => 'nico@gmail.com'];
$persona3 = ['nom' => 'Arthur' , 'altura' => 175 , 'email' => 'arthur@gmail.com'];
$persona4 = ['nom' => 'Oscar' , 'altura' => 173 , 'email' => 'oscar@gmail.com'];
$persona5 = ['nom' => 'Álvaro' , 'altura' => 182 , 'email' => 'alvaro@gmail.com'];
$persones = [$persona1, $persona2, $persona3, $persona4, $persona5];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 235 php - Javier Guijarro</title>
</head>
<body>
<table>
    <tr>
        <th>Nom</th>
        <th>Altura</th>
        <th>Email</th>
    </tr>
    <tr>
        <?php
        foreach ($persones as $persona) {
            echo "<tr>";
            echo "<td>" . $persona['nom'] . "</td>";
            echo "<td>" . $persona['altura'] . "</td>";
            echo "<td>" . $persona['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tr>
</table>
</body>
</html>