<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_maestro.php';
?>
<br>
<div class = "container">
    <a href="sesion_maestro_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>  
    <br>
    <div class = "row">
        <div class = "col">           
            <table class="table table-dark">
                <tr  class="bg-success">                             
                    <td>Maestro</td> 
                    <td>Sala o Auditorio</td> 
                    <td>Fecha</td>
                    <td>Hora</td> 
                    <td>Estado</td> 
                    <td>Comentario</td>         
                </tr>    
                    <?php
                        $sql="SELECT idSolicitud, Maestro_idMaestro, numero_control, auditorio.nombre, fecha, hora, estado, comentario 
                        FROM alumno_has_auditorio 
                        INNER JOIN maestro 
                        ON alumno_has_auditorio.Maestro_idMaestro = maestro.idMaestro 
                        INNER JOIN auditorio 
                        ON alumno_has_auditorio.Auditorio_idAuditorio = auditorio.idAuditorio
                        WHERE numero_control = '$numero_control'";                      
                        $result=mysqli_query($conexion,$sql);
                        while($ver = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                                                        
                            <td><?php echo $ver["numero_control"]; ?></td>
                            <td><?php echo $ver["nombre"]; ?></td>
                            <td><?php echo $ver["fecha"];?></td>
                            <td><?php echo $ver["hora"];?></td>
                            <td><?php echo $ver["estado"];?></td> 
                            <td><?php echo $ver["comentario"];?></td> 
                            
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