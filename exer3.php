<?php
    function mascararCpf($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    $ultimosQuatro = substr($cpf, -4);
    return str_repeat('*', strlen($cpf) - 4) . $ultimosQuatro;
}

$cpf = "123.456.789-00";

echo mascararCpf($cpf);
?>