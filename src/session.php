<?php 

session_start();

// gera um token para prevenir ataques csrf
// gerando chave randômica a partir da criptografia sha1
// sha1 é útil neste caso, ao contrário do que se fosse para criptografar senhas
$_SESSION['csrf_token'] = sha1(rand(1, 999999999));

// var_dump($_SESSION['csrf_token']);



 ?>