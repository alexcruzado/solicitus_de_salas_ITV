<?php
require_once 'comprobar_alumno.php';
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'db/obtener_nombres_alumnos.php';
require_once 'db/obtener_nombre_secretario.php';
require_once 'db/obtener_nombres_salas.php';

$idSolicitud= $_GET["idSolicitud"];
$idAuditorio = $_GET["Auditorio_idAuditorio"];
$fecha = $_GET["fecha"];
$hora = $_GET["hora"];

require_once 'cambiar_fecha_alumno.php';
?>
<br>
<div class = "container">
    <div class = "row justify-content-center">
        <div class="col col-md-9">
            <div class="card">
                <div class ="card-body">
                    <h2 class="text-center">Actualizar Información de la Solicitud</h2>    
                    <h3>Sala reservada:
                        <?php
                            $consulta = "SELECT nombre FROM auditorio WHERE idAuditorio = (SELECT Auditorio_idAuditorio FROM alumno_has_auditorio WHERE idSolicitud = $idSolicitud)";                            
                            $resultSet = $conexion->query($consulta);                           
                            if ($resultSet->num_rows == 1){
                                $row = $resultSet->fetch_assoc();
                                $nombre = $row["nombre"];
                                echo $nombre;
                            }                            
                        ?>                                        
                    </h3> 
                    <h3>Fecha reservada:
                        <?php
                            $consulta2 = "SELECT DATE_FORMAT (fecha,'%d/%m/%Y') AS fecha FROM alumno_has_auditorio WHERE idSolicitud = '$idSolicitud'";
                            $resultSet2 = $conexion->query($consulta2); 
                            if ($resultSet2->num_rows == 1){
                                $row = $resultSet2->fetch_assoc();
                                $fecha = $row["fecha"];                                
                                echo $fecha." (Día, Mes, Año)";
                            }                               
                        ?>
                    </h3> 
                    <h3>Hora reservada:
                        <?php 
                            echo $hora." (Hora, Minutos, Segundos)";
                        ?>                        
                    </h3>                              
                    <form method="POST">                                                                                                                                                                                                           
                        <div class="form-group">                       
                        <input type="text" name="idSolicitud" value="<?php echo "$idSolicitud" ?>" style="visibility:hidden">
                        <input type="text" name="idAlumno" value="<?php echo $ver["idAlumno"]?>" style="visibility:hidden"> <!---Invisible  style="visibility:hidden"-->
                        </div>

                        <div class="form-group">                        
                        <input type="text" name="idSecretario" value="<?php echo $ver2["idSecretario"] ?>" style="display:none">
                        </div>

                        <div class="form-group">
                            <label for="auditorio">
                            Selecciona:
                            </label>
                            <select name="auditorio" class="form-control">
                            <option value="" disabled selected hidden>Selecciona una Opción</option>
                                <?php 
                                while($ver = mysqli_fetch_array($query))
                                {
                                ?>
                                <option value=" <?php echo $ver['idAuditorio'] ?>">  
                                                                  
                                    <?php echo $ver['nombre']?>                                
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="fecha">
                            Fecha: 
                            </label>    
                            <input type="date" name="fecha" class="form-control">                        
                        </div>

                        <div class="form-group">
                            <label for="hora">
                            Hora:
                            </label>
                            <input type="time" name="hora" required min="07:00" max="20:00" step="3600" class="form-control">
                        </div>                  
                                                                            
                        <input type="submit" name="submit" value="Enviar Actualización" class="btn btn-lg btn-block btn-success">

                        <a href="historial_exclusivo_de_cada_alumno_vista2.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>                                
                    </form>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php
require_once "inc/footer.php"; 
?>