<?php
    function analisarNumero($numero) {
    $tipo = $numero % 2 == 0 ? "Par" : "Ímpar";

    $primo = true;

    if ($numero < 2) {
        $primo = false;
    } else {
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $primo = false;
                break;
            }
        }
    }

    $somaDivisores = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    $perfeito = $numero > 0 && $somaDivisores == $numero;

    return [
        "tipo" => $tipo,
        "primo" => $primo ? "É primo" : "Não é primo",
        "perfeito" => $perfeito ? "É perfeito" : "Não é perfeito"
    ];
}

$resultado = analisarNumero(28);

echo "Par ou ímpar: " . $resultado["tipo"] . "<br>";
echo $resultado["primo"] . "<br>";
echo $resultado["perfeito"];

?>