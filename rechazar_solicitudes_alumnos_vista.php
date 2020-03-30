<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'rechazar_alumno.php';
require_once 'comprobar_secretario.php';

$idSolicitud= $_GET["idSolicitud"];
$sql="SELECT idSolicitud, Alumno_idAlumno FROM alumno_has_auditorio WHERE idSolicitud = '$idSolicitud'";
$result=mysqli_query($conexion,$sql);
$ver = mysqli_fetch_array($result)
?>
<br>
<div class = "container">
        <div class = "row justify-content-center">
            <div class="col col-md-9">
                <div class="card">
                    <div class ="card-body">
                        <form method="POST">   
                                    <h1 class ="text-center">Motivo de Rechazo</h1>                       
                                    <input type="text" name="idSolicitud" value = "<?php echo $ver["idSolicitud"];?>" style="visibility:hidden">         
                                               
                                    <input type="text" name="Alumno_idAlumno" value = "<?php echo $ver["Alumno_idAlumno"]; ?>" style="visibility:hidden">
                           
                            <div class="form-group" >                                
                                <textarea name="comentario" rows="10" maxlength=200 required placeholder="Tienes 200 caracteres disponibles para escribir el motivo de rechazo"></textarea>
                               <!-- <label for="caracteres">Carateres utilizado</label><p></p>-->
                            </div>
                                <input type="submit" name="submit" value="Rechazar" class="btn btn-lg btn-block btn-success"> 
                                <br>
                                <center><a href="autorizar_solicitudes_alumnos_vista2.php"><input type="submit" value="Regresar" class="btn btn-lg btn-block btn btn-warning"></a></center>   
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
</div>  
<?php
require_once "inc/footer.php"; 
?>