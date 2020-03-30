<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_maestro.php';
?>
<br>   
<div class="container">
  <?php  
    echo 'Bienvenido '.$_SESSION["numero_control"];    
  ?>
  <br>
  <br>
  <div class="row">
    <div class="col">   
      <?php
        echo "<div align='center' class=\"alert alert-success\" ><a href='solicitar_sala_maestro_vista.php'>Solicitar</a></div>";
      ?>
    </div> 
    <div class="col">   
      <?php
        echo "<div align='center' class=\"alert alert-warning\" ><a href='actualizar_info_maestro_vista.php'>Actualizar Información</a></div>";
      ?>
    </div>
    <div class="col">   
      <?php
        echo "<div align='center' class=\"alert alert-danger\" ><a href='historial_exclusivo_de_cada_maestro_para_ver_vista2.php'>Mi Historial</a></div>";
      ?>
    </div> 
    <div class="col">   
      <?php
        echo "<div align='center' class=\"alert alert-danger\" ><a href='historial_exclusivo_de_cada_maestro_vista2.php'>Cambiar/Cancelar Solicitud</a></div>";
      ?>
    </div>         
  </div>     
</div>
<center><a href="salir.php"><input type="submit" value="Salir"></a></center> 

<?php
require_once "inc/footer.php"; 
?>