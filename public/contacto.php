<?php
    $page="contacto";
    $title="Contacto - Impruneta";

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
                    <title>Formulario Contacto - Impruneta</title>
                </head>
                <body>
                    <table width="100%" border="0" cellspacing="5" cellpadding="1">
                        <tr>
                            <td colspan="2" align="left"><strong>Formulario Contacto - Impruneta</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2" height="15"></td>
                        </tr>
                        <tr>
                            <td align="left" width="200"><b>Nombre y Apellidos:</b></td>
                            <td>'.$_POST['txtNombre'].'</td>
                        </tr>
                        <tr>
                            <td align="left"><b>Email:</b></td>
                            <td>'.$_POST['txtEmail'].'</td>
                        </tr>
                        <tr>
                            <td align="left"><b>Titulo:</b></td>
                            <td>'.$_POST['txtTitulo'].'</td>
                        </tr>
                        <tr>
                            <td align="left"><b>Mensaje:</b></td>
                            <td>'.$_POST['txtMensaje'].'</td>
                        </tr>
                        <tr>
                            <td align="left"><b>Telefono Contacto:</b></td>
                            <td>'.$_POST['txtTelefonoContacto'].'</td>
                        </tr>
                        <tr>
                            <td align="left"><b>Persona Contacto:</b></td>
                            <td>'.$_POST['txtPersonaContacto'].'</td>
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
        $mail->Subject = "Formulario Contacto - Impruneta";
        $mail->AltBody = "Cuerpo alternativo del mensaje";
        $mail->MsgHTML($body);

        if(!$mail->Send()) {
            $mensaje="Error al enviar el mensaje!";
            $class="msg-error";
        } else {
            $mensaje="Su mensaje fue enviado correctamente. Gracias!";
            $class="msg-ok";
        }
    }
?>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmContacto").validate();

    $('#frmContacto .required').each(function() {
        $(this).rules('add', {
            messages: {
                required:  "Campo obligatorio",
                email:  "Ingrese un email válido"
            }
        });
    });

    $('#map_addresses').gMap({
        zoom: 17,
        arrowStyle: 2,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: true,
            overviewMapControl: false
        },
        markers:[
            {
                latitude: -34.608325,
                longitude: -58.379625,
                popup: false
            }
        ]
    });
});
</script>
    <div id="content" class="ligth">
        <div class="wrapper ovh pbottom30">
            <h2>DEJANOS TUS DATOS DE CONTACTO</h2>
            <div class="line"></div>
            <div class="col-left2">
                <?php
                    if($enviar=="send"){
                ?>
                <div class="<?php echo $class;?>"><?php echo $mensaje;?></div>
                <?php
                    }
                ?>
                <form action="contacto.php" method="post" id="frmContacto" name="frmContacto">
                    <input type="hidden" name="form" id="form" value="send" />
                    <label>Nombre / Empresa:</label>
                    <input type="text" name="txtNombre" class="required">
                    <label>Email:</label>
                    <input type="text" name="txtEmail" class="required email">
                    <label>Título:</label>
                    <input type="text" name="txtTitulo">
                    <label>Mensaje:</label>
                    <textarea name="txtMensaje" class="required" rows="4"></textarea>
                    <label>Télefono de Contacto:</label>
                    <input type="text" name="txtTelefonoContacto" class="max180">
                    <label>Persona de Contacto:</label>
                    <input type="text" name="txtPersonaContacto">
                    <input type="submit" name="cbEnviar" value="Enviar">
                </form>
            </div>
            <div class="col-right2">
                <h4>Datos de Contacto</h4>
                <p class="datos"><span class="ico address"></span>Conesa 812 8° A, C1426AQR Ciudad Autónoma de Buenos Aires, Argentina.</p>
                <p class="datos"><span class="ico phone"></span>Central Telefónica: +54(11)39846961</p>
                <p class="datos"><span class="ico mail"></span>info@imprunetasa.com </p>
                <p class="datos" id="whatsapp"><span class="ico whatsapp"></span>+54 9 11 50035249</p>
                <div class="map-wrapper mtop20">
                    <div class="gmap">
                        <div id="map_addresses" class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once("include/footer.php");
?>
