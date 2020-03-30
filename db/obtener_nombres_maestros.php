<?php
$numero_control = $_SESSION["numero_control"];
$sql="SELECT idMaestro FROM maestro WHERE numero_control = '$numero_control'"; 
$query=mysqli_query($conexion,$sql);
$ver = mysqli_fetch_array($query);
?>
