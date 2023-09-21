<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 208 php - Javier Guijarro</title>
</head>
<body>
    <?php
    if(isset($_GET["edat"])) {
        $edat = $_GET["edat"];
        switch ($edat) {
            case $edat < 3:
                echo "ets un bebé";
                break;
            case $edat >= 3 && $edat <= 12:
                echo "ets un xiquet";
                break;
            case $edat >= 13 && $edat <= 17:
                echo "ets un adolescent";
                break;
            case $edat >= 18 && $edat <= 66:
                echo "ets un adult";
                break;
            case $edat >= 67:
                echo "ets un jubilat";
                break;
            default:
                echo "Error!";
        }
    } else {
        echo "Posa la teu edat actual a la variable edat pel QueryString";
    }
    ?>
</body>
</html>