<?php
// Varios destinatarios
$para = 'calfaro@interace.net'; //. ', '; // atención a la coma
/*$para .= 'wez@example.com';*/
// título
$título = 'Mensaje de la página web Pakarilofts';
// mensaje
$mensaje = '
<html>
<head>
<title>Mensaje de la página web Pakarilofts</title>
</head>
<body>
<p>Nombre:</strong>'.$_POST["name"].'</p>
<p><strong>Email:</strong>'.$_POST["email"].'</p>
<p><strong>Teléfono:</strong>'.$_POST["telefono"].'</p>
<p><strong>Monto:</strong>'.$_POST["monto"].'</p>
<p><strong>Mensaje:</strong>'.$_POST["message"].'</p>
</body>
</html>
';
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'To: PakariLofts <ventas@pakarilofts.com>' . "\r\n";
$cabeceras .= 'From: '.$_POST["name"].' <'.$_POST["email"].'>' . "\r\n";
// Enviarlo
if(mail($para, $título, $mensaje, $cabeceras))
{
	echo 'ok';	
};
?>
