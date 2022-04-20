<?php 

// define o conteúdo a ser mostrado na página como imagem
header('Content-Type: image/jpeg');

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

$_SESSION['captcha'] = $palavra;

imagecolorallocate($image, 0, 0, 0);
$cor = imagecolorallocate($image, 255, 255, 255);
//imagettftext(image, size, angle, x, y, color, fontfile, text)
imagettftext($image, 40, rand(-15,15), rand(40, 50), rand(80, 100), $cor, __DIR__."/../resources/Debrosee-ALPnL.ttf", $palavra);

imagejpeg($image);
//imagedestroy($image);

 ?>