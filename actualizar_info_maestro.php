<?php
require_once 'db/database.php';
if(isset($_POST["submit"])){
    $idMaestro           = $_POST["idMaestro"]; 
    $numero_control     = $_POST["numero_control"];
    $contrasena         = $_POST["contrasena"];
    $nombre             = $_POST["nombre"];
    $apellidos          = $_POST["apellidos"];    

    $busqueda="SELECT idMaestro FROM maestro WHERE idMaestro ='$idMaestro'";

    $actualizar = "UPDATE maestro SET    
                    contrasena = '$contrasena',
                    nombre = '$nombre',
                    apellidos = '$apellidos' WHERE idMaestro = '$idMaestro'";

    if($conexion->query($busqueda)&& $conexion->query($actualizar)){                            
        echo "<br>";   
        echo "<div align=\"center\" class=\"alert alert-success\">Información Actualizada</div><br>";                                        
        
     }else
     {
        echo "<br>";
        echo "<div align=\"center\" class=\"alert alert-danger\">ERORO al actualizar</div><br>"; 
        echo mysqli_error($conexion);
     }  
}

?>