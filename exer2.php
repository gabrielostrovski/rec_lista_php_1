<?php

function inverterTexto(){

    echo "<h1>Inverter Texto</h1>";

    $texto = "Esse texto vai ser invertido";

    $textoInvertido = strrev($texto);

    echo $textoInvertido;

}

inverterTexto()

?>