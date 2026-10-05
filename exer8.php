<?php
    function ordenarNomes($texto) {
    $nomes = explode(',', $texto);

    for ($i = 0; $i < count($nomes); $i++) {
        $nomes[$i] = trim($nomes[$i]);
    }

    sort($nomes);
    return $nomes;
}

$lista = ordenarNomes("Carlos, Ana, Bruno, Daniela");

foreach ($lista as $nome) {
    echo $nome . "<br>";
}

?>