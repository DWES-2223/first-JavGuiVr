<!DOCTYPE html>
<html lang="en">
<?php
include ("atletes.php");
include ("functions.php");
global $records;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 272 php - Javier Guijarro</title>
</head>
<body>
<?php
$dates = array_column_ext($records,'data',-1);
$clubs = array_column_ext($records,'club',-1);
$llocs = array_column_ext($records,'lloc',-1);
$natalicis = array_column_ext($records,'natalici',-1);
$atletes = array_column_ext($records,'atleta',-1);

$recordMasAntiguo = vell($dates);
$clubMasVictorioso = laureado($clubs);
$ciudadMasVictoriosa = laureado($llocs);
$personaMasGanadora = laureado($atletes);
$atletaMasJoven = jove($natalicis,$dates);
$nombreAtletasMasJoven = '';
foreach ($records as $record => $valor){
    if($record == $atletaMasJoven[0]){
        $nombreAtletasMasJoven = $records[$record]['atleta'];
    }
}
?>
<p>Record més antic: <?= $recordMasAntiguo ?></p>
<p>Club amb més títols: <?= $clubMasVictorioso ?></p>
<p>Atleta amb més records: <?= $personaMasGanadora ?> </p>
<p>Ciutat més propicia a guanyar: <?= $ciudadMasVictoriosa?></p>
<p>Atleta més jove amb un récord: <?= $nombreAtletasMasJoven?> - <?= $atletaMasJoven[1]?> anys</p>
<?php
include ('270a.php');
?>
</body>
</html>