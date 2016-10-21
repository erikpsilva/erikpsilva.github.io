<?php 
$email = $_POST['email'];
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];
	
$msg = "<p><h3>Email site Erik Primao - : ".$nome."</h3></p>
	<br />
<p><strong>Nome: </strong>".$nome."</p>

<p><strong>E-mail: </strong>".$email."</p>

<p><strong>Mensagem: </strong></p><p>".$mensagem."</p>
	";

	
$para_email = 'erikpsilva@gmail.com'; // e-mail de envio
	$headers = "MIME-Version: 1.1\r\n";

	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	$headers .= "Cc:erikpsilva@gmail.com\r\n"; //Com cópia
	
	$headers .= "From:erikpsilva@gmail.com\r\n"; // remetente

	$headers .= "Return-Path:erikpsilva@gmail.com\r\n"; // return-path

	$envio = @mail($para_email, "Contato do seu Site", $msg, $headers);
 
	if($envio)
	
	 echo 500;
	 
	else
	
	 echo 400;
	 
?>