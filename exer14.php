<?php
    function estatisticasNumericas($numeros) {
    sort($numeros);
    $quantidade = count($numeros);
    $meio = floor($quantidade / 2);

    if ($quantidade % 2 == 0) {
        $mediana = ($numeros[$meio - 1] + $numeros[$meio]) / 2;
    } else {
        $mediana = $numeros[$meio];
    }

    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    return [
        "soma" => array_sum($numeros),
        "media" => array_sum($numeros) / $quantidade,
        "maior" => max($numeros),
        "menor" => min($numeros),
        "mediana" => $mediana,
        "pares" => $pares,
        "impares" => $impares
    ];
}

$numeros = [8, 3, 12, 5, 10, 7];
$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado["soma"] . "<br>";
echo "Média: " . number_format($resultado["media"], 2, ',', '.') . "<br>";
echo "Maior valor: " . $resultado["maior"] . "<br>";
echo "Menor valor: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["impares"];

?>