<?php

if(isset($_POST['submit'])){
   $idSolicitud= $_POST["idSolicitud"];
   $Alumno_idAlumno= $_POST["Alumno_idAlumno"];
   $comentario = $_POST["comentario"];
    
   $busqueda="SELECT idSolicitud, Alumno_idAlumno FROM alumno_has_auditorio 
               WHERE idSolicitud ='$idSolicitud' AND Alumno_idAlumno ='$Alumno_idAlumno'";
    
   $actualizar = "UPDATE alumno_has_auditorio SET estado = 'rechazado', comentario = '$comentario'
                   WHERE idSolicitud= '$idSolicitud' AND Alumno_idAlumno = '$Alumno_idAlumno'";
    
    if($conexion->query($busqueda)&& $conexion->query($actualizar)){                            
        echo "<br>";   
        echo "<div align=\"center\" class=\"alert alert-success\">Solicitud Rechazada</div><br>";                                
        include 'inc/header_redireccionamiento_secretario.php';
        
     }else
     {
        echo "<br>";
        echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
        echo mysqli_error($conexion);
     }  
}  
?>