<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Configurações do servidor de e-mail
    $to = "seu_email@example.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Nova mensagem do formulário de contato";
    $body = "Nome: $name\n\nE-mail: $email\n\nMensagem: $message";

    // Envia o e-mail
    if (mail($to, $subject, $body)) {
        echo "Obrigado! Sua mensagem foi enviada.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem.";
    }
}
?>
