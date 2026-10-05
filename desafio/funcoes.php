<?php
function calcularSubtotalProduto($produto) {
    return $produto["quantidade"] * $produto["valor_unitario"];
}

function calcularTotalPedido($produtos) {
    $total = 0;

    foreach ($produtos as $produto) {
        $total += calcularSubtotalProduto($produto);
    }

    return $total;
}

function calcularDescontoPedido($total) {
    if ($total > 1000) {
        return $total * 0.15;
    }

    if ($total > 500) {
        return $total * 0.10;
    }

    return 0;
}

function calcularFretePedido($total) {
    if ($total <= 300) {
        return 35;
    }

    if ($total <= 800) {
        return 20;
    }

    return 0;
}

function encontrarProdutoMaisCaro($produtos) {
    $maisCaro = $produtos[0];

    foreach ($produtos as $produto) {
        if ($produto["valor_unitario"] > $maisCaro["valor_unitario"]) {
            $maisCaro = $produto;
        }
    }

    return $maisCaro;
}

function encontrarMaiorSubtotal($produtos) {
    $maior = $produtos[0];

    foreach ($produtos as $produto) {
        if (calcularSubtotalProduto($produto) > calcularSubtotalProduto($maior)) {
            $maior = $produto;
        }
    }

    return $maior;
}

function processarPedido($produtos) {
    $subtotais = [];
    $quantidadeItens = 0;

    foreach ($produtos as $produto) {
        $subtotal = calcularSubtotalProduto($produto);

        $subtotais[] = [
            "nome" => $produto["nome"],
            "quantidade" => $produto["quantidade"],
            "valor_unitario" => $produto["valor_unitario"],
            "subtotal" => $subtotal
        ];

        $quantidadeItens += $produto["quantidade"];
    }

    $total = calcularTotalPedido($produtos);
    $desconto = calcularDescontoPedido($total);
    $frete = calcularFretePedido($total);
    $valorFinal = $total - $desconto + $frete;

    return [
        "quantidade_produtos_diferentes" => count($produtos),
        "quantidade_total_itens" => $quantidadeItens,
        "produto_mais_caro" => encontrarProdutoMaisCaro($produtos),
        "produto_maior_subtotal" => encontrarMaiorSubtotal($produtos),
        "subtotais" => $subtotais,
        "total" => $total,
        "desconto" => $desconto,
        "frete" => $frete,
        "valor_final" => $valorFinal
    ];
}
?>