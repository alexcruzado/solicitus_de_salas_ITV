<?php
$numero_control = $_SESSION["numero_control"];
$sql="SELECT numero_control FROM alumno WHERE numero_control = '$numero_control'"; 
$query=mysqli_query($conexion,$sql);
$ver2 = mysqli_fetch_array($query);
?>