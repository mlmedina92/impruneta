<?php
    $page="contacto";
    $title="Contacto - Impruneta";
    require_once("include/header.php");

    
?>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script type="text/javascript">
// $(document).ready(function() {
    // $("#frmContacto").validate();

    // $('#frmContacto .required').each(function() {
    //     $(this).rules('add', {
    //         messages: {
    //             required:  "Campo obligatorio",
    //             email:  "Ingrese un email válido"
    //         }
    //     });
    // });

    // $('#map_addresses').gMap({
    //     zoom: 17,
    //     arrowStyle: 2,
    //     controls: {
    //         panControl: true,
    //         zoomControl: true,
    //         mapTypeControl: false,
    //         scaleControl: false,
    //         streetViewControl: true,
    //         overviewMapControl: false
    //     },
    //     markers:[
    //         {
    //             latitude: -34.608325,
    //             longitude: -58.379625,
    //             popup: false
    //         }
    //     ]
    // });
// });
</script>
    <div id="content" class="ligth">
        <div class="wrapper ovh pbottom30">
            <h2>DEJANOS TUS DATOS DE CONTACTO</h2>
            <div class="line"></div>
            <div class="col-left2">
                <?php if(isset($_GET['message'])) : ?>
                    <?php $message = $_GET['message'];  $code = $_GET['code'] ?>
                    <div style="width: 100%;">
                        <h3 style="color:<?php echo htmlspecialchars($code)?>; text-align:center; padding:0px 0px 10px 40px;"><?php echo htmlspecialchars($message);?></h3>
                    </div>
                <?php endif ?>
                <form action="sendEmail/mailerFormContactoGeneral.php" method="POST">
                    <label for="nameFormContactoGeneral">Nombre / Empresa:</label>
                    <input type="text" name="nameFormContactoGeneral" id="nameFormContactoGeneral" class="required" required>

                    <label for="emailFormContactoGeneral">Email:</label>
                    <input type="email" name="emailFormContactoGeneral" id="emailFormContactoGeneral" class="required email" required>

                    <label for="titleFormContactoGeneral">Título:</label>
                    <input type="text" name="titleFormContactoGeneral" id="titleFormContactoGeneral" required>

                    <label for="messageFormContactoGeneral">Mensaje:</label>
                    <textarea name="messageFormContactoGeneral" id="messageFormContactoGeneral" class="required" rows="4" required></textarea>

                    <label for="telFormContactoGeneral">Télefono de Contacto:</label>
                    <input type="tel" name="telFormContactoGeneral" id="telFormContactoGeneral" class="max180" required>

                    <label for="personaFormContactoGeneral">Persona de Contacto:</label>
                    <input type="text" name="personaFormContactoGeneral" id="personaFormContactoGeneral" required>

                    <input type="submit" value="Enviar">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.534895889416!2d-57.91676192448711!3d-34.94319987283451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2ef3498f1e117%3A0x6a768620523b065!2sC.%208%20A%2C%20B1914%20Villa%20Elvira%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1731415913169!5m2!1ses-419!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    require_once("include/footer.php");
?>
