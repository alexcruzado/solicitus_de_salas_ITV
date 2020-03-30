<?php

if(isset($_POST['submit'])){
    $idSolicitud= $_POST["idSolicitud"];
    $Maestro_idMaestro= $_POST["Maestro_idMaestro"];
    $comentario = $_POST["comentario"];
    
    $busqueda="SELECT idSolicitud, Maestro_idMaestro FROM alumno_has_auditorio 
               WHERE idSolicitud ='$idSolicitud' AND Maestro_idMaestro ='$Maestro_idMaestro'";
    
    $actualizar = "UPDATE alumno_has_auditorio SET estado = 'rechazado', comentario = '$comentario'
                   WHERE idSolicitud= '$idSolicitud' AND Maestro_idMaestro = '$Maestro_idMaestro'";
    
    if($conexion->query($busqueda)&& $conexion->query($actualizar)){                            
        echo "<br>";   
        echo "<div align=\"center\" class=\"alert alert-success\">Solicitud rechazada</div><br>";                                
        include 'inc/header_redireccionamiento_secretario.php';
        
     }else
     {
        echo "<br>";
        echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
        echo mysqli_error($conexion);
     }  
}  
?>