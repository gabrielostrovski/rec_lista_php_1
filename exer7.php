<?php
    function calcularDesconto($valorCompra) {
    if ($valorCompra > 1000) {
        $percentual = 30;
    } elseif ($valorCompra > 500) {
        $percentual = 20;
    } elseif ($valorCompra > 100) {
        $percentual = 10;
    } else {
        $percentual = 0;
    }

    $desconto = $valorCompra * $percentual / 100;
    $valorFinal = $valorCompra - $desconto;

    return [
        "valor_original" => $valorCompra,
        "percentual" => $percentual,
        "desconto" => $desconto,
        "valor_final" => $valorFinal
    ];
}

$resultado = calcularDesconto(750);

echo "Valor original: R$ " . number_format($resultado["valor_original"], 2, ',', '.') . "<br>";
echo "Desconto: " . $resultado["percentual"] . "%<br>";
echo "Valor descontado: R$ " . number_format($resultado["desconto"], 2, ',', '.') . "<br>";
echo "Valor final: R$ " . number_format($resultado["valor_final"], 2, ',', '.');
?>