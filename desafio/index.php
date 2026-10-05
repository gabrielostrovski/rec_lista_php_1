<?php
require_once "funcoes.php";

$produtos = [
    [
        "nome" => "Notebook",
        "quantidade" => 1,
        "valor_unitario" => 850.00
    ],
    [
        "nome" => "Mouse",
        "quantidade" => 2,
        "valor_unitario" => 75.00
    ],
    [
        "nome" => "Teclado",
        "quantidade" => 1,
        "valor_unitario" => 180.00
    ]
];

$relatorio = processarPedido($produtos);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório do Pedido</title>
</head>
<body>
    <h1>Relatório do Pedido</h1>

    <p>Produtos diferentes: <?php echo $relatorio["quantidade_produtos_diferentes"]; ?></p>
    <p>Total de itens: <?php echo $relatorio["quantidade_total_itens"]; ?></p>
    <p>Produto mais caro: <?php echo $relatorio["produto_mais_caro"]["nome"]; ?></p>
    <p>Produto com maior subtotal: <?php echo $relatorio["produto_maior_subtotal"]["nome"]; ?></p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor unitário</th>
            <th>Subtotal</th>
        </tr>

        <?php foreach ($relatorio["subtotais"] as $produto) { ?>
            <tr>
                <td><?php echo $produto["nome"]; ?></td>
                <td><?php echo $produto["quantidade"]; ?></td>
                <td>R$ <?php echo number_format($produto["valor_unitario"], 2, ',', '.'); ?></td>
                <td>R$ <?php echo number_format($produto["subtotal"], 2, ',', '.'); ?></td>
            </tr>
        <?php } ?>
    </table>

    <p>Total da compra: R$ <?php echo number_format($relatorio["total"], 2, ',', '.'); ?></p>
    <p>Desconto: R$ <?php echo number_format($relatorio["desconto"], 2, ',', '.'); ?></p>
    <p>Frete: R$ <?php echo number_format($relatorio["frete"], 2, ',', '.'); ?></p>
    <p>Valor final: R$ <?php echo number_format($relatorio["valor_final"], 2, ',', '.'); ?></p>
</body>
</html>