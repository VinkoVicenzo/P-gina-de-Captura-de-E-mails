<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$aniversario = $_POST['aniversario'];

$arquivo = 'dados.txt';
$conteudo = "$nome|$email|$aniversario\r\n";

$arquivoAberto = fopen($arquivo, 'a');
fwrite($arquivoAberto, $conteudo);
fclose($arquivoAberto);
header("Location: enviado.html");

$pdf = 'Aprender_C.pdf';
$to_email = $email;
$subject = "Oi ".$nome."!";
$body = 'https://drive.google.com/file/d/1l0fHsAO4BLJ0WJ-_KALzdTRAdsbuOZm4/view?usp=sharing';
$headers = "From: Vinko\'s email";
    if (mail($to_email, $subject, $body, $headers)) {
        header("Location: enviado.html");
    } else {
        header("Location: nao_enviado.html");
    }

?>