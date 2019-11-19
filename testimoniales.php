<?php 
        include_once "header.php";
        include_once "includes/funciones/bd_conexion.php";
    ?>

    <main class="seccion contenedor testimoniales">
        <h2 class="fw300 centrar-texto">Testimoniales</h2>
        <div class="contenedor-anuncios">
            <?php
                try {
                    $sql = "SELECT * FROM testimoniales";
                    $resultado = $conn->query($sql);
                } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                }
                while($testimonio = $resultado->fetch_assoc()){
            ?>
                    <div class="testimonial">
                        <blockquote><?php echo $testimonio['Texto']; ?></blockquote>
                        <p>- <?php echo $testimonio['Autor']; ?></p>
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