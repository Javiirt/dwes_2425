<?php

/* 
Ejemplo de uso de la funcion mail()

*/

// Definir la cabecera

$header = "Mime-Version: 1.0\r\n";;
$header .= "Content-Type: text/html; charset-iso-8859-1”.”\r\n";

$header .= "From: Javier Rodriguez Torres <correo@correo.com>\r\n";
$header .= "X-Mailer: PHP/".phpversion();


//Definir el destinatario
$detinatario = "javiirt1931@gmail.com";
$asunto = "Prueba de envio de correo";
$mensaje = "Hola, este es un mensaje de prueba";

//Enviar el correo
if (mail($detinatario, $asunto, $mensaje, $header)){
    echo "Correo enviado correctamente";
}else{
    echo "Error al enviar el correo";
}

