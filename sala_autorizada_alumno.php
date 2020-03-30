<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
$idSolicitud= $_GET["idSolicitud"];
$Alumno_idAlumno= $_GET["Alumno_idAlumno"];
$fecha= $_GET["fecha"];
$hora= $_GET["hora"];
$estado= $_GET["estado"];

$busqueda="SELECT idSolicitud, Alumno_idAlumno FROM alumno_has_auditorio 
           WHERE idSolicitud ='$idSolicitud' AND Alumno_idAlumno ='$Alumno_idAlumno'";

$actualizar = "UPDATE alumno_has_auditorio SET estado = 'aprobado'
               WHERE idSolicitud= '$idSolicitud' AND Alumno_idAlumno = '$Alumno_idAlumno'";

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