<?php
require_once 'db/database.php';
$idSolicitud = $_GET["idSolicitud"];

$busqueda = "SELECT estado FROM alumno_has_auditorio WHERE idSolicitud = '$idSolicitud'";

$actualizar = "UPDATE alumno_has_auditorio SET    
estado = 'cancelado'
WHERE idSolicitud = '$idSolicitud'";

if($conexion->query($busqueda)&& $conexion->query($actualizar)){                            
echo "<br>";   
echo "<div align=\"center\" class=\"alert alert-success\">Solicitud cancelada, espera mientras te redirigimos a tu sesión</div><br>";   
include ('inc/header_redireccionamiento_maestro.php');                                     
}else
{
echo "<br>";
echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
echo mysqli_error($conexion);
}  
?>