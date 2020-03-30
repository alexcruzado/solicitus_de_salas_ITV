<?php
$numero_control = $_SESSION["numero_control"];
$sql="SELECT apellidos FROM alumno WHERE numero_control = '$numero_control'"; 
$query=mysqli_query($conexion,$sql);
$ver5 = mysqli_fetch_array($query);
?>