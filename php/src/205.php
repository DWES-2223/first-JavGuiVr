<!DOCTYPE html>
<html lang="en">
    <?php
        const DINERO = [500, 200, 100, 50, 20, 10, 5, 2, 1];
        $saldo = [];
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 205 php - Javier Guijarro</title>
</head>
<body>
    <?php
    if(isset($_GET["quantitat"])) {
        let $quantitat = $_GET["quantitat"];
        while ($quantitat != 0) {
            if ($quantitat - DINERO[0] > 0) {

            }
        }
    } else {
        echo "Posa la quantitat a la variable quantitat pel QueryString";
    }
    ?>

</body>
</html>