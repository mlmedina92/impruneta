<?php

use PHPMailer\PHPMailer\PHPMailer;

include 'PHPMailer-master/src/PHPMailer.php';
include 'PHPMailer-master/src/SMTP.php';
include 'PHPMailer-master/src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Llamar a la función si la request es de tipo POST
    sendEmail();
}

function sendEmail()
{
    // Recibir datos del formulario 
    $pageFormContactoGeneral = $_REQUEST['pageFormContactoGeneral'];
    $nombreFormContactoGeneral = $_REQUEST['nameFormContactoGeneral'];
    $emailFormContactoGeneral = $_REQUEST['emailFormContactoGeneral'];
    $titleFormContactoGeneral = $_REQUEST['titleFormContactoGeneral'];
    $mensajeFormContactoGeneral = $_REQUEST['messageFormContactoGeneral'];
    $telFormContactoGeneral = $_REQUEST['telFormContactoGeneral'];
    $personaFormContactoGeneral = $_REQUEST['personaFormContactoGeneral'];
    $asuntoFormContactoGeneral = "Formulario de contacto - Web Impruneta";


    // Configurar la instancia de PHPMailer         
    $mailFormContactoGeneral = new PHPMailer();
    $mailFormContactoGeneral->isSMTP();
    $mailFormContactoGeneral->Host = 'mail.smtp2go.com';               // Host del servidor SMTP
    $mailFormContactoGeneral->SMTPAuth = true;                         // Habilitar autenticación SMTP
    $mailFormContactoGeneral->Username = 'webform@imprunetasa.com';        // Tu dirección de correo electrónico
    $mailFormContactoGeneral->Password = 'QxR8OaRehnYQYzY4';           // Tu contraseña de correo electrónico
    $mailFormContactoGeneral->SMTPSecure = 'tls';                      // Habilitar cifrado TLS
    $mailFormContactoGeneral->Port = 587;                              // Puerto SMTP

    // $mailFormContactoGeneral->SMTPDebug = 2; // Modo depuración detallado
    // $mailFormContactoGeneral->Debugoutput = 'html'; // Salida de depuración en HTML
    //generacion de body(contendo del correo)



    $body = "
        <html>
            <head>
                <title>$asuntoFormContactoGeneral</title>
            </head>
            <body>
                <ul>
                    <li><strong>Nombre:</strong> {$nombreFormContactoGeneral}</li>
                    <li><strong>Email:</strong> {$emailFormContactoGeneral}</li>
                    <li><strong>Titulo:</strong> {$titleFormContactoGeneral}</li>
                    <li><strong>Mensaje:</strong> {$mensajeFormContactoGeneral}</li>
                    <li><strong>Teléfono de contacto:</strong> {$telFormContactoGeneral}</li>
                    <li><strong>Persona de contacto:</strong> {$personaFormContactoGeneral}</li>
                </ul>
            </body>
        </html>
    ";



    // Configurar el contenido del correo electrónico
    $mailFormContactoGeneral->setFrom($emailFormContactoGeneral, $nombreFormContactoGeneral);
    $mailFormContactoGeneral->addAddress('info@imprunetasa.com', 'Impruneta');
    $mailFormContactoGeneral->Subject = $asuntoFormContactoGeneral;

    // Permite que el contenido del correo sea interpretado como HTML.
    $mailFormContactoGeneral->isHTML(true);                             // Enviar el correo en formato HTML
    $mailFormContactoGeneral->Body = $body;


  

    // Procesar el envío del correo electrónico
    if (!$mailFormContactoGeneral->send()) {
        $message = "El mensaje no pudo ser enviado.";
        $code = 'red';
    } else {
        $message = 'El mensaje pudo ser enviado';
        $code = 'green';
    }

    //creamos la url de manera dinamica
    $url = "https://imprunetasa.com/contacto.php?message=" . urlencode($message) . "&code=" . urlencode($code);
    // Redirigir al archivo HTML con el mensaje
    header("Location: " . $url);
    exit(); // salir después de redirigir
}
