<?php
$nome= $_POST['fname'];
$email = $_POST['femail'];
$mensagem= $_POST['message'];
$formcontent="Mensagem enviada por: $name n Texto: $message";
$recipient = "seu-email-aqui@gmail.com";
$subject = "Formulário de contato";
$mailheader = "De: $email rn";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");
echo "Obrigado por entrar em contato!";
?>