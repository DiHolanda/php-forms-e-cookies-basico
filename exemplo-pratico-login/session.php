<?php 

/*define o cookie de sessão 
	* com validade de uma hora após fechar o navegador
	* o cookie será usado apenas nos arquivos sob a pasta exemplo-pratico-login
	* é possível tornar o cookie válido apenas em determinado domínio (no caso deste exemplo prático onde é executado em ambiente local, fica com o valor padrão null, ou seja, válido a partir do domínio criado)
	** porém é interessante considerar se este cookie for funcionar em todo o domínio de um site real, ou funcionar apenas em certo subdomínio
	* a quarta configuração é usar cookie apenas em ambiente seguro, sob servidor https
	** por padrão é false, então se o site tiver conexão HTTPS, melhor deixar true
	* e por último é para determinar que o cookie seja usado apenas por protocolo HTTP, impossibilitando um script de javascript, por exemplo
*/
session_set_cookie_params(60*60, '/exemplo-pratico-login', null, false, true);

ini_set('session.save_handler', 'files');
ini_set('session.save_path', __DIR__.'/sessions');

session_start();

 ?>