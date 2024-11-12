<?php
    $page="trabaja-con-nosotros.php";
    $title="Trabaja con nosotros - Impruneta";
    
    require_once("include/header.php");
?>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/file-validator.js"></script>

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
