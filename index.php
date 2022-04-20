<?php

require __DIR__."/src/session.php";


$csrf_token = $_SESSION['csrf_token'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<!-- atalho emmet form>input*4 já cria as tagas form e quatro inputs -->
	<!-- enctype com o valor padrão apenas para demonstração -->
	<form action="send.php" method="POST" enctype="appication/x-www-form-urlencoded">
		<input type="hidden" name="_csrf_token" value="<?php echo $csrf_token; ?>">
		<input type="text" name="nome" placeholder="Nome"> <br>
		<input type="email" name="email" placeholder="Email"> <br>
		<textarea name="mensagem" placeholder="Mensagem"></textarea> <br>

		<img src="src/captcha.php" alt="captcha">

		<br>

		<input type="text" placeholder="captcha">

		<input type="submit" value="Enviar">
	</form>
</body>
</html>