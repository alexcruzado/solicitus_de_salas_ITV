<?php
require_once 'db/database.php';
require_once 'comprobar_maestro.php';

if(isset($_POST["submit"])){
$idSolicitud        = $_POST["idSolicitud"];
$idMaestro          = $_POST["idMaestro"];     
$idSecretario       = $_POST["idSecretario"];
$auditorio          = $_POST["auditorio"];
$fecha              = $_POST["fecha"];
$hora               = $_POST["hora"];

$busquedaParaActualizar ="SELECT idSolicitud FROM alumno_has_auditorio WHERE idSolicitud ='$idSolicitud'";

$rechazado = "rechazado";
$pendiente = "pendiente";
$busqueda="SELECT idSolicitud,Auditorio_idAuditorio, fecha, hora FROM alumno_has_Auditorio WHERE Auditorio_idAuditorio ='$auditorio' AND fecha = '$fecha' AND hora = '$hora'";
$rechzadadoConDispinibilidad = "SELECT idSolicitud,Auditorio_idAuditorio, fecha, hora, estado FROM alumno_has_Auditorio WHERE Auditorio_idAuditorio ='$auditorio' AND fecha = '$fecha' AND hora = '$hora' AND estado = '$rechazado'";
$conEstadoPendiente = "SELECT idSolicitud,Auditorio_idAuditorio, fecha, hora, estado FROM alumno_has_Auditorio WHERE Auditorio_idAuditorio ='$auditorio' AND fecha = '$fecha' AND hora = '$hora' AND estado = '$pendiente'";    
$resultSet = $conexion->query($busqueda);   
$resultSet2 = $conexion->query($rechzadadoConDispinibilidad);
$resultSet3 = $conexion->query($conEstadoPendiente);
$resultSet4 = $conexion->query($busquedaParaActualizar);
$consultaBuscarAuditorio = "SELECT nombre from auditorio WHERE idAuditorio ='$auditorio'";
        $resultadoConsultaBuscarAuditorio = $conexion->query($consultaBuscarAuditorio);   
        $row = $resultadoConsultaBuscarAuditorio->fetch_assoc(); 
if($resultSet3->num_rows>=1){
    echo "<br>";
    echo "<div align=\"center\" class=\"alert alert-warning\">La sala no está disponible en el horario solicitado.</div><br>";       
    
}else if($resultSet2->num_rows>=1){       
    $fecha        = $_POST["fecha"];                       
    $hora         = $_POST["hora"];
    date_default_timezone_set('America/Mexico_City');
    $fecha_actual = date("Y-m-d");
    $horaComparar = date("H:i:sP");     

    if ($fecha>=$fecha_actual && $hora>$horaComparar && $saberDiaDelaSemanaDeLaFechaSeleccionada>0 && $saberDiaDelaSemanaDeLaFechaSeleccionada<6) {
        $actualizar = "UPDATE alumno_has_auditorio SET    
                                Auditorio_idAuditorio = '$auditorio',
                                fecha = '$fecha',
                                hora = '$hora',
                                estado = 'pendiente' WHERE idSolicitud = '$idSolicitud'";

    if($conexion->query($actualizar)){                            
        echo "<br>";   
        echo "<div align=\"center\" class=\"alert alert-success\">Solicitud agregada con exito, espera una confirmacion.</div><br>";                                            
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
        $actualizar = "UPDATE alumno_has_auditorio SET    
                                Auditorio_idAuditorio = '$auditorio',
                                fecha = '$fecha',
                                hora = '$hora', 
                                estado = 'pendiente' WHERE idSolicitud = '$idSolicitud'";
        if($conexion->query($actualizar)){                            
            echo "<br>";   
            echo "<div align=\"center\" class=\"alert alert-success\"> Solicitud agregada con éxito, espera una confirmación.</div><br>";                                
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
    }else{
        echo "<br>";  
        echo "<div align=\"center\" class=\"alert alert-danger\">ERROR: Ingresa una fecha u hora válida</div><br>"; 
    }

}else if($resultSet->num_rows == 0 ){          
    $fecha        = $_POST["fecha"];                       
    $hora         = $_POST["hora"];
    date_default_timezone_set('America/Mexico_City');
    $fecha_actual = date("Y-m-d");
    $horaComparar = date("H:i:sP");     

    if ($fecha>=$fecha_actual && $hora>=$horaComparar && $saberDiaDelaSemanaDeLaFechaSeleccionada>0 && $saberDiaDelaSemanaDeLaFechaSeleccionada<6) {
        $actualizar = "UPDATE alumno_has_auditorio SET    
                            Auditorio_idAuditorio = '$auditorio',
                            fecha = '$fecha',
                            hora = '$hora',
                            estado = 'pendiente' WHERE idSolicitud = '$idSolicitud'";
    if($conexion->query($actualizar)){                            
        echo "<br>";   
        echo "<div align=\"center\" class=\"alert alert-success\"> Solicitud agregada con éxito, espera una confirmación.</div><br>";                                
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
        $actualizar = "UPDATE alumno_has_auditorio SET    
                    Auditorio_idAuditorio = '$auditorio',
                    fecha = '$fecha',
                    hora = '$hora', 
                    estado = 'pendiente' WHERE idSolicitud = '$idSolicitud'";
        if($conexion->query($actualizar)){                            
            echo "<br>";   
            echo "<div align=\"center\" class=\"alert alert-success\"> Solicitud agregada con éxito, espera una confirmación.</div><br>";                                
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
    }else{
        echo "<br>";  
        echo "<div align=\"center\" class=\"alert alert-danger\">ERROR: Ingresa una fecha u hora válida</div><br>";             
        echo "Lugar: ".$row['nombre'];
        echo "<br>";
        echo "Fecha: ".$fecha; 
        echo "<br>";
        echo "Hora: ".$hora;
    }
}                   
}

?>