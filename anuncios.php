    <?php 
        include_once "header.php";
        include_once "includes/funciones/bd_conexion.php";
    ?>

    <main class="seccion contenedor">
        <h2 class="fw300 centrar-texto">Casas y depas en venta</h2>
        <div class="contenedor-anuncios">
            <?php
                try {
                    $sql = "SELECT * FROM propiedades";
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
    </main>

    <?php 
        include_once "footer.php"
    ?>
</html>