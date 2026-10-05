<?php
    function analisarProdutos($produtos, $nomePesquisa) {
    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $soma = 0;
    $produtoEncontrado = null;

    foreach ($produtos as $produto) {
        if ($produto["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produto;
        }

        if ($produto["preco"] < $maisBarato["preco"]) {
            $maisBarato = $produto;
        }

        if (strtolower($produto["nome"]) == strtolower($nomePesquisa)) {
            $produtoEncontrado = $produto;
        }

        $soma += $produto["preco"];
    }

    return [
        "mais_caro" => $maisCaro,
        "mais_barato" => $maisBarato,
        "media" => $soma / count($produtos),
        "pesquisa" => $produtoEncontrado
    ];
}

$produtos = [
    ["nome" => "Arroz", "preco" => 25.90],
    ["nome" => "Feijão", "preco" => 8.50],
    ["nome" => "Café", "preco" => 18.75]
];

$resultado = analisarProdutos($produtos, "Café");

echo "Mais caro: " . $resultado["mais_caro"]["nome"] . " - R$ " . number_format($resultado["mais_caro"]["preco"], 2, ',', '.') . "<br>";
echo "Mais barato: " . $resultado["mais_barato"]["nome"] . " - R$ " . number_format($resultado["mais_barato"]["preco"], 2, ',', '.') . "<br>";
echo "Média dos preços: R$ " . number_format($resultado["media"], 2, ',', '.') . "<br>";

if ($resultado["pesquisa"] != null) {
    echo "Produto encontrado: " . $resultado["pesquisa"]["nome"] . " - R$ " . number_format($resultado["pesquisa"]["preco"], 2, ',', '.');
} else {
    echo "Produto não encontrado.";
}

?>