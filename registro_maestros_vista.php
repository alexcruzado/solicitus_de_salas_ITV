<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'registro_maestros.php';
require_once 'comprobar_secretario.php';
?>
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col col-md-6">
        <a href="catalogo_registro_maestros_vista.php" class="btn btn-lg btn-block btn btn-warning" style='width:200px; height:25px; FONT-SIZE: 12px;'>Regresar</a>  
			<div class="card">
				<div class="card-body">	
			    <center><h2 class ="h2">Registro de Maestros</h2></center>
		        <form name="forma" method="POST">
                                <div class="form-group">
                                    <label for="numero_control">
                                    Número de Control:
                                    </label>
                                    <input type="text" name="numero_control" 
                                        onblur="salirInput(this)" onfocus="entrarInput(this)"
                                        onkeypress="return tabular(event,this)"
                                        pattern="^([P][0-9]{8})$"
                                        required placeholder="Ingresa número de control, 'P' seguida de 8 dígitos. Ej. P12345678" 
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
                                        pattern="^([0-9]{8})$" 
                                        required placeholder="Capture contraseña de 8 dígitos (solo números)" 
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
                                <input type="submit" name="submit" value="Registrar" class="btn btn-lg btn-block btn-success">                                                                
		 	   </form>
             </div>	
		</div>				
	</div>
</div>

<?php
require_once "inc/footer.php"; 
?>