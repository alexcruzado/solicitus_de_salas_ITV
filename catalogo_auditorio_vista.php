<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
?>
<br> 
<div class = "container">
<a href="sesion_secretario_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>  
<br>   
    <div class = "row">
        <div class = "col">
            <table class="table table-dark">
                <tr  class="bg-success">         
                    <td>Nombre</td> 
                    <td>Edificio</td> 
                    <td>Capacidad</td> 
                    <td>Tipo</td>                     
                </tr>    
                    <?php
                        $sql="SELECT nombre, edificio, capacidad, auditorio FROM auditorio WHERE auditorio = auditorio"; 
                        $result=mysqli_query($conexion,$sql);
                        while($ver = mysqli_fetch_array($result)){
                    ?>
                    <tr>                                                                                    
                            <td><?php echo $ver["nombre"]; ?></td>
                            <td><?php echo $ver["edificio"];?></td>
                            <td><?php echo $ver["capacidad"];?></td>
                            <td><?php echo $ver["auditorio"];?></td>                                                                               
                    </tr>
                    <?php
                        }
                    ?>    
            </table>
        </div>
    </div>
</div>
<?php
require_once "inc/footer.php"; 
?>