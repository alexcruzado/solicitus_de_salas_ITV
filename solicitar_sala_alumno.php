<?php
require_once 'db/database.php';
if(isset($_POST["submit"])){   
    $auditorio    = $_POST["auditorio"];           
    $fecha        = $_POST["fecha"];                       
    $hora         = $_POST["hora"]; 
    $rechazado = "rechazado";
    $pendiente = "pendiente";
    $busqueda="SELECT Auditorio_idAuditorio, fecha, hora FROM alumno_has_Auditorio WHERE Auditorio_idAuditorio ='$auditorio' AND fecha = '$fecha' AND hora = '$hora'";
    $rechzadadoConDispinibilidad = "SELECT Auditorio_idAuditorio, fecha, hora, estado FROM alumno_has_Auditorio WHERE Auditorio_idAuditorio ='$auditorio' AND fecha = '$fecha' AND hora = '$hora' AND estado = '$rechazado'";
    $conEstadoPendiente = "SELECT Auditorio_idAuditorio, fecha, hora, estado FROM alumno_has_Auditorio WHERE Auditorio_idAuditorio ='$auditorio' AND fecha = '$fecha' AND hora = '$hora' AND estado = '$pendiente'";    
    $resultSet = $conexion->query($busqueda);   
    $resultSet2 = $conexion->query($rechzadadoConDispinibilidad);
    $resultSet3 = $conexion->query($conEstadoPendiente);
    $saberDiaDelaSemanaDeLaFechaSeleccionada = date("w", strtotime($fecha)); 
    $consultaBuscarAuditorio = "SELECT nombre from auditorio WHERE idAuditorio ='$auditorio'";
            $resultadoConsultaBuscarAuditorio = $conexion->query($consultaBuscarAuditorio);   
            $row = $resultadoConsultaBuscarAuditorio->fetch_assoc();  
    
    if($resultSet3->num_rows>=1){
        echo "<br>";
        echo "<div align=\"center\" class=\"alert alert-warning\">La sala no está disponible en el horario solicitado.</div><br>";       
        
    }else if($resultSet2->num_rows>=1){
        $idAlumno     = $_POST["idAlumno"];
        $auditorio    = $_POST["auditorio"];  
        $idSecretario = $_POST["idSecretario"];        
        $fecha        = $_POST["fecha"];                       
        $hora         = $_POST["hora"];
        date_default_timezone_set('America/Mexico_City');
        $fecha_actual = date("Y-m-d");
        $horaComparar = date("H:i:sP");     
        if ($fecha>=$fecha_actual && $hora>$horaComparar && $saberDiaDelaSemanaDeLaFechaSeleccionada>0) {
        $sql = "INSERT INTO alumno_has_auditorio (Alumno_idAlumno, Auditorio_idAuditorio, Secretario_idSecretario, fecha, hora,estado)
                VALUES ('$idAlumno','$auditorio','$idSecretario','$fecha','$hora','pendiente')";

        if($conexion->query($sql)){                            
            echo "<br>";   
            echo "<div align=\"center\" class=\"alert alert-success\"> Solicitud agregada con exito, espera una confirmacion </div><br>";                                            
                //require_once 'inc/header_redireccionamiento.php';
            }else{
            echo "<br>";
            echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
            echo "Lugar: ".$row['nombre'];
            echo "<br>";
            echo "Fecha: ".$fecha;
            echo "<br>";
            echo "Hora: ".$hora;
            echo mysqli_error($conexion);
            } 
        }else if($fecha>$fecha_actual && $saberDiaDelaSemanaDeLaFechaSeleccionada>0 && $saberDiaDelaSemanaDeLaFechaSeleccionada<6){
            $sql = "INSERT INTO alumno_has_auditorio (Alumno_idAlumno, Auditorio_idAuditorio, Secretario_idSecretario, fecha, hora,estado)
                VALUES ('$idAlumno','$auditorio','$idSecretario','$fecha','$hora','pendiente')";
            if($conexion->query($sql)){                            
                echo "<br>";   
                echo "<div align=\"center\" class=\"alert alert-success\">Solicitud agregada con éxito, espera una confirmación</div><br>";                                
                    //require_once 'inc/header_redireccionamiento.php';               
            }else{
                echo "<br>";
                echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
                echo "Los datos ingreados son: ";
                echo "Lugar: ".$auditorio;
                echo "Fecha: ".$fecha;
                echo "Hora: ".$hora;
                echo mysqli_error($conexion);
                } 
        }else{
            echo "<br>";  
            echo "<div align=\"center\" class=\"alert alert-danger\">ERROR: Ingresa una hora o fecha válida.</div><br>"; 
        }

    }else if($resultSet->num_rows == 0 ){
        $idAlumno     = $_POST["idAlumno"];
        $auditorio    = $_POST["auditorio"];  
        $idSecretario = $_POST["idSecretario"];        
        $fecha        = $_POST["fecha"];                       
        $hora         = $_POST["hora"];
        date_default_timezone_set('America/Mexico_City');
        $fecha_actual = date("Y-m-d");
        $horaComparar = date("H:i:sP");     

        if ($fecha>=$fecha_actual && $hora>=$horaComparar && $saberDiaDelaSemanaDeLaFechaSeleccionada>0 && $saberDiaDelaSemanaDeLaFechaSeleccionada<6) {
        $sql = "INSERT INTO alumno_has_auditorio (Alumno_idAlumno, Auditorio_idAuditorio, Secretario_idSecretario, fecha, hora,estado)
                VALUES ('$idAlumno','$auditorio','$idSecretario','$fecha','$hora','pendiente')";

        if($conexion->query($sql)){                            
            echo "<br>";   
            echo "<div align=\"center\" class=\"alert alert-success\">Solicitud agregada con éxito, espera una confirmación.</div><br>";                                
                //require_once 'inc/header_redireccionamiento.php';               
            }else{
            echo "<br>";
            echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
            echo "Lugar: ".$auditorio;
            echo "Fecha: ".$fecha;
            echo "Hora: ".$hora;
            echo mysqli_error($conexion);
            } 

        }else if($fecha>$fecha_actual && $saberDiaDelaSemanaDeLaFechaSeleccionada>0 && $saberDiaDelaSemanaDeLaFechaSeleccionada<6){
            $sql = "INSERT INTO alumno_has_auditorio (Alumno_idAlumno, Auditorio_idAuditorio, Secretario_idSecretario, fecha, hora,estado)
                VALUES ('$idAlumno','$auditorio','$idSecretario','$fecha','$hora','pendiente')";
            if($conexion->query($sql)){                            
                echo "<br>";   
                echo "<div align=\"center\" class=\"alert alert-success\">Solicitud agregada con éxito, espera una confirmación.</div><br>";                                
                    //require_once 'inc/header_redireccionamiento.php';               
            }else{
                echo "<br>";
                echo "<div align=\"center\" class=\"alert alert-danger\">Error</div><br>"; 
                echo "Lugar: ".$auditorio;
                echo "Fecha: ".$fecha;
                echo "Hora: ".$hora;
                echo mysqli_error($conexion);
                } 
        }else{
            echo "<br>";  
            echo "<div align=\"center\" class=\"alert alert-danger\">ERROR: Ingresa una hora o fecha válida</div><br>";                              
            echo "Datos ingresados: ";       
            echo "<br>";
            echo "Lugar: ".$row['nombre'];
            echo "<br>";
            echo "Fecha: ".$fecha;
            echo "<br>";
            echo "Hora: ".$hora;
        }
    }           
}
?>