<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>WebCamp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <link rel="stylesheet" href="css/normalize.css">

    <?php 
        $archivo = basename($_SERVER['PHP_SELF']);
        $pagina = str_replace(".php", "", $archivo);
        if ($pagina=='invitados'||$pagina=='index') {
            echo '<link rel="stylesheet" href="css/colorbox.css">';
        }elseif ($pagina=='conferencia') {
            echo '<link rel="stylesheet" href="css/lightbox.min.css">';
        }
    ?>

    <link rel="stylesheet" href="css/main.css">
    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    
    <header>
        <div class="hero">
            <div class="contenido-header ">
                <nav class="redes-sociales">
                    <a href="https://www.facebook.com" target="blank"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="http://youtube.com" target="blank"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="https://open.spotify.com/playlist/4TrAc0LFVJ954RPYoINUNK"><i class="fab fa-spotify"></i></a>
                </nav>
                <div class="informacion-evento">
                    <div class="clearfix  contenedor">
                        <p class="fecha"><i class="fas fa-calendar-alt"></i> 10-12-Dic</p>
                        <p class="ciudad"><i class="fas fa-map-marked-alt"></i>en Algun lugar del mundo.</p>
                    </div>
                    <h1 class="nombre-sitio">WebCamp</h1>
                    <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
                </div>
            </div>
        </div>
    </header>
    <div class="barra">
        <div class="contenedor">
            <a href="index.php" class="logo">
                <img src="img/logo.svg" alt="Logotipo">
            </a>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal">
                <a href="conferencia.php">Conferencia</a>
                <a href="calendario.php">Calendario</a>
                <a href="invitados.php">Invitados</a>
                <a href="registro.php">Reservaciones</a>
            </nav>
        </div>
    </div>