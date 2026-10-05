<?php
    function converterTemperatura($valor, $origem, $destino) {
    $origem = strtoupper($origem);
    $destino = strtoupper($destino);

    if ($origem == "C") {
        $celsius = $valor;
    } elseif ($origem == "F") {
        $celsius = ($valor - 32) * 5 / 9;
    } elseif ($origem == "K") {
        $celsius = $valor - 273.15;
    } else {
        return "Escala de origem inválida.";
    }

    if ($destino == "C") {
        return $celsius;
    } elseif ($destino == "F") {
        return ($celsius * 9 / 5) + 32;
    } elseif ($destino == "K") {
        return $celsius + 273.15;
    }

    return "Escala de destino inválida.";
}

echo converterTemperatura(25, "C", "F");

?>