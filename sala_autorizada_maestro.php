<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
$idSolicitud= $_GET["idSolicitud"];
$Maestro_idMaestro= $_GET["Maestro_idMaestro"];
$fecha= $_GET["fecha"];
$hora= $_GET["hora"];
$estado= $_GET["estado"];

$busqueda="SELECT idSolicitud, Maestro_idMaestro FROM alumno_has_auditorio 
           WHERE idSolicitud ='$idSolicitud' AND Maestro_idMaestro ='$Maestro_idMaestro'";

$actualizar = "UPDATE alumno_has_auditorio SET estado = 'aprobado'
               WHERE idSolicitud= '$idSolicitud' AND Maestro_idMaestro = '$Maestro_idMaestro'";

/*$busquedaParaInsert = "SELECT idSolicitud, Alumno_idAlumno
                       FROM alumno_has_auditorio WHERE idSolicitud ='$idSolicitud' AND Alumno_idAlumno ='$Alumno_idAlumno'";

$insertar = "INSERT INTO historial(Alumno_has_Auditorio_idSolicitud, Alumno_idAlumno, fecha, hora, estado)
            VALUES('$idSolicitud','$Alumno_idAlumno','$fecha','$hora','aprabado')";

            && $conexion->query($busquedaParaInsert) && $conexion->query($insertar) && $conexion->query($eliminar)

*/
if($conexion->query($busqueda) && $conexion->query($actualizar)){                            
    echo "<br>";
    echo "<div align=\"center\" class=\"alert alert-success\">Solicitud Autorizada</div><br>";                                
    include 'inc/header_redireccionamiento_secretario.php';
    
 }else
 {
    echo "<br>";
    echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
    echo mysqli_error($conexion);
 }    
?>