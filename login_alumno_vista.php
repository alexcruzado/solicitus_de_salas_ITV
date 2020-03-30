<?php
require_once 'creacion_sesion_alumno.php';
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'login_alumno.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alumno</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">	
</head>
<body>
    <br>
    <div class = "container">
        <div class = "row justify-content-center">
            <div class="col col-md-6">
                <div class="card">
                    <div class ="card-body">
                        <h2 class="h2"><center>ALUMNO</center></h2>
                        <form method="POST">
                            <div class="form-group">
                                <label for="numero_control">
                                Número de Control:
                                </label>
                                <input type="text" name="numero_control" 
                                onkeypress="return tabular(event,this)"
                                onblur="salirInput(this)" onfocus="entrarInput(this)" 
                                pattern="^([E][0-9]{8})$" required placeholder="Ingresa número de control, 'E' seguida de 8 dígitos. Ej. E12345678"
                                maxlength="9"
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
                                    maxlength="8"
                                    required placeholder="Capture contraseña de 8 dígitos (solo números)" 
                                    class="form-control"
                                >
                            </div>

                            <input type="submit" name="submit" value="Ingresar" class="btn btn-lg btn-block btn-success">
                            <br>
                            <center><a href="index.php"><input type="submit" value="Regresar" class="btn btn-lg btn-block btn btn-warning"></a></center> 
                        </form>
	          			</div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>

<?php
require_once "inc/footer.php"; 
?>