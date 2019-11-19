    <?php 
        include_once "header.php";
        include_once "includes/funciones/bd_conexion.php";

        $id = $_GET['id'];
        if (!filter_var($id, FILTER_VALIDATE_INT)) {
            die("Error");
        }
    ?>
    <?php 
            $sql = "SELECT id_Entrada, nombre, titulo, texto, url_imagen, fecha FROM entradas";
            $sql .= " JOIN admins ";
            $sql .= " ON entradas.autor=admins.id_admin";
            $sql .= " WHERE id_Entrada = $id";
            $resultado = $conn->query($sql);
            $entrada = $resultado->fetch_assoc();
        
    ?>
    <h1 class="fw300 centrar-texto"><?php echo $entrada['titulo'] ?></h1>
    <img src="img/<?php echo $entrada['url_imagen'] ?>" alt="Imagen anuncio">
    <main class="contenedor seccion contenido-centrado texto-entrada">
        <p>Escrito el: <span><?php echo $entrada['fecha'] ?></span>  por: <span> <?php echo $entrada['nombre'] ?></span></p>
        <p><?php echo $entrada['texto'] ?></p>
    </main>

    <?php 
        include_once "footer.php"
    ?>
</html>