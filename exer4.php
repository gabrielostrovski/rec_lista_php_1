<?php
    function gerarSenha($quantidade) {
    if ($quantidade < 4) {
        return "A senha deve ter pelo menos 4 caracteres.";
    }

    $maiusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minusculas = "abcdefghijklmnopqrstuvwxyz";
    $numeros = "0123456789";
    $especiais = "!@#$%&*";
    $todos = $maiusculas . $minusculas . $numeros . $especiais;

    $senha = $maiusculas[rand(0, strlen($maiusculas) - 1)];
    $senha .= $minusculas[rand(0, strlen($minusculas) - 1)];
    $senha .= $numeros[rand(0, strlen($numeros) - 1)];
    $senha .= $especiais[rand(0, strlen($especiais) - 1)];

    for ($i = 4; $i < $quantidade; $i++) {
        $senha .= $todos[rand(0, strlen($todos) - 1)];
    }

    return str_shuffle($senha);
}

echo gerarSenha(10);

?>