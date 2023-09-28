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