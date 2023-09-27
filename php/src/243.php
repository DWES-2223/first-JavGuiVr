<?php
include_once ("functions.php");

$euros = 100;
$pesetas = euro2pesetes($euros);
echo "$euros euros son $pesetas pesetas <br>";

$pesetas = 3400;
$euros = peseta2euros($pesetas);
echo "$pesetas pesetas son $euros euros";