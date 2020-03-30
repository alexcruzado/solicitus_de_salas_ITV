<?php 
//En este archivo comprobamos que estes ingresando como alumno por si trata de acceder a la parte de secretario o maestro no lo deje y lo redireccione
session_start();
include "db/database.php";
$numero_control=$_SESSION["numero_control"];
$sql = "SELECT numero_control FROM alumno WHERE numero_control = '$numero_control'";
    $resultSet = $conexion->query($sql);
    if ($resultSet->num_rows == 1) {
    }else {
    	header("Location: index.php");
    }
?>