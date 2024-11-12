<?php
    $page="trabaja";
    $title="Trabaja con nosotros - Impruneta";
    
    require_once('include/config.php');
    require_once('include/PHPMailer/class.phpmailer.php');
    require_once("include/header.php");

    $enviar="";
    if (!empty($_POST['form'])) {
        $enviar=$_POST["form"];
    }
        
    if($enviar=="send"){
        $body = '
            <html>
                <head>
                    <title>Trabajá con Nosotros - Impruneta</title>
                </head>
                <body>
                    <table width="100%" border="0" cellspacing="5" cellpadding="1">
                        <tr>
                            <td colspan="2" align="left"><strong>Formulario Trabaja con Nosotros - Impruneta</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="15"></td>
                        </tr>
                        <tr>
                            <td align="left" width="200"><b>Nombre y Apellidos:</b></td>
                            <td>'.$_POST['txtNombre'].'</td>
                        </tr>
                        <tr>
                            <td align="left" width="200"><b>Email:</b></td>
                            <td>'.$_POST['txtEmail'].'</td>
                        </tr>
                        <tr>
                            <td align="left" width="200"><b>Telefono de Contacto:</b></td>
                            <td>'.$_POST['txtTelefono'].'</td>
                        </tr>
                    </table>
                </body>
            </html>';

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Port = 25;
        $mail->Host = MAIL_HOST;
        $mail->Username = MAIL_USER;
        $mail->Password = MAIL_PASS;
        $mail->Timeout=30;
        $mail->SetFrom('info@imprunetasa.com', 'Impruneta');
        $mail->AddReplyTo("info@imprunetasa.com","Impruneta");
        $address = "info@imprunetasa.com";
        $mail->AddAddress($address, "Impruneta");
        $mail->Subject = "Trabaja con nosotros - Impruneta";
        $mail->AltBody = "Cuerpo alternativo del mensaje";
        $mail->MsgHTML($body);

        if (isset($_FILES['curriculum_file']) && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK){
            $mail->AddAttachment($_FILES['curriculum_file']['tmp_name'], $_FILES['curriculum_file']['name']);
        }

        $allowed =  array('pdf', 'doc', 'docx');
        $filename = $_FILES['curriculum_file']['name']; 
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            $mensaje="Error. El archivo no es valido, solo se permiten achivos pdf o word.";
            $class="msg-error";
        }else{
            if(!$mail->Send()) {
                $mensaje="Error al enviar su curriculum!";
                $class="msg-error";
            } else {
                $mensaje="Su curriculum fue enviado correctamente. Gracias!";
                $class="msg-ok";
            }
        }

        
    }
?>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/file-validator.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmPostula").validate({
        rules: {
            curriculum_file: {
                required: true,
                //extension: "pdf|doc|docx",
                accept: "pdf|doc|docx",
                /*fileType: {
                    types: ["pdf", "doc", "docx"]
                },*/
                maxFileSize: {
                    "unit": "MB",
                    "size": 1
                },
                minFileSize: {
                    "unit": "KB",
                    "size": "1"
                }
            }
        }
    });

    $('#frmPostula .required').each(function() {
        $(this).rules('add', {
            messages: {
                required:  "Campo obligatorio",
                email:  "Ingrese un email válido"
            }
        });
    });
});
</script>
<div id="content" class="ligth">
    <div class="wrapper">
        <h2>Trabaja con Nosotros</h2>
        <div class="line"></div>
        <p class="trabaja">Nos encantaría que seas parte de nuestra familia<br>
            Envíanos tu curriculum mediante el siguiente formulario.</p>
        <?php
            if($enviar=="send"){
        ?>
        <div class="<?php echo $class;?>"><?php echo $mensaje;?></div>
        <?php
            }
        ?>
    </div>
    <div class="cian">
        <div class="wrapper ovh ptop30">
            <form name="frmPostula" id="frmPostula" action="trabaja-con-nosotros.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="form" id="form" value="send" />
                <label>Nombre y Apellidos:</label>
                <input type="text" name="txtNombre" class="required">
                <label>Email:</label>
                <input type="text" name="txtEmail" class="required email">
                <label>Teléfono de Contacto:</label>
                <input type="text" name="txtTelefono">
                <label>Curriculum:</label>
                <input type="file" name="curriculum_file" id="curriculum_file" accept="application/pdf, application/msword">
                <span class="txtSmall">Sólo se aceptan arhivos tipo .doc, .docx, .pdf</span>
                <span class="txtSmall mbottom20">Tamaño máximo: 1MB</span>
                <input type="submit" name="cbEnviar" value="Enviar Curriculum" class="mleft32p mbottom30">
            </form>
        </div>
    </div>
</div>
<?php
    require_once("include/footer.php");
?>
