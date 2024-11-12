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
    $page_callme = $_REQUEST[''];
    $nombre_callme = $_REQUEST['nombre_callme'];
    $dni_callme = $_REQUEST['dni_callme'];
    $celular_callme = $_REQUEST['celular_callme'];
    $asunto_callme = "Formulario Llamame - Web Impruneta";


    // Configurar la instancia de PHPMailer         
    $mail_callme = new PHPMailer();
    $mail_callme->isSMTP();
    $mail_callme->Host = 'mail.smtp2go.com';               // Host del servidor SMTP
    $mail_callme->SMTPAuth = true;                         // Habilitar autenticación SMTP
    $mail_callme->Username = 'webform@imprunetasa.com';        // Tu dirección de correo electrónico
    $mail_callme->Password = 'QxR8OaRehnYQYzY4';           // Tu contraseña de correo electrónico
    $mail_callme->SMTPSecure = 'tls';                      // Habilitar cifrado TLS
    $mail_callme->Port = 587;                              // Puerto SMTP

    // $mail_callme->SMTPDebug = 2; // Modo depuración detallado
    // $mail_callme->Debugoutput = 'html'; // Salida de depuración en HTML
    
    //generacion de body(contendo del correo)



    $body = "
        <html>
            <head>
                <title>$asunto_callme</title>
            </head>
            <body>
                <ul>
                    <li><strong>Nombre:</strong> {$nombre_callme}</li>
                    <li><strong>Email:</strong> {$dni_callme}</li>
                    <li><strong>Descripcion:</strong> {$celular_callme}</li>
                </ul>
            </body>
        </html>
    ";



    // Configurar el contenido del correo electrónico
    $mail_callme->setFrom('webform@imprunetasa.com', $nombre_callme);
    $mail_callme->addAddress('lm30540@gmail.com', 'Llámame - Impruneta');
    $mail_callme->Subject = $asunto_callme;

    // Permite que el contenido del correo sea interpretado como HTML.
    $mail_callme->isHTML(true);                             // Enviar el correo en formato HTML
    $mail_callme->Body = $body;


  

    // Procesar el envío del correo electrónico
    if (!$mail_callme->send()) {
        $messageAlert = "El mensaje no pudo ser enviado.";
    } else {
        $messageAlert = 'El mensaje pudo ser enviado';
    }
    
    //creamos la url de manera dinamica
    $url = "http://localhost/imprunetasa_com_new/public/". $page_callme."?messageAlert=" . urlencode($messageAlert);
    // Redirigir al archivo HTML con el mensaje
    header("Location: " . $url);
    exit(); // salir después de redirigir
}
