<?php
require_once 'db/database.php';
if(isset($_POST["submit"])){
    $idAlumno           = $_POST["idAlumno"]; 
    $numero_control     = $_POST["numero_control"];
    $contrasena         = $_POST["contrasena"];
    $nombre             = $_POST["nombre"];
    $apellidos          = $_POST["apellidos"];
    $carrera            = $_POST["carrera"];

    $busqueda="SELECT idAlumno FROM alumno WHERE idAlumno ='$idAlumno'";

    $actualizar = "UPDATE alumno SET    
                    contrasena = '$contrasena',
                    nombre = '$nombre',
                    apellidos = '$apellidos' WHERE idAlumno = '$idAlumno'";

    if($conexion->query($busqueda)&& $conexion->query($actualizar)){                            
        echo "<br>";   
        echo "<div align=\"center\" class=\"alert alert-success\">Informacion actualizada</div><br>";                                        
        
     }else
     {
        echo "<br>";
        echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
        echo mysqli_error($conexion);
     }  
}

?>