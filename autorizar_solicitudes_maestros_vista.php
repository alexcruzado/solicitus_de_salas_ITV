<?php
require_once 'comprobar_secretario.php';
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
?>
<br>
<div class = "container">
<a href="sesion_secretario_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>  
<br>   
    <div class = "row">
        <div class = "col">
            <table class="table table-dark">
                <tr  class="bg-success">         
                    <td>Solicitud</td> 
                    <td>Maestro</td> 
                    <td>Sala o Auditorio</td> 
                    <td>Fecha</td> 
                    <td>Hora</td> 
                    <td>Estado</td> 
                    <td>Autorizar</td> 
                    <td>Rechazar</td> 
                </tr>    
                    <?php
                        $sql="SELECT idSolicitud, Maestro_idMaestro, numero_control, auditorio.nombre, fecha, hora, estado 
                        FROM alumno_has_auditorio 
                        INNER JOIN maestro 
                        ON alumno_has_auditorio.Maestro_idMaestro = maestro.idMaestro 
                        INNER JOIN auditorio 
                        ON alumno_has_auditorio.Auditorio_idAuditorio = auditorio.idAuditorio
                        WHERE estado = 'pendiente'"; 
                        $result=mysqli_query($conexion,$sql);
                        while($ver = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                            
                            <td><?php echo $ver["idSolicitud"]; ?></td>
                            <td><?php echo $ver["numero_control"]; ?></td>
                            <td><?php echo $ver["nombre"]; ?></td>
                            <td><?php echo $ver["fecha"];?></td>
                            <td><?php echo $ver["hora"];?></td>
                            <td><?php echo $ver["estado"];?></td> 
                            <!--Recuerda que lo que va despues del ? tiene que ser el nombre de la misma variable que vas a mandar a imprimirw-->                      
                            <td><a href="sala_autorizada_maestro.php?idSolicitud=<?php echo $ver["idSolicitud"];?>&&Maestro_idMaestro=<?php echo $ver["Maestro_idMaestro"];?>&&fecha=<?php echo $ver["fecha"];?>&&hora=<?php echo $ver["hora"];?>&&estado=<?php echo $ver["estado"];?>">Autorizar</a></td>                                       
                            <td><a href="rechazar_solicitudes_maestros_vista.php?idSolicitud=<?php echo $ver["idSolicitud"];?>&&Maestro_idMaestro=<?php echo $ver["Maestro_idMaestro"];?>">Rechazar</a></td>                                       
                            
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