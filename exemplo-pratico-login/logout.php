<?php 

require __DIR__."/session.php";

// faz o logoff...
session_destroy();

// ... e volta para a página inicial
header('location: ./index.php');
exit();

 ?>