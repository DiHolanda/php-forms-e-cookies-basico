<?php 

session_start();

var_dump($_SESSION);

session_destroy();

echo "<hr>";
echo "Logout feito com sucesso. Volte sempre!"

 ?>