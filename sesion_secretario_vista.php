<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
?>
<div class="container">    
  <nav class="navbar navbar-expand-lg navbar-warning bg-dark">
      <a class="navbar-brand" href="">Secretario</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">        
          <li class="nav-item active">
            <a class="nav-link" href="catalogo_salas_vista.php">Ver Salas y Auditorios<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ver Maestros o Alumnos Registrados
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="catalogo_registro_alumnos_vista.php">Alumnos</a>
              <a class="dropdown-item" href="catalogo_registro_maestros_vista.php">Maestros</a>          
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Autorizar Solicitudes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="autorizar_solicitudes_alumnos_vista2.php">Solicitudes de Alumnos</a>
              <a class="dropdown-item" href="autorizar_solicitudes_maestros_vista2.php">Solicitudes de Maestros</a>          
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Historial
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="historial_alumnos_vista2.php">Historial de Alumnos</a>
              <a class="dropdown-item" href="historial_maestros_vista2.php">Historial de Maestros</a>          
            </div>
          </li>        
        </ul>
      </div>
</nav>  
</div>
<br>
<center><a href="salir.php"><input type="submit" value="Salir"></a></center> 

<?php
require_once "inc/footer.php"; 
?>