<?php

/* 
Ejemplo de uso de la funcion mail()

*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config/smtp_brevo.php';

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);


try {
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "quoted-printable";


    // Configuramos el servidor
    //$mail->SMTPDebug = 2; // Habilitamos el debug
    $mail->SMTPDebug = 0; // deshabilitamos el debug
    $mail->isSMTP(); // Usar smtp
    $mail->SMTPAuth = true; // Acceso

    //Configuracion acceso a servidor SMTP brevo
    $mail->Host = SMTP_HOST;

    //Configuracion puerto servidor SMTP brevo
    $mail->Port = SMTP_PORT;

    //Configuracion usuario servidor SMTP brevo
    $mail->Username = SMTP_USER;

    //Configuracion password servidor SMTP brevo
    $mail->Password = SMTP_PASS;


    // Cabecera del mensaje
    $destinatario = "javiirt1931@gmail.es";
    $remitente = "otro@correo.es";
    $asunto = "Prueba de envio de correo";
    $mensaje = '<h1>Hola, este es un mensaje de prueba</h1>
    <p>Lorem ipsum noseq </p>';


    $mail->setFrom($remitente, 'Javier Rodriguez Torres');
    $mail->addAddress($destinatario, 'Rodriguez Torres');
    $mail->addReplyTo($remitente, 'Javier Rodriguez Torres');
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;

    $mail->send();

    echo "Correo enviado correctamente";

} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}




