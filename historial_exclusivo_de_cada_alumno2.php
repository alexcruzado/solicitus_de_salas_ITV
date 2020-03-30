<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_alumno.php';

$sql="SELECT idSolicitud, Alumno_idAlumno, numero_control, Auditorio_idAuditorio, auditorio.nombre, Secretario_idSecretario, fecha, hora, estado, comentario 
                        FROM alumno_has_auditorio 
                        INNER JOIN alumno 
                        ON alumno_has_auditorio.Alumno_idAlumno = alumno.idAlumno 
                        INNER JOIN auditorio 
                        ON alumno_has_auditorio.Auditorio_idAuditorio = auditorio.idAuditorio
                        WHERE numero_control = '$numero_control' AND (estado = 'pendiente' OR estado = 'aprobado')";                      
$result=mysqli_query($conexion,$sql);
$tabla = "";
	
	if($result->num_rows > 0){

		#$tabla .= '<table id="mitabla" class="table table-bordered table-striped table-hover">';

		$tabla .= "<table id='mitabla' class='table table-bordered table-striped table-hover'>";
		$tabla .= "<thead>";
		$tabla .= "<tr>";		
		#$tabla .= "<th>Id</th>";
		$tabla .= "<th>Alumno</th>";
		$tabla .= "<th>Sala</th>";
		$tabla .= "<th>Fecha</th>";				
		$tabla .= "<th>Hora</th>";				
		$tabla .= "<th>Estado</th>";				
		$tabla .= "<th>Comentario</th>";				
		$tabla .= "<th>Acción</th>";				
		$tabla .= "</thead>";
		$tabla .= "<tbody>";

		while ($row = $result->fetch_assoc()) {	
			$idSolicitud = $row["idSolicitud"];
			$Alumno_idAlumno = $row["Alumno_idAlumno"];
			#$idSolicitud = $row["idSolicitud"];
			$numero_control	= $row["numero_control"];		
			$Auditorio_idAuditorio	= $row["Auditorio_idAuditorio"];
			$nombre	= $row["nombre"];
			$fecha	= $row["fecha"];	
			$hora	= $row["hora"];	
			$estado	= $row["estado"];				
			$comentario	= $row["comentario"];				
			
			#Si pongo comillas dobles, php me evalua la variable y me pone el nombre que es
			$tabla .= "<tr>";
			#$tabla .= "<td> $idSolicitud</td>";	
			$tabla .= "<td> $numero_control</td>";	
			$tabla .= "<td> $nombre</td>";	
			$tabla .= "<td> $fecha</td>";
			$tabla .= "<td> $hora</td>";
			$tabla .= "<td> $estado</td>";
			$tabla .= "<td> $comentario</td>";
			$tabla .= "<td>								
							<a href='cambiar_fecha_alumno_vista.php?idSolicitud=".$idSolicitud."&&Alumno_idAlumno=".$Alumno_idAlumno."&&Auditorio_idAuditorio=".$Auditorio_idAuditorio."&&fecha=".$fecha."&&hora=".$hora."'>Cambiar</a> |
							<a href='cancelar_fecha_alumno.php?idSolicitud=".$idSolicitud."'>Cancelar</a>
							
						</td>";				
		}
		$tabla .= "</tbody>";
		$tabla .= "</table>";

	}else{
		$tabla = "<h4 class='alert alert-danger'>No hay registros</h4>";
	}
?>                                