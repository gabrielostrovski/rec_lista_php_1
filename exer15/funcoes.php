<?php
    function calcularImc($peso, $altura) {
    return $peso / ($altura * $altura);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function gerarSenhaAleatoria($tamanho) {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

function contarVogais($texto) {
    preg_match_all('/[aeiouáéíóúàâêôãõü]/iu', $texto, $vogais);
    return count($vogais[0]);
}

function inverterTexto($texto) {
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
    return implode('', array_reverse($caracteres));
}

function calcularIdade($dataNascimento) {
    $nascimento = new DateTime($dataNascimento);
    $hoje = new DateTime();
    return $hoje->diff($nascimento)->y;
}

function converterMoeda($valor, $cotacao) {
    return $valor * $cotacao;
}

function formatarTelefone($telefone) {
    $telefone = preg_replace('/[^0-9]/', '', $telefone);

    if (strlen($telefone) == 11) {
        return "(" . substr($telefone, 0, 2) . ") " . substr($telefone, 2, 5) . "-" . substr($telefone, 7, 4);
    }

    if (strlen($telefone) == 10) {
        return "(" . substr($telefone, 0, 2) . ") " . substr($telefone, 2, 4) . "-" . substr($telefone, 6, 4);
    }

    return "Telefone inválido";
}

function gerarSaudacao() {
    $hora = date('H');

    if ($hora < 12) {
        return "Bom dia";
    } elseif ($hora < 18) {
        return "Boa tarde";
    }

    return "Boa noite";
}

function validarSenhaForte($senha) {
    $temMaiuscula = preg_match('/[A-Z]/', $senha);
    $temMinuscula = preg_match('/[a-z]/', $senha);
    $temNumero = preg_match('/[0-9]/', $senha);
    $temEspecial = preg_match('/[^A-Za-z0-9]/', $senha);

    return strlen($senha) >= 8 && $temMaiuscula && $temMinuscula && $temNumero && $temEspecial;
}

?>