    <?php 
        include_once "header.php"
    ?>

    <h1 class="fw300 centrar-texto">Contacto</h1>
    <img src="img/destacada3.jpg" alt="Imagen contacto">
    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw300 centrar-texto">Llenar formulario de contacto</h2>
        <form class="contacto">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" placeholder="Tu nombre">
                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Tu correo electónico" required>
                <label for="telefono">Telefono</label>
                <input type="tel" id="telefono" placeholder="Tu telefono" required>
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>
                <p id="msg-error" style="color: red;"></p>
            <input type="button" value="Enviar" class="boton boton-verde" id="valida" onclick="validaD()" style="background-color: green;">
        </form>
    </main>

    <script src="js/verificaDatos.js"></script>
    <?php 
        include_once "footer.php"
    ?>
</html>