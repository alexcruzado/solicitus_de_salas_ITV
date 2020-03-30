<?php
require_once 'comprobar_alumno.php';
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'actualizar_info_alumno.php';
require_once 'db/act_alum/obtener_id_alumno.php';
require_once 'db/act_alum/obtener_numcontrol.php';
require_once 'db/act_alum/obtener_nombre.php';
require_once 'db/act_alum/obtener_apellidos.php';
require_once 'db/act_alum/obtener_carrera.php';
?>

<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col col-md-6">
			<div class="card">
				<div class="card-body">	
			    <h2 class ="text-center">Actualiza Información</h2>
		        <form name="forma" method="POST">

                                <input type="text" name="idAlumno" value="<?php echo $ver["idAlumno"] ?>" style="visibility:hidden"> <!---Invisible  style="visibility:hidden"-->
                                
                                <div class="form-group">
                                    <label for="numero_control">
                                    Número de Control:
                                    </label>
                                    <input type="text" name="numero_control" value="<?php echo $ver2["numero_control"] ?>" readonly="readonly" class="form-control"> <!---Invisible  style="visibility:hidden"-->
                                </div>                                                      

                                <div class="form-group">
                                    <label for="contrasena">
                                    Contraseña:
                                    </label>
                                    <input type="password" name="contrasena"
                                        onkeypress="return tabular(event,this)"
                                        onblur="salirInput(this)" onfocus="entrarInput(this)"
                                        required pattern="^([0-9]{8})$" 
                                        placeholder="Capture contraseña de 8 dígitos (solo números)" 
                                        class="form-control"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="nombre">
                                    Nombre:
                                    </label>
                                    <input type="text" name="nombre"                                       
                                        required pattern="^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,35})$" 
                                        value="<?php echo $ver4["nombre"] ?>"
                                        placeholder="Ingrese su nombre (solo letras)" 
                                        class="form-control"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="apellidos">
                                    Apellidos:
                                    </label>
                                    <input type="text" name="apellidos"    
                                        required pattern="^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,64})$" 
                                        value="<?php echo $ver5["apellidos"] ?>"
                                        placeholder="Ingrese sus apellidos (solo letras)" 
                                        class="form-control"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="carrera">
                                    Carrera:
                                    </label>
                                    <input type="text" name="carrera" value="<?php echo $ver3["carrera"] ?>" readonly="readonly" class="form-control"> <!---Invisible  style="visibility:hidden"-->
                                </div>                                
                            </div>
                                <input type="submit" name="submit" value="Actualizar" class="btn btn-lg btn-block btn-success">  
                                <hr>
                                
                                <a href="sesion_alumno_vista.php" class="btn btn-lg btn-block btn btn-warning">Regresar</a>     
		 	   </form>
             </div>	             
		</div>       
	</div>    
</div>

<?php
require_once "inc/footer.php"; 
?>