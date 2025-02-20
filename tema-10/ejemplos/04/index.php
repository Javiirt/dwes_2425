<?php

/* 
Ejemplo de uso de la funcion mail()

*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);


try {
    $mail->CharSet = "UTF-8";
    $mail->Encoding = "quoted-printable";


    // Configuramos el servidor
    // $mail->SMTPDebug = 2; // Habilitamos el debug
    // $mail->isSMTP();
    // $mail->Host = 'smtp.gmail.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = 'Javiirt';

    // fake SMTP PAPERCUT
    $mail->isSMTP();

    $destinatario = "javier@corres.es";
    $remitente = "otro@correo.es";
    $asunto = "Prueba de envio de correo";
    $mensaje = '<h1>Hola, este es un mensaje de prueba</h1>
    <img src="cid:cadiz" alt="Cádiz">';


    $mail->setFrom($remitente, 'Javier Rodriguez Torres');
    $mail->addAddress($destinatario, 'Rodriguez Torres');
    $mail->addReplyTo($remitente, 'Javier Rodriguez Torres');
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $mensaje;

    //Enviar archivo adjunto
    $mail->addAttachment('files/pdf.pdf');

    $mail->addAttachment('files/cadiz.jpg');

    $mail->addEmbeddedImage('files/cadiz.jpg', 'cadiz');

    $mail->send();

    echo "Correo enviado correctamente";

} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
}




