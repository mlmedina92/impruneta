<?php
    $page="trabaja-con-nosotros.php";
    $title="Trabaja con nosotros - Impruneta";
    
    require_once("include/header.php");

    // $enviar="";
    // if (!empty($_POST['form'])) {
    //     $enviar=$_POST["form"];
    // }
        
    // if($enviar=="send"){
    //     $body = '
    //         <html>
    //             <head>
    //                 <title>Trabajá con Nosotros - Impruneta</title>
    //             </head>
    //             <body>
    //                 <table width="100%" border="0" cellspacing="5" cellpadding="1">
    //                     <tr>
    //                         <td colspan="2" align="left"><strong>Formulario Trabaja con Nosotros - Impruneta</strong></td>
    //                     </tr>
    //                     <tr>
    //                         <td colspan="2" height="15"></td>
    //                     </tr>
    //                     <tr>
    //                         <td align="left" width="200"><b>Nombre y Apellidos:</b></td>
    //                         <td>'.$_POST['txtNombre'].'</td>
    //                     </tr>
    //                     <tr>
    //                         <td align="left" width="200"><b>Email:</b></td>
    //                         <td>'.$_POST['txtEmail'].'</td>
    //                     </tr>
    //                     <tr>
    //                         <td align="left" width="200"><b>Telefono de Contacto:</b></td>
    //                         <td>'.$_POST['txtTelefono'].'</td>
    //                     </tr>
    //                 </table>
    //             </body>
    //         </html>';

    //     $mail = new PHPMailer();
    //     $mail->IsSMTP();
    //     $mail->SMTPAuth = true;
    //     $mail->Port = 25;
    //     $mail->Host = MAIL_HOST;
    //     $mail->Username = MAIL_USER;
    //     $mail->Password = MAIL_PASS;
    //     $mail->Timeout=30;
    //     $mail->SetFrom('info@imprunetasa.com', 'Impruneta');
    //     $mail->AddReplyTo("info@imprunetasa.com","Impruneta");
    //     $address = "info@imprunetasa.com";
    //     $mail->AddAddress($address, "Impruneta");
    //     $mail->Subject = "Trabaja con nosotros - Impruneta";
    //     $mail->AltBody = "Cuerpo alternativo del mensaje";
    //     $mail->MsgHTML($body);

    //     if (isset($_FILES['curriculum_file']) && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK){
    //         $mail->AddAttachment($_FILES['curriculum_file']['tmp_name'], $_FILES['curriculum_file']['name']);
    //     }

    //     $allowed =  array('pdf', 'doc', 'docx');
    //     $filename = $_FILES['curriculum_file']['name']; 
    //     $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //     if(!in_array($ext,$allowed) ) {
    //         $mensaje="Error. El archivo no es valido, solo se permiten achivos pdf o word.";
    //         $class="msg-error";
    //     }else{
    //         if(!$mail->Send()) {
    //             $mensaje="Error al enviar su curriculum!";
    //             $class="msg-error";
    //         } else {
    //             $mensaje="Su curriculum fue enviado correctamente. Gracias!";
    //             $class="msg-ok";
    //         }
    //     }

        
    // }
?>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/file-validator.js"></script>
<script type="text/javascript">
// $(document).ready(function() {
//     $("#frmPostula").validate({
//         rules: {
//             curriculum_file: {
//                 required: true,
//                 //extension: "pdf|doc|docx",
//                 accept: "pdf|doc|docx",
//                 /*fileType: {
//                     types: ["pdf", "doc", "docx"]
//                 },*/
//                 maxFileSize: {
//                     "unit": "MB",
//                     "size": 1
//                 },
//                 minFileSize: {
//                     "unit": "KB",
//                     "size": "1"
//                 }
//             }
//         }
//     });

//     $('#frmPostula .required').each(function() {
//         $(this).rules('add', {
//             messages: {
//                 required:  "Campo obligatorio",
//                 email:  "Ingrese un email válido"
//             }
//         });
//     });
// });
// </script>
<div id="content" class="ligth">
    <div class="wrapper">
        <h2>Trabaja con Nosotros</h2>
        <div class="line"></div>
        <p class="trabaja">Nos encantaría que seas parte de nuestra familia<br>
            Envíanos tu curriculum mediante el siguiente formulario.</p>
        <?php if(isset($_GET['message'])):?>
        <?php $code = $_GET['code']; $message = $_GET['message']?>
            <h3 style="color:<?php echo htmlspecialchars($code)?>; text-align:center; padding:0px 0px 10px 40px;"><?php echo htmlspecialchars($message);?></h3>
        <?php endif ?>
    </div>
    <div class="cian">
        <div class="wrapper ovh ptop30">
            <form action="sendEmail/mailerTrabajaConNosotros.php" method="POST" enctype="multipart/form-data">

                <label for="nameTrabajaConNosotros">Nombre y Apellidos:</label>
                <input type="text" name="nameTrabajaConNosotros" id="nameTrabajaConNosotros" class="required" required>

                <label for="emailTrabajaConNosotros">Email:</label>
                <input type="email" name="emailTrabajaConNosotros" id="emailTrabajaConNosotros" class="required email" required>

                <label for="telefonoTrabajaConNosotros">Teléfono de Contacto:</label>
                <input type="tel" name="telefonoTrabajaConNosotros" id="telefonoTrabajaConNosotros" required>

                <label for="my_fileTrabajaConNosotros">Curriculum:</label>
                <input type="file" name="my_fileTrabajaConNosotros" id="my_fileTrabajaConNosotros" accept="application/pdf, application/msword" required>
                <span class="txtSmall">Sólo se aceptan arhivos tipo .doc, .docx, .pdf</span>
                <span class="txtSmall mbottom20">Tamaño máximo: 1MB</span>

                <input type="submit" value="Enviar Curriculum" class="mleft32p mbottom30">
            </form>
        </div>
    </div>
</div>
<?php
    require_once("include/footer.php");
?>
