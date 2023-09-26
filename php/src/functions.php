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