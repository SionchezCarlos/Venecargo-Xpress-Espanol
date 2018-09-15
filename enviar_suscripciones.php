<?php

//return "success"; die(); // Remove this line in live site, it is only for testing

if($_REQUEST['email'] == ''):
	return "error";
endif;

if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)):

// Receiver email address (Change it to your Email ID)
//	$to = 'webmaster@funkyjunkytechies.com';
//$to = 'labudiu@gmail.com';
	$to = 'info@venecargoxpress.com';
//mercadeo.laaventura@gmail.com

// prepare header
$header = 'From: '. "Nuevo Suscriptor" . ' <'. $_REQUEST['email'] .'>'. "\r\n";
$header .= 'Reply-To:  '. "Nuevo Suscriptor" . ' <'. $_REQUEST['email'] .'>'. "\r\n";
// $header .= 'Cc:  ' . 'example@domain.com' . "\r\n";
// $header .= 'Bcc:  ' . 'example@domain.com' . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();

// Contact Subject
$subject = "Email enviado desde venecargoxpress.com";

// Contact Message
$message .= 'Nombre Completo: ' . "Nuevo Suscriptor" . "\n";
$message .= 'Email: ' . $_REQUEST['email'] . "\n";
$message .= 'Asunto: ' . "Nuevo Suscriptor venecargoxpress.com" . "\n";
$message .= 'Mensaje: '. "Solicitud de registro.";

// Send contact information
$mail = mail( $to, $subject , $message, $header );

//return $mail ? "éxito" : "error";
echo'<script> window.location="http://venecargoxpress.com/#suscripciones"</script>';
else:
	return "error";
endif;
?>
