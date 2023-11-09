<?php include("header.php")?>
 *
<?php
 $nombre_form = $_POST["nombre"];
 $apellido_form = $_POST["apellido"];
 $email_form = $_POST["email"];
 $consulta_form = $_POST["consulta"];

$mensaje =
"Nombre: " .$nombre_form."\r\n".
"Apellido: " .$apellido_form."\r\n".
"Email: " .$email_form."\r\n".
"Consulta: " .$consulta_form."\r\n";

mail("julian.javier.marino@gmail.com", "Mensaje enviado desde sitio web", "$mensaje");

$conexion = mysqli_connect('localhost', 'id21354744_bochi', 'J4755530m!', 'id21354744_modulo_2') or exit ('No se pudo conectar a la base de datos');

mysqli_query($conexion, "INSERT INTO  consultas VALUES (DEFAULT, ' $nombre_form', '$apellido_form', '$email_form', '$consulta_form')");
?>

<h1 class="titulo">Gracias por su consulta</h1>
<p>Nuestro equipo esta revisando su mensaje y se contactara con usted en las proximas 48 hs</p>
<h2>Gracias</h2>

</body>
<footer class="footer_especial">El tiempo es ahora</footer>
    
</html>