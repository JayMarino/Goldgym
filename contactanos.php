<?php include("header.php") ?>

        <form action="enviarConsulta.php" method="post">
                <label for="nombre">Nombre</label>    
                        <input type="text" name="nombre" class="form_input" required>
                <label for="apellido">Apellido</label>    
                        <input type="text" name="apellido" class="form_input" required>
                <label for="email">Correo Electronico</label>    
                        <input type="email" name="email" class="form_input" required>
                <label for="consulta">Consulta</label>    
                        <textarea name="consulta" id="" cols="30" rows="10" required></textarea>
                <input type="submit" value="Enviar Consulta" class="contactanos_submit">
        </form>

<?php include("footer.php")?>