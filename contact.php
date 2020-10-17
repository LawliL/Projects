<?php
$destinatario = "torofote@gmail.com";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$discord = $_REQUEST['discord'];
$message = $_REQUEST['message'];

$body = "===================================" . "\n";
$body = $body . "LawLDev Freelance" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $name . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $discord . "\n\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "===================================" . "\n";

mail($destinatario, $discord , $body, "From: $email\r\n");

header("location:index.html#contact");


?>