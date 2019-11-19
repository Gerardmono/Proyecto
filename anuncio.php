
<?php 
include_once "header.php";
include_once "includes/funciones/bd_conexion.php";
$id = $_GET['id'];
if (!filter_var($id, FILTER_VALIDATE_INT)) {
    die("Error");
}
?>
    <?php
        $sql = "SELECT * FROM propiedades WHERE id_propiedad = $id";
        $resultado = $conn->query($sql);
        $propiedad = $resultado->fetch_assoc();
    ?>
    <h1 class="fw300 centrar-texto"><?php echo $propiedad['nombre'] ?></h1>
    <img src="img/<?php echo $propiedad['imagen'] ?>" alt="Imagen anuncio">
    <main class="contenedor seccion contenido-centrado">
        <div class="resumen-propiedad">
            <p class="precio">$<?php echo $propiedad['precio'] ?></p>
            <ul class="icono-caracteristicas">
                <li>
                    <img src="img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['banios'] ?></p>
                </li>
                <li>
                    <img src="img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['cajones'] ?></p>
                </li>
                <li>
                    <img src="img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p><?php echo $propiedad['recamaras'] ?></p>
                </li>
            </ul>
        </div>
        <p><?php echo $propiedad['descripcion'] ?>
        </p>
    </main>

    <?php 
        include_once "footer.php"
    ?>
    
</html>