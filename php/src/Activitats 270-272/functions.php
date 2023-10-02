<?php
function vell($array){
    $fechaMasAntigua = PHP_INT_MAX;
    $claveMasAntigua = null;

    foreach ($array as $llave => $fecha){
        $fechaIngles = fechaInglesa($fecha);
        $fechaConvertida = strtotime($fechaIngles);
        if($fechaConvertida < $fechaMasAntigua || $fechaMasAntigua === null){
            $fechaMasAntigua = $fechaConvertida;
            $claveMasAntigua = $llave;
        }
    }
    return $claveMasAntigua;
}

function fechaInglesa($fecha) {
    $fechaPartida = explode(".", $fecha);
    return $fechaPartida[2]. "/" . $fechaPartida[1]. "/" . $fechaPartida[0];
}

function laureado($array){
    $vecesRepetidas = array_count_values($array);
    arsort($vecesRepetidas);
    $masRepetido = reset($vecesRepetidas);
    $valorMasRepetido = array_keys($vecesRepetidas,$masRepetido);
    return$valorMasRepetido[0];
}

function jove($nacimientos, $fechas){
    $atletaMasJoven = null;
    $diferenciaMasPequenya = null;
    $arrayAtletasMasJovenes = [];
    foreach ($nacimientos as $indice => $natalici){
        $fecha = $fechas[$indice];
        $anyoRecord = any($fecha);
        $diferencia = $anyoRecord - intval($natalici);
        if ($diferencia < $diferenciaMasPequenya || $diferenciaMasPequenya === null){
            $diferenciaMasPequenya = $diferencia;
            $atletaMasJoven = $indice;
        }
    }
    $arrayAtletasMasJovenes = [$atletaMasJoven,$diferenciaMasPequenya];
    return $arrayAtletasMasJovenes;
}

function any($fecha){
    $fechaPartida = explode('.',$fecha);
    return $fechaPartida[2];
}

function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey, $value)) { $val = $value[$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey, $value)) {
            $result[($indexkey == -1) ? $subarray : $value[$indexkey]] = $val;
        }
    }
    return $result;
}