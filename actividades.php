<?php



 include("header.php")?>

<h1 class="titulo">Indice de Masa Corporal</h1>
  <p>Realiza este test para conocer que actividad te sera mas de ayuda en tu camino hacia una vida mas sana y un cuerpo mas atletico.</p>
    <form method="post">
        <table  border="1" cellpadding="1" cellspacing="1">
            <tbody>
            <tr>
                <td>
                 <label for="altura_en_m">Ingresa el valor de altura en m:</label>
                </td>
                <td>
                 <input name="altura_en_m" required="required" step="0.000001" type="number" />
                </td>
                </tr>
                <tr>
                <td>
                 <label for="peso_en_kg">Ingresa el valor de peso en kg:</label>
                </td>
                <td>
                 <input name="peso_en_kg" required="required" step="0.000001" type="number" />
                </td>
               </tr>
                
               <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <?php
/*Variable de Control */
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $altura_en_m = floatval ($_POST['altura_en_m']);
    $peso_en_kg = floatval ($_POST['peso_en_kg']);
    $IMC=$peso_en_kg/$altura_en_m/$altura_en_m;
    if($IMC<18)
        echo '<p>Bajo peso.</p><br>','<h2>Valor de IMC: </h2>','<p>' .$IMC  ,'</p>' ,'<h3><a href="actividades.php?clase=musculacion_guiada">Actividad sugerida: Musculacion Guiada </a></h3>'; "<br/>\n";
    ;
    if($IMC>=18&&$IMC<25)
        echo '<p>Peso normal (saludable).</p><br>', '<h2>Valor de IMC: </h2>','<p>' .$IMC  ,'</p>' , '<h3><a href="actividades.php?clase=programa_total">Actividad sugerida: Programa Total </a></h3>'; "<br/>\n";
    ;
    if($IMC>=25&&$IMC<30)
        echo '<p>Sobrepeso leve.</p><br>', '<h2>Valor de IMC: </h2>' ,'<p>' .$IMC  ,'</p>'  , '<h3><a href="actividades.php?clase=clases_funcionales">Actividad sugerida: Clases Funcionales </a></h3>'; "<br/>\n";
    ;
    if($IMC>=30)
        echo '<p>Sobrepeso elevado.</p><br>', '<h2>Valor de IMC: </h2>' ,'<p>' .$IMC  ,'</p>' , '<h3><a href="actividades.php?clase=clases_bajo_impacto">Actividad sugerida: Circuitos de Bajo Impacto </a></h3>';"<br/>\n";
    ;
    
} 

/* Utilice GET para mostrar un pequeño texto explicando la actividad sugerida acompañado de una imagen 
y una variable de control para cuando clickean el link que aparece como resultado del test*/ 
$clase = '';
$descripcion = '';
$img = '';

if (isset($_GET['clase'])){
    switch($_GET['clase']){
        case 'musculacion_guiada':
            $clase = 'Musculacion Guiada';
            $descripcion = 'Gana masa muscular con la ayuda de nuestros profesionales hasta llegar a un peso mas optimo.';
            $img = './imagenes/musculacion.jpg.jpg';
        break;
        case 'programa_total':
            $clase = 'Programa Total';
            $descripcion = 'Lleva tu cuerpo al maximo combinando Musculacion con clases guiadas de alta intensidad';
            $img = './imagenes/programa_total.jpg';
        break;
        case 'clases_funcionales':
            $clase = 'Clases Funcionales';
            $descripcion = 'Alcanza tu peso ideal utilizando ejercicios ligeros en modo de circuito para alcanzar tu peso ideal y fortalezer musculos y articulaciones a la vez';
            $img = './imagenes/HIIT.jpg';
        break;
        case 'clases_bajo_impacto':
            $clase = 'Bajo impacto';
            $descripcion = 'Consigue iniciarte en el mundo del fitness de la manera mas dinamica, divertida, practica y segura para tus articulaciones con nuestras divertidas clases de bajo impacto.';
            $img = './imagenes/bajo_impacto.jpg';
        break;
    }
}
  
?>

<div class="clases_descripcion">
    <h2><?php echo $clase; ?></h2>
    <p><?php echo $descripcion ?></p>
    <div   class="img_container" >
    <img class="img_actividades" src="<?php echo $img?>" alt="<?php $clase ?>"> 
    </div>

</div>
        
<?php include("footer.php"); ?>