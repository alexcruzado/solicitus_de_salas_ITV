<?php
if(isset($_POST['submit'])){

    $numero_control = $_POST["numero_control"];
    $contrasena = $_POST["contrasena"];
    
    $sql = "SELECT numero_control, contrasena
            FROM maestro
            WHERE numero_control = '$numero_control' AND contrasena = '$contrasena'";

    $resultSet = $conexion->query($sql);
    if ($resultSet->num_rows == 1){

    $row = $resultSet->fetch_assoc();
    $numero_control = $row["numero_control"];
    $contrasena = $row["contrasena"];	
        
    # Creamos la sesion del Usuario ya identificado y lo redireccionamos a una
    # pagina de bienvenida.

    $_SESSION["sesion"]     = true;
    $_SESSION["numero_control"]    = $numero_control;					
    
    header("Location: sesion_maestro_vista.php");

    }
}
?>