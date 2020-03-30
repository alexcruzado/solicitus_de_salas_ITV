<?php
	require_once 'inc/header.php';
	require_once 'inc/banner.php';
	include 'db/database.php';
	require_once 'comprobar_secretario.php';	
	
	#include "db/database.php"; 	#de Ale
	
	$sql="SELECT nombre, edificio, capacidad, sala, auditorio FROM auditorio";
	$result=mysqli_query($conexion,$sql);

	$tabla = "";
	
	if($result->num_rows > 0){

		#$tabla .= '<table id="mitabla" class="table table-bordered table-striped table-hover">';

		$tabla .= "<table id='mitabla' class='table table-bordered table-striped table-hover'>";
		$tabla .= "<thead>";
		$tabla .= "<tr>";
		$tabla .= "<th>Nombre</th>";
		$tabla .= "<th>Edificio</th>";
		$tabla .= "<th>Capacidad</th>";		
		$tabla .= "<th>Tipo</th>";		
		$tabla .= "</thead>";
		$tabla .= "<tbody>";

		while ($row = $result->fetch_assoc()) {
			$nombre	= $row["nombre"];
			$edificio	= $row["edificio"];
			$capacidad	= $row["capacidad"];
			$sala	= $row["sala"];
			$auditorio = $row["auditorio"];
			$tipo = $row["sala"]."".$row["auditorio"];	
			
			#Si pongo comillas dobles, php me evalua la variable y me pone el nombre que es
			$tabla .= "<tr>";
			$tabla .= "<td> $nombre </td>";	
			$tabla .= "<td> $edificio </td>";
			$tabla .= "<td> $capacidad </td>";
			$tabla .= "<td> $tipo </td>";			
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