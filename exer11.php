<?php
    function formatarTexto($texto) {
    $maiusculo = strtoupper($texto);
    $maiusculo = strtr($maiusculo, [
        "á" => "Á", "à" => "À", "â" => "Â", "ã" => "Ã",
        "é" => "É", "ê" => "Ê", "í" => "Í", "ó" => "Ó",
        "ô" => "Ô", "õ" => "Õ", "ú" => "Ú", "ü" => "Ü",
        "ç" => "Ç"
    ]);

    $minusculo = strtolower($texto);
    $minusculo = strtr($minusculo, [
        "Á" => "á", "À" => "à", "Â" => "â", "Ã" => "ã",
        "É" => "é", "Ê" => "ê", "Í" => "í", "Ó" => "ó",
        "Ô" => "ô", "Õ" => "õ", "Ú" => "ú", "Ü" => "ü",
        "Ç" => "ç"
    ]);

    preg_match_all('/./us', $texto, $caracteres);

    return [
        "maiusculo" => $maiusculo,
        "minusculo" => $minusculo,
        "primeiras_maiusculas" => ucwords($minusculo),
        "caracteres" => count($caracteres[0])
    ];
}

$resultado = formatarTexto("aprendendo programação em PHP");

echo "Maiúsculo: " . $resultado["maiusculo"] . "<br>";
echo "Minúsculo: " . $resultado["minusculo"] . "<br>";
echo "Primeiras letras maiúsculas: " . $resultado["primeiras_maiusculas"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["caracteres"];
?>

?>