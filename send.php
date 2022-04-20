<?php 

require __DIR__."/src/session.php";



$csrf_token = $_SESSION['csrf_token'] ?? false;

//var_dump($_SESSION['csrf_token'], filter_input(INPUT_POST, "_csrf_token"));

if($csrf_token !== filter_input(INPUT_POST, "_csrf_token")) {
    die("CSRF token inválido");
}

include __DIR__."/src/valida_captcha.php";
include __DIR__."/src/get_data.php";

//var_dump($_SESSION);

 ?>