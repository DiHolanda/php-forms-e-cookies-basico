<?php 

session_start();

$_SESSION['csrf_token'] = rand(1000, 999999999);

// var_dump($_SESSION['csrf_token']);



 ?>