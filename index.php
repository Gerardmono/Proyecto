<?php 
    include_once "includes/funciones/bd_conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienes Raices</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header class="site-header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="img/logo.svg" alt="Bienes raices">
                </a>
                <div class="mobile-menu">
                    <a href="#navegacion">
                        <img src="img/barras.svg" alt="Icono menu">
                    </a>
                </div>
                <nav class="navegacion" id="navegacion">
                    <a href="nosotros.php">Nosotros</a>
                    <a href="anuncios.php">Anuncios</a>
                    <a href="blog.php">Blog</a>
                    <a href="testimoniales.php">Testimoniales</a>
                    <a href="contacto.php">Contacto</a>
                </nav>
            </div>

            <h1>Venta de Casa y Departamento Exclusivos de Lujo</h1>
        </div>
    </header>


    <section class="contenedor seccion">
        <h2 class="fw300 centrar-texto">Más Sobre Nosotros</h2>
        <div class="icono-nosotros">
            <div class="icono">
                <img src="img/icono1.svg" alt="icono seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam 
                    repellat animi quas, atque quam quasi numquam cum quod deserunt 
                    quis fuga ratione veniam, mollitia neque consequatur? Explicabo 
                    magnam commodi voluptatem.
                </p>
            </div>
            <div class="icono">
                <img src="img/icono2.svg" alt="icono mejor precio">
                <h3>El Mejor Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam 
                    repellat animi quas, atque quam quasi numquam cum quod deserunt 
                    quis fuga ratione veniam, mollitia neque consequatur? Explicabo 
                    magnam commodi voluptatem.
                </p>
            </div>
            <div class="icono">
                <img src="img/icono3.svg" alt="icono tiempo">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam 
                    repellat animi quas, atque quam quasi numquam cum quod deserunt 
                    quis fuga ratione veniam, mollitia neque consequatur? Explicabo 
                    magnam commodi voluptatem.
                </p>
            </div>
        </div>
    </section>

    <main class="seccion contenedor">
        <h2 class="fw300 centrar-texto">Casas y depas en venta</h2>
        <div class="contenedor-anuncios">
        <?php
                try {
                    $sql = "SELECT * FROM propiedades LIMIT 3";
                    $resultado = $conn->query($sql);
                } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                }
                while($propiedad = $resultado->fetch_assoc()){
            ?>
                    <div class="anuncio">
                        <img src="img/<?php echo $propiedad['imagen'];?>" alt="Casa en el lago">
                        <div class="contenido-anuncio">
                            <h3><?php echo $propiedad['nombre'];?></h3>
                            <p><?php echo $propiedad['eslogan'];?></p>
                            <p class="precio">$<?php echo $propiedad['precio'];?></p>
                            <ul class="icono-caracteristicas">
                                <li>
                                    <img src="img/icono_wc.svg" alt="icono wc">
                                    <p><?php echo $propiedad['banios'];?></p>
                                </li>
                                <li>
                                    <img src="img/icono_estacionamiento.svg" alt="icono estacionamiento">
                                    <p><?php echo $propiedad['cajones'];?></p>
                                </li>
                                <li>
                                    <img src="img/icono_dormitorio.svg" alt="icono dormitorio">
                                    <p><?php echo $propiedad['recamaras'];?></p>
                                </li>
                            </ul>
                            <a href="anuncio.php?id=<?php echo $propiedad['id_Propiedad']; ?>" class="boton boton-amarillo d-block">Ver Propiedad</a>
                        </div>
                    </div>
            <?php

                }

            ?>
        </div>
        <div class="ver-todas">
            <a href="anuncios.php"  class="boton boton-verde">Ver Todas</a>
        </div>
    </main>

    <section class="imagen-contacto">
        <div class="contenedor contenido-contacto">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y asesorse pondrá en contacto a
                la brevedad</p>
            <a href="contacto.php" class="boton boton-amarillo">Contactanos</a>
        </div>
    </section>

    <div class="seccion-inferior contenedor">
        <section class="blog">
            <h3 class="centrar-texto fw300">Nuestro blog</h3>
            <?php 
            try {
                $sql = "SELECT id_Entrada, nombre, titulo, texto, url_imagen, fecha FROM entradas";
                $sql .= " INNER JOIN admins ";
                $sql .= " ON entradas.autor=admins.id_admin";
                $sql .= " ORDER BY id_entrada LIMIT 2";
                $resultado = $conn->query($sql);
            } catch (Exception $e) {
                $error = $e->getMessage();
                echo $error;
            }
            while($entrada = $resultado->fetch_assoc()){
        ?>
        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/<?php echo $entrada['url_imagen'];?>" alt="Entrada de blog" width="500px">
            </div>
            <div class="texto-entrada">
                <a href="entrada.php?id=<?php echo $entrada['id_Entrada'];?>">
                    <h4><?php echo $entrada['titulo'];?></h4>
                </a>
                <p>Escrito el: <span><?php echo $entrada['fecha'];?></span>  por: <span> <?php echo $entrada['nombre'];?></span></p>
                
            </div>
        </article>
        <?php
            }
        ?>
        </section>

        <section class="testimoniales">
            <h3 class="centrar-texto fw300">Testimoniales</h3>
            <div class="testimonial">
                <blockquote>El personal de comportó de una excelente forma, muy buena 
                    atencion y la casa que me ofrecieron cumple con todas mis 
                    espectativas
                </blockquote>
                <p>- Usuario 1</p>
            </div>
        </section>
    </div>
    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
            <p class="copyright">Todos los derechos reservados 2019 &copy;</p>
        </div>
    </footer>
</body>
</html>