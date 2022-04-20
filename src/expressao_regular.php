<?php 

require __DIR__."/session.php"

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


 ?>