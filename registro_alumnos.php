<?php
require_once 'db/database.php';
#require_once 'comprobar_secretario.php';
if(isset($_POST["submit"])){   
   $numero_control= $_POST["numero_control"];

   $busqueda="SELECT numero_control FROM alumno where numero_control ='$numero_control'";
   $resultSet = $conexion->query($busqueda);
      if ($resultSet->num_rows ==1) 
      {
        echo "<br>";
        echo "<div align=\"center\" class=\"alert alert-warning\">Alumno duplicado.</div><br>"; 
      }
      else if($resultSet->num_rows ==0){

         $numero_control   = 	$_POST["numero_control"];
         $contrasena       = 	$_POST["contrasena"];  
         $nombre           =  $_POST["nombre"];
         $apellidos        =  $_POST["apellidos"];            
         $carrera          =  $_POST["carrera"];

         $sql = "INSERT INTO alumno (numero_control,contrasena,nombre,apellidos,carrera)
             VALUES ('$numero_control','$contrasena','$nombre','$apellidos','$carrera')";
             
             if($conexion->query($sql)){                            
                echo "<br>";   
                echo "<div align=\"center\" class=\"alert alert-success\">Agregado con éxito</div><br>";                                
                //require_once 'inc/header_redireccionamiento.php';
             }else
             {
                echo "<br>";
                echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
             } 
      }   
}
?>