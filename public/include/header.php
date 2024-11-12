<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="" />
    <meta name="robots" content="follow, index" />
    <meta name="googlebot" content="index, follow">
    <link rel="stylesheet" type="text/css" href="css/fuentes.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/botonAG.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />

    <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script type="text/javascript" src="js/jquery.bpopup.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.whatsapp, #whatsapp').bind('click', function(e) {
                e.preventDefault();
                $('#contentPopup').bPopup({
                    modalClose: false,
                    opacity: 0.6,
                    positionStyle: 'fixed'
                });
            });
        });
    </script>

</head>

<body>
<?php
    if (isset($_GET['messageAlert'])) {
        echo "<script>
            setTimeout(function() {
                alert('" . htmlspecialchars($_GET['messageAlert'], ENT_QUOTES, 'UTF-8') . "');
            }, 2000);
        </script>";
    }
?>

    <?php require_once("call_me/button.php"); ?>

    <div id="barra-top">
        <h1>Impruneta posee la capacidad de crear soluciones a medida de manera flexible, rápida y eficaz.</h1>
        <div class="info">
            <div class="wrapper">
                <span class="whatsapp">+54 9 11 50035249</span>
                <span class="top-mail">contactanos@imprunetasa.com</span>
                <span class="top-tel mleft30">+54(11)39846961</span>
            </div>
        </div>
    </div>
    <div id="top">
        <div class="wrapper">
            <div class="logo">
                <a href="./"><img src="./images/logo.png" width="351" height="66" alt="Impruneta"></a>
            </div>

            <div class="menu-wrapp">
                <nav>
                    <ul class="menu">
                        <p>
                        <p>
                            <li class="<?php echo ($page == "nosotros") ? "active" : ""; ?>"><a href="nosotros.php">Nosotros</a></li>
                            <li class="<?php echo ($page == "servicios") ? "active" : ""; ?>"><a href="servicios.php">Servicios</a></li>
                            <li class="<?php echo ($page == "beneficios") ? "active" : ""; ?>"><a href="beneficios.php">Beneficios</a></li>
                            <li class="<?php echo ($page == "trabaja") ? "active" : ""; ?>"><a href="trabaja-con-nosotros.php">Únete</a></li>
                            <li class="<?php echo ($page == "contacto") ? "active" : ""; ?>"><a href="contacto.php">Contáctanos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div id="btnAG" class="animated infinite bounce">
        <a href="https://imprunetasa.com/consulta-deuda" target="_blank" class="textoAG">Resolvé tu deuda aquí</a>
    </div>