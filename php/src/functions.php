<?php
function esParell($num1): bool{
    return $num1%2 === 0;
}

function arrayAleatori(int $tam, int $min, int $max): array{
    $array = [];
    do {
        $num = rand($min, $max);
        array_push($array, $num);
    } while (count($array) != $tam);
    return $array;
}

function countParells($array): int {
    $numParells = 0;
    foreach ($array as $item) {
        if ($item%2 === 0) {
            $numParells++;
        }
    }
    return $numParells;
}

function major(): int {
    if (func_num_args() == 0) {
        return 0;
    } else {
      $max = 0;
        for ($i = 0; $i < func_num_args() ; $i++) {
            if (func_get_arg($i) > $max) {
                $max = func_get_arg($i);
            }
      }
        return $max;
    }
}

function concatenar(...$paraules): string {
    if (empty($paraules)) {
        return "";
    } else {
        $cadena = implode(' ', $paraules);
        return $cadena;
    }
}

function digits(int $num): int {
    return strlen((string)$num);
}

function digitsN(int $num, int $post): int {
    $numStr = (string)$num;
    $numArray = str_split($numStr);
    if ($post < 0 || $post >= strlen($numStr)) {
        return -1;
    } else {
        return $numArray[$post-1];
    }
}

function llevaDarrere(int $num, int $cant): int {
    $numString = (string)$num;
    if ($cant == 0 || $cant > strlen($numString) || $cant < 0) {
        return -1;
    } else {
        $substring = substr($numString, -$cant);
        return (int)$substring;
    }
}

function llevaDavant(int $num, int $cant): int {
    $numString = (string)$num;
    if ($cant == 0 || $cant > strlen($numString) || $cant < 0) {
        return -1;
    } else {
        $substring = substr($numString, 0, $cant);
        return (int)$substring;
    }
}

function peseta2euros(float $quant, float $cotizacio = 0.0060): float {
    return $quant * $cotizacio;
}

function euro2pesetes(float $quant, float $cotizacio = 166.386): float {
    return $quant * $cotizacio;
}

function posicionsImparelles(string $frase): string {
    $fraseFinal = "";
    for ($i = 1; $i < strlen($frase); $i += 2) {
        $fraseFinal .= substr($frase, $i, 1);
    }
    return $fraseFinal;
}

function quantitatVocals(string $frase) {
    $totalA = substr_count($frase, "a");
    $totalE = substr_count($frase, "e");
    $totalI = substr_count($frase, "i");
    $totalO = substr_count($frase, "o");
    $totalU = substr_count($frase, "u");
    $totalVocals = $totalA + $totalE + $totalI + $totalO + $totalU;
    echo "Total vocals A: ". $totalA;
    echo "Total vocals E: ". $totalE;
    echo "Total vocals I: ". $totalI;
    echo "Total vocals O: ". $totalO;
    echo "Total vocals U: ". $totalU;
    echo "Total vocals: ". $totalVocals;
}

function paraulesSeparades(string $frase) {
    $paraules = explode(" ", $frase);
    $numParaules = count($paraules);
    echo "Total de paraules: $numParaules \n";

    $paraulesJuntes = str_replace($frase," ", "");
    $quantitatLletres = strlen($paraulesJuntes);
    echo "Total de lletres: $quantitatLletres \n";

    foreach ($paraules as $paraula) {
        echo "Longitud de la paraula ". $paraula. ": ". strlen($paraula). "\n";
    }
}

function transformarCadena(string $cadena) {
    $cadenaFinal = "";
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($i % 2 == 0) {
            $cadenaFinal .= substr($cadena, $i, 1);
        } else {
            $cadenaFinal .= strtoupper(substr($cadena, $i, 1));
        }
    }
    echo "$cadenaFinal";
}


function esPalindrome(string $frase) {

}

function caractersCadena(string $frase) {

}