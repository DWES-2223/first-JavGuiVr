<?php
include_once ("functions.php");
$numero = 77777777;
$cantDigits = digits($numero);
echo "El número $numero té $cantDigits dígits <br>";

$numero = 1234567;
$digit = 4;
$posicioDigit = digitsN($numero, $digit);
echo "La posició $digit del número $numero es: $posicioDigit <br>";

$numero = 77812345;
$cantDigits = 4;
$numeroLlevatDarrere = llevaDarrere($numero, $cantDigits);
echo "Últims $cantDigits dígits del número $numero: $numeroLlevatDarrere <br>";

$numero = 98734551;
$cantDigits = 2;
$numeroLlevatDavant = llevaDavant($numero, $cantDigits);
echo "Primers $cantDigits dígits llevats del número $numero: $numeroLlevatDavant <br>";