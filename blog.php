    <?php 
        include_once "header.php";
        include_once "includes/funciones/bd_conexion.php";
    ?>

    <main class="contenedor seccion contenido-centrado">
        <h1 class="fw300 centrar-texto">Nuestro Blog</h1>
        <?php 
            try {
                $sql = "SELECT id_Entrada, nombre, titulo, texto, url_imagen, fecha FROM entradas";
                $sql .= " INNER JOIN admins ";
                $sql .= " ON entradas.autor=admins.id_admin";
                $sql .= " ORDER BY id_entrada";
                $resultado = $conn->query($sql);
            } catch (Exception $e) {
                $error = $e->getMessage();
                echo $error;
            }
            while($entrada = $resultado->fetch_assoc()){
        ?>
        <article class="entrada-blog">
            <div class="imagen">
                <img src="img/<?php echo $entrada['url_imagen'];?>" alt="Entrada de blog">
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

    </main>

    <?php 
        include_once "footer.php"
    ?>
</html>