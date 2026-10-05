<?php
    function criptografarMensagem($texto, $deslocamento = 3) {
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $caractere = $texto[$i];

        if ($caractere >= 'a' && $caractere <= 'z') {
            $resultado .= chr((ord($caractere) - 97 + $deslocamento) % 26 + 97);
        } elseif ($caractere >= 'A' && $caractere <= 'Z') {
            $resultado .= chr((ord($caractere) - 65 + $deslocamento) % 26 + 65);
        } else {
            $resultado .= $caractere;
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto, $deslocamento = 3) {
    return criptografarMensagem($texto, 26 - $deslocamento);
}

$mensagem = "Aprender PHP";
$criptografada = criptografarMensagem($mensagem);
$descriptografada = descriptografarMensagem($criptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $criptografada . "<br>";
echo "Mensagem descriptografada: " . $descriptografada;

?>