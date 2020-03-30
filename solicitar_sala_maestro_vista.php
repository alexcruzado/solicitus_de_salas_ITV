<?php
require_once 'comprobar_maestro.php';
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'db/obtener_nombres_maestros.php';
require_once 'db/obtener_nombre_secretario.php';
require_once 'db/obtener_nombres_salas.php';
require_once 'solicitar_sala_maestro.php';
?>

<br>
<div class = "container">
    <div class = "row justify-content-center">
        <div class="col col-md-9">
            <div class="card">
                <div class ="card-body">
                    <h2 class="h2"><center>Solicitud</center></h2>
                    <form method="POST">                                                                                                                                                                                                           
                        <div class="form-group">                       
                        <input type="text" name="idMaestro" value="<?php echo $ver["idMaestro"] ?>" style="display:none"> <!---Invisible  style="visibility:hidden"-->
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
                        <input type="date" id="txtDate" name="fecha" class="form-control"> <!--min="2019-03-25" max="2019-05-25"-->
                        </div>

                        <div class="form-group">
                            <label for="hora">
                            Hora:
                            </label>
                            <input type="time" name="hora" required min="07:00" max="20:00" step="3600" class="form-control">
                        </div>                  
                                                                            
                        <input type="submit" name="submit" value="Enviar Solicitud" class="btn btn-lg btn-block btn-success">
                        <a href="sesion_maestro_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>                                
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