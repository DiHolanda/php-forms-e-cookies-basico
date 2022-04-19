<?php 

// define o conteúdo a ser mostrado na página como imagem
// header('Content-Type: image/jpeg');

// precisa habilitar o módulo gd no arquivo php.ini
// além disso, no PHP 8.1.3 que baixei, precisa ter este arquivo, porque vem como php.ini-development
// e então precisa indicar todo o caminho do módulo gd
// isso não se fala no curso nem na documentação >:|
$image = imagecreate(200, 200);
$palavra = "";

// gera array com todos os caracteres minúsculos e maiúsculos
$caracteres = array_merge(range('a', 'z'), range('A', 'Z'));

// embaralha as chaves do array e deixa os valores em ordem aleatória
shuffle($caracteres);

// dos caracteres embaralhados, gera uma palavra de cinco caracteres
$palavra = implode($caracteres);
$palavra = substr($palavra, 0, 5);

var_dump($palavra);

 ?>