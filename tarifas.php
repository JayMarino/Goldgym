<?php include("header.php")?>
<?php
 /* Variables */
 $precioClases = 2000;
 $precioMusculacion = 1500;
 $precioPack = ($precioClases + $precioMusculacion) * 0.9;
 ?>

<section class="tarifas">
    <div class="tarifa_div">
    <div class="titulo_tarifa"><h2 style="color:gold">Clases guiadas</h2></div>
        <ul class="lista_tarifa">
            <li>3 Clases Semanales</li>
            <li>Asesoramiento nutricional</li>
            <li><?php echo $precioClases ?>$</li>
        </ul>
    
    </div>
    <div class="tarifa_div">
    <div class="titulo_tarifa"><h2 style="color:gold">Musculacion</h2></div>
        <ul class="lista_tarifa">
            <li>Acceso ilimitado a sala de musculacion</li>
            <li>Supervision tecnica de entrenadores</li>
            <li><?php echo $precioMusculacion ?>$</li>
        </ul>

    </div>
    <div class="tarifa_div">
        <div class="titulo_tarifa"><h2 style="color:gold">Tarifa completa</h2></div>
        <ul class="lista_tarifa">
            <li>Acceso ilimitado a sala de Musculacion</li>
            <li>3 clases Semanales</li>
            <li>Asesoramiento nutrcional y tecnico</li>
            <li>10% OFF <?php echo $precioPack?>$</li>
        </ul>
    </div>
</section>

<?php include("footer.php")?>