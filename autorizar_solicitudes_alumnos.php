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
            <table id='mitabla'class="table table-dark">
                <tr  class="bg-success">         
                    <td>Solicitud</td> 
                    <td>Alumno</td> 
                    <td>Sala o Auditorio</td> 
                    <td>Fecha</td> 
                    <td>Hora</td> 
                    <td>Estado</td> 
                    <td>Autorizar</td> 
                    <td>Rechazar</td> 
                </tr>    
                    <?php
                        $sql="SELECT idSolicitud, Alumno_idAlumno, numero_control, auditorio.nombre, fecha, hora, estado 
                        FROM alumno_has_auditorio 
                        INNER JOIN alumno 
                        ON alumno_has_auditorio.Alumno_idAlumno = alumno.idAlumno 
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
                            <td><a href="sala_autorizada_alumno.php?idSolicitud=<?php echo $ver["idSolicitud"];?>&&Alumno_idAlumno=<?php echo $ver["Alumno_idAlumno"];?>&&fecha=<?php echo $ver["fecha"];?>&&hora=<?php echo $ver["hora"];?>&&estado=<?php echo $ver["estado"];?>">Autorizar</a></td>                                       
                            <td><a href="rechazar_solicitudes_alumnos_vista.php?idSolicitud=<?php echo $ver["idSolicitud"];?>&&Alumno_idAlumno=<?php echo $ver["Alumno_idAlumno"];?>">Rechazar</a></td>                                       
                            
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