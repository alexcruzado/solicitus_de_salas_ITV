<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
require_once 'catalogo_registro_alumnos.php';
?>

<br> 
<div class = "container">
	<a href="sesion_secretario_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>  
    <div class = "row">
        <div class = "col">
        	<h2 class="h2"><center>Alumnos Registrados</center></h2>
        	<br> 
			<a href="registro_alumnos_vista.php" class="btn btn-lg btn-block btn btn-success" style='width:200px; height:25px; FONT-SIZE: 12px;'>Registrar Alumno</a>  
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