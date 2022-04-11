<?php 

session_start();

// faz o logoff...
session_destroy();

// ... e volta para a página inicial
header('location: ./index.php');
exit();

 ?>