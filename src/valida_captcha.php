<?php 

require __DIR__."/session.php";



$captcha = $_SESSION['captcha'] ?? false;

//var_dump($captcha, filter_input(INPUT_POST, "captcha"));

if($captcha !== filter_input(INPUT_POST, "captcha")) {
    die("Captcha inválido");
}



//var_dump($_SESSION);

 ?>