<?php 

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

var_dump($nome, $email, $mensagem);

 ?>