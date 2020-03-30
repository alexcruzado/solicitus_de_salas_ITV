<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
require_once 'catalogo_salas.php';
?>

<br> 
<div class = "container">
	<a href="sesion_secretario_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>  
    <div class = "row">
        <div class = "col">
        	<h2 class="h2"><center>Catálogo de Salas y Auditorios</center></h2>
        	<br> 
			<a href="alta_sala_vista.php" class="btn btn-lg btn-block btn btn-success" style='width:200px; height:25px; FONT-SIZE: 12px;'>Registrar Sala o Auditorio</a>  
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