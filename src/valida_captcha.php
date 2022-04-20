<?php 

require __DIR__."/src/session.php";



$captcha = $_SESSION['captcha'] ?? false;

//var_dump($_SESSION['captcha'], filter_input(INPUT_POST, "_captcha"));

if($captcha !== filter_input(INPUT_POST, "_captcha")) {
    die("Captcha inválido");
}

include __DIR__."/src/get_data.php";

//var_dump($_SESSION);

 ?>