<?php
include_once ("functions.php");
echo (esParell(4) ? "Es parell" : "No es parell");
echo "<br>";

$arrayRandom = arrayAleatori(10, 1 , 99);
print_r($arrayRandom);
echo "<br>";

$array = [4, 2, 7, 3, 5, 6];
$array = countParells($array);
print_r($array);