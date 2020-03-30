<?php
	require_once 'inc/header.php';
	require_once 'inc/banner.php';
	include 'db/database.php';
	require_once 'comprobar_secretario.php';	
	
	#include "db/database.php"; 	#de Ale
	
	$sql="SELECT numero_control ,nombre, apellidos, carrera FROM alumno";
	$result=mysqli_query($conexion,$sql);

	$tabla = "";
	
	if($result->num_rows > 0){

		#$tabla .= '<table id="mitabla" class="table table-bordered table-striped table-hover">';

		$tabla .= "<table id='mitabla' class='table table-bordered table-striped table-hover'>";
		$tabla .= "<thead>";
		$tabla .= "<tr>";
		$tabla .= "<th>Numero de control</th>";
		$tabla .= "<th>Nombre</th>";
		$tabla .= "<th>Apellidos</th>";
		$tabla .= "<th>Carrera</th>";				
		$tabla .= "</thead>";
		$tabla .= "<tbody>";

		while ($row = $result->fetch_assoc()) {
			$numero_control	= $row["numero_control"];
			$nombre	= $row["nombre"];
			$apellidos	= $row["apellidos"];
			$carrera	= $row["carrera"];	
			
			#Si pongo comillas dobles, php me evalua la variable y me pone el nombre que es
			$tabla .= "<tr>";
			$tabla .= "<td> $numero_control</td>";	
			$tabla .= "<td> $nombre</td>";	
			$tabla .= "<td> $apellidos</td>";
			$tabla .= "<td> $carrera</td>";
			#$tabla .= "</tr>";
			#$tabla .= "<td> <a href='tema25.php?id_casa=".$id_casa."'>Eliminar</a> </td>";
			$tabla .= "</tr>";
		}
		$tabla .= "</tbody>";
		$tabla .= "</table>";

	}else{
		$tabla = "<h4 class='alert alert-danger'>No hay registros</h4>";
	}
?>