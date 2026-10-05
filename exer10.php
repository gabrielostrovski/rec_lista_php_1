<?php
    function calcularMedia($notas) {
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return [
        "maior_nota" => max($notas),
        "menor_nota" => min($notas),
        "media" => $media,
        "situacao" => $situacao
    ];
}

$notas = [8, 6, 7.5, 9];
$resultado = calcularMedia($notas);

echo "Maior nota: " . $resultado["maior_nota"] . "<br>";
echo "Menor nota: " . $resultado["menor_nota"] . "<br>";
echo "Média: " . number_format($resultado["media"], 2, ',', '.') . "<br>";
echo "Situação: " . $resultado["situacao"];

?>