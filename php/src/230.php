<!DOCTYPE html>
<html lang="en">
    <?php
    $array = [];
    for ($i=1; $i<=50; $i++) {
        $num = rand(0, 99);
        array_push($array, $num);
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 230 php - Javier Guijarro</title>
</head>
<body>
    <ul>
        <?php
        foreach ($array as $num) {
            echo "<li>$num</li>";
        }
        ?>
    </ul>    
</body>
</html>