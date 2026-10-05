<?php
require_once "funcoes.php";

$imc = calcularImc(75, 1.80);
$emailValido = validarEmail("aluno@email.com");
$senhaGerada = gerarSenhaAleatoria(10);
$quantidadeVogais = contarVogais("Programação em PHP");
$textoInvertido = inverterTexto("PHP");
$idade = calcularIdade("2000-05-20");
$valorConvertido = converterMoeda(100, 5.20);
$telefoneFormatado = formatarTelefone("11987654321");
$saudacao = gerarSaudacao();
$senhaForte = validarSenhaForte("Senha@123");

echo "IMC: " . number_format($imc, 2, ',', '.') . "<br>";
echo "E-mail válido: " . ($emailValido ? "Sim" : "Não") . "<br>";
echo "Senha aleatória: " . $senhaGerada . "<br>";
echo "Quantidade de vogais: " . $quantidadeVogais . "<br>";
echo "Texto invertido: " . $textoInvertido . "<br>";
echo "Idade: " . $idade . " anos<br>";
echo "Valor convertido: R$ " . number_format($valorConvertido, 2, ',', '.') . "<br>";
echo "Telefone formatado: " . $telefoneFormatado . "<br>";
echo "Saudação: " . $saudacao . "<br>";
echo "Senha forte: " . ($senhaForte ? "Sim" : "Não");
?>