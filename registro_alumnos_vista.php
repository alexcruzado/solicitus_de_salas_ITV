<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'registro_alumnos.php';
require_once 'comprobar_secretario.php';
?>
<br>
<div class="container">
	<div class="row justify-content-center">    
		<div class="col col-md-6">
        <a href="catalogo_registro_alumnos_vista.php" class="btn btn-lg btn-block btn btn-warning" style='width:200px; height:25px; FONT-SIZE: 12px;'>Regresar</a>  
			<div class="card">            
				<div class="card-body">	
			    <h2 class ="text-center">Registro de Alumnos</h2>
		        <form name="forma" method="POST">
                                <div class="form-group">
                                    <label for="numero_control">
                                    Número de Control:
                                    </label>
                                    <input type="text" name="numero_control" 
                                        onblur="salirInput(this)" onfocus="entrarInput(this)"
                                        onkeypress="return tabular(event,this)"
                                        required pattern="^([E][0-9]{8})$"
                                        placeholder="Ingresa número de control, 'E' seguida de 8 dígitos. Ej. E12345678" 
                                        class="form-control" 
                                    >
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
                                        placeholder="Ingrese sus apellidos (solo letras)" 
                                        class="form-control"
                                    >
                                </div>

                                <div class="form-group">
                                    <label for="carrera">
                                    Carrera:
                                    </label>
                                    <select class="form-control" name="carrera">
                                        <option value="" disabled selected hidden>Selecciona una Opción</option>
                                        <option value="administracion">Licenciatura en Administración</option>
                                        <option value="bioquimica">Ingeniería Bioquímica</option>
                                        <option value="electronica">Ingeniería Electrónica</option>
                                        <option value="electrica">Ingeniería Eléctrica</option>
                                        <option value="industrial">Ingeniería Industrial</option>
                                        <option value="mecanica">Ingeniería Mecánica</option>
                                        <option value="mecatronica">Ingeniería Mecatrónica</option>
                                        <option value="quimica">Ingeniería Química</option>
                                        <option value="sistemas">Ingeniería en Sistemas Computacionales</option>
                                        <option value="energias_renovables">Ingeniería en Energías Renovables</option> 
                                        <option value="gestion_empresarial">Ingeniería en Gestión Empresarial</option>                                
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Registrar" class="btn btn-lg btn-block btn-success">                                                                                                
		 	   </form>
             </div>	             
		</div>       
	</div>    
</div>

<?php
require_once "inc/footer.php"; 
?>