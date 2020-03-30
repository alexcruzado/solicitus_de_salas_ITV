<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_maestro.php';
require_once 'historial_exclusivo_de_cada_maestro_para_ver2.php';
?>

<br> 
<div class = "container">
	<a href="sesion_maestro_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>  
	<br> 
    <div class = "row">
        <div class = "col">
        	<h2 class="h2"><center>Mi Historial</center></h2>
           <?php
                echo $tabla;
            ?>
        </div>
    </div>
</div>
<?php
    require_once "inc/footer.php";
?>