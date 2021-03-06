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
                    <td>Comentarios</td> 
                    <td>Cambiar Fecha</td>        
                    <td>Cancelar</td>                    
                </tr>    
                    <?php
                        $sql="SELECT idSolicitud, Maestro_idMaestro, numero_control, Auditorio_idAuditorio, auditorio.nombre, Secretario_idSecretario, fecha, hora, estado, comentario 
                        FROM alumno_has_auditorio 
                        INNER JOIN maestro 
                        ON alumno_has_auditorio.Maestro_idMaestro = maestro.idMaestro 
                        INNER JOIN auditorio 
                        ON alumno_has_auditorio.Auditorio_idAuditorio = auditorio.idAuditorio
                        WHERE numero_control = '$numero_control' AND (estado = 'pendiente' OR estado = 'aprobado')";                      
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
                            <td><a href="cambiar_fecha_maestro_vista.php?idSolicitud=<?php echo $ver["idSolicitud"];?>&&Maestro_idMaestro=<?php echo $ver["Maestro_idMaestro"];?>&&Auditorio_idAuditorio=<?php echo $ver["Auditorio_idAuditorio"];?>&&fecha=<?php echo $ver["fecha"];?>&&hora=<?php echo $ver["hora"];?>">Cambiar Fecha</a></td>                                                                                
                            <td><a href="cancelar_fecha_maestro_vista.php?idSolicitud=<?php echo $ver["idSolicitud"];?>">Cancelar</a></td>
                            
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