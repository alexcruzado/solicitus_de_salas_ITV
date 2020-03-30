<?php
$numero_control = $_SESSION["numero_control"];
$consulta = "SELECT nombre FROM auditorio";
$resultSet = $conexion->query($consulta);
$auditorio = mysqli_fetch_array($resultSet);

    /*$sql="SELECT Auditorio_idAuditorio FROM `alumno_has_auditorio` 
        INNER JOIN auditorio
        ON alumno_has_auditorio.Auditorio_idAuditorio = auditorio.nombre
        WHERE idMaestro ='$idMaestro'"; 
        $query=mysqli_query($conexion,$sql);
*/

?>
