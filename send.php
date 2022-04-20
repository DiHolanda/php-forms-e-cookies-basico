<?php 

require __DIR__."/src/session.php";



$csrf_token = $_SESSION['csrf_token'] ?? false;

//var_dump($_SESSION['csrf_token'], filter_input(INPUT_POST, "_csrf_token"));

if($csrf_token !== filter_input(INPUT_POST, "_csrf_token")) {
    die("CSRF token inválido");
}

include __DIR__."/src/valida_captcha.php";


$url = filter_input(INPUT_POST, 'url');

/* expressões regulares

    \ escape
    ^ determina o início
    $ determina o fim
    . qualquer caracter
    * 0 ou mais caracteres
    + 1 ou mais caracteres
    {n, m} mínimo, máximo
    [a-zA-Z] intervalo

 */

// verifica o valor a partir de uma expressão regular
if(preg_match('/w{0,3}\.*[a-z]+\.[a-z]+[a-z\.]*$/', $url, $matches)){
    $url = $matches[0];
}
else{
    die("URL inválida");
}

include __DIR__."/src/get_data.php";
var_dump($url);
echo "Acesso feito com sucesso";

//var_dump($_SESSION);

 ?>