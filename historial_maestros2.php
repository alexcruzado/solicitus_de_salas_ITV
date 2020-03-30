<?php
require_once 'comprobar_secretario.php';
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';

$sql="SELECT idSolicitud, Maestro_idMaestro, numero_control, auditorio.nombre, fecha, hora, estado,comentario
                        FROM alumno_has_auditorio 
                        INNER JOIN maestro 
                        ON alumno_has_auditorio.Alumno_idAlumno = maestro
						.idmaestro 
                        INNER JOIN auditorio 
                        ON alumno_has_auditorio.Auditorio_idAuditorio = auditorio.idAuditorio"; 
$result=mysqli_query($conexion,$sql);
$tabla = "";
	
	if($result->num_rows > 0){

		#$tabla .= '<table id="mitabla" class="table table-bordered table-striped table-hover">';

		$tabla .= "<table id='mitabla' class='table table-bordered table-striped table-hover'>";
		$tabla .= "<thead>";
		$tabla .= "<tr>";
		#$tabla .= "<th>Id</th>";
		$tabla .= "<th>Maestro</th>";
		$tabla .= "<th>Sala</th>";
		$tabla .= "<th>Fecha</th>";				
		$tabla .= "<th>Hora</th>";				
		$tabla .= "<th>Estado</th>";				
		$tabla .= "<th>Comentario</th>";				
		$tabla .= "</thead>";
		$tabla .= "<tbody>";

		while ($row = $result->fetch_assoc()) {
			$idSolicitud = $row["idSolicitud"];			
			$numero_control	= $row["numero_control"];
			$nombre	= $row["nombre"];
			$fecha	= $row["fecha"];	
			$hora	= $row["hora"];	
            $estado	= $row["estado"];	
            $comentario = $row["comentario"];			
			
			#Si pongo comillas dobles, php me evalua la variable y me pone el nombre que es
			$tabla .= "<tr>";
			#$tabla .= "<td> $idSolicitud</td>";	
			$tabla .= "<td> $numero_control</td>";	
			$tabla .= "<td> $nombre</td>";	
			$tabla .= "<td> $fecha</td>";
			$tabla .= "<td> $hora</td>";
			$tabla .= "<td> $estado</td>";			
			$tabla .= "<td> $comentario</td>";			
			$tabla .= "</tr>";
		}
		$tabla .= "</tbody>";
		$tabla .= "</table>";

	}else{
		$tabla = "<h4 class='alert alert-danger'>No hay registros</h4>";
	}
?>                                