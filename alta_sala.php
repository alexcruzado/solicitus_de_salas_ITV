<?php
require_once 'db/database.php';
if(isset($_POST["submit"])){   
   $nombre= $_POST["nombre"];
   $busqueda="SELECT nombre FROM auditorio where nombre ='$nombre'";
   $resultSet = $conexion->query($busqueda);
      if ($resultSet->num_rows ==1) 
      {
        echo "<br>";
        echo "<div align=\"center\" class=\"alert alert-warning\">Sala duplicada.</div><br>"; 
      }
      else if($resultSet->num_rows ==0){

         $nombre    = $_POST["nombre"];
         $edificio  = $_POST["edificio"];              
         $capacidad = $_POST["capacidad"];
         $auditorio = $_POST["auditorio"];
         if ($auditorio == "auditorio") {
            $sql = "INSERT INTO auditorio (nombre, edificio, capacidad, auditorio)
            VALUES ('$nombre','$edificio','$capacidad','$auditorio')";
         }else if ($auditorio == "sala"){
            $sql = "INSERT INTO auditorio (nombre, edificio, capacidad, sala)
            VALUES ('$nombre','$edificio','$capacidad','$auditorio')";
         }

        if($conexion->query($sql)){                            
            echo "<br>";   
            echo "<div align=\"center\" class=\"alert alert-success\">Agregado con éxito</div><br>";                                
                //include 'inc/header_redireccionamiento.php';
            }else{
            echo "<br>";
            echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
            } 
        }   
}
?>