<?php
session_start();
if(isset($_SESSION["numero_control"])){
    if($_SESSION["numero_control"]){
        header("Location:sesion_secretario_vista.php");
    }
}
?>