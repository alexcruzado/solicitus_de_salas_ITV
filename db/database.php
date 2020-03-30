<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "admin";
$dbBase = "solicitud_salas";

$conexion = new mysqli($dbHost, $dbUser, $dbPass, $dbBase);

if ($conexion->connect_error) {
    die("Conexion no lograda...: " . $conexion->connect_error);
    exit();
}
?>