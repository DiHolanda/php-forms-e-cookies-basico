<?php 

// parâmetros obrigatórios de um mail
// mail(to, subject, message)

$para = 'diego@didi.com';
$subject = 'Email de teste com PHP';
$mensagem = "
	<p> <strong> Nome: </strong> {$nome} </p>
	<p> <strong> URL: </strong> {$url} </p>
	<p> <strong> Email: </strong> {$email} </p>
	<p> <strong> Mensagem: </strong> {$mensagem} </p>
	
";

// indica o email padronizado para responder a mensagem enviada
$infos_cabecalho = "Reply-To: diego@didi.com \r\n";

if(mail($para, $assunto, $mensagem, $info_cabecalho)){
	die("ok, email enviado");
}
else{
	die("Falha ao enviar");
}

 ?>