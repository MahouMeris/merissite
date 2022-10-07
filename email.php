<?php

if( isset($_POST['email']) && !empty($_POST['email']) )

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$to = "meris_siren@outlook.com";
$subject = "Contato via site";
$body = "Nome: " .$nome. "\r\n" .
		"E-mail:" .$email. "\r\n" .
		"Telefone:" .$telefone. "\r\n" .
		"Mensagem: " .$mensagem;

$header = "From:fukuoka.melissa@yahoo.com" . "\r\n".
			"Reply-To: " .$email. "\r\n".
			"X=Mailer:PHP/" . phpversion();
			
if(mail($to, $subject, $body, $header)){
	echo ("Email enviado com sucesso");
}
else{
	echo ("O email não pode ser enviado");
}


}
?>
