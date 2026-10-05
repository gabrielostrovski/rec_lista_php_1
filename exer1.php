<?php

function calcularFormula(){
    echo "<h1>Calculadora:</h1>";

    $numero1 = 1; 
    $numero2 = 0; 

    echo "Número 1: " . $numero1 . "<br>";
    echo "Número 2: " . $numero2 . "<br><br>";

    
    $resolucao = (($numero1 * 2 + $numero2 * 2) + ($numero1 + $numero2));

   
    echo "Resultado da fórmula: " . $resolucao . "<br>";

    if ($resolucao == 0){
        echo "Não é possível realizar a divisão."; 
    }
}

calcularFormula();
?>