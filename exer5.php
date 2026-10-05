<?php
    function analisarTexto($texto) {
    preg_match_all('/[\p{L}\p{N}]+/u', $texto, $palavras);
    preg_match_all('/./us', $texto, $caracteres);
    preg_match_all('/[aeiouáéíóúàâêôãõü]/iu', $texto, $vogais);
    preg_match_all('/[bcdfghjklmnpqrstvwxyzç]/iu', $texto, $consoantes);

    return [
        "palavras" => count($palavras[0]),
        "caracteres" => count($caracteres[0]),
        "vogais" => count($vogais[0]),
        "consoantes" => count($consoantes[0])
    ];
}

$resultado = analisarTexto("Aprender PHP é muito bom");

echo "Palavras: " . $resultado["palavras"] . "<br>";
echo "Caracteres: " . $resultado["caracteres"] . "<br>";
echo "Vogais: " . $resultado["vogais"] . "<br>";
echo "Consoantes: " . $resultado["consoantes"];

?>