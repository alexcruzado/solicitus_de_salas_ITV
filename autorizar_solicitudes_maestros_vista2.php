<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
require_once 'autorizar_solicitudes_maestros2.php';
?>

<br> 
<div class = "container">
	<a href="sesion_secretario_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>  
    <div class = "row">
        <div class = "col">
        	<h2 class="h2"><center>Solicitudes de Maestros</center></h2>
        	<br>
           <?php
                echo $tabla;
            ?>
        </div>
    </div>
</div>
<?php
    require_once "inc/footer.php";
?>