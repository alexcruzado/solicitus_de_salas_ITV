<?php
require_once 'inc/header.php';
require_once 'inc/banner.php';
require_once 'db/database.php';
require_once 'comprobar_secretario.php';
require_once 'alta_sala.php';
?>

<br>
    <div class = "container">    
        <div class = "row justify-content-center">        
            <div class="col col-md-9">
            <a href="catalogo_salas_vista.php" class="btn btn-lg btn-block btn btn-warning" style='width:200px; height:25px; FONT-SIZE: 12px;'>Regresar</a>  
                <div class="card">                
                    <div class ="card-body">
                        <h2 class="h2"><center>Registrar Sala o Auditorio</center></h2>
                        <form method="POST">                            
                            <div class="form-group">

                                <div class="form-group">
                                <label for="nombre">
                                Nombre de la Sala o Auditorio:
                                </label>
                                <input type="text" name="nombre" 
                                onkeypress="return tabular(event,this)"
                                onblur="salirInput(this)" onfocus="entrarInput(this)" 
                                pattern="^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,35})$" required placeholder="Ingresa el nombre de la Sala o Auditorio (solo letras, máximo 35 caracteres)" 
                                class="form-control"
                                >
                                </div>

                                <label for="edificio">
                                Edificio:
                                </label>
                                <select name="edificio">
                                    <option value="" disabled selected hidden>Selecciona un Edificio</option>
                                    <option value="N">N</option>
                                    <option value="M">M</option>
                                    <option value="O">O</option>
                                    <option value="C">c</option>
                                    <option value="B">B</option>
                                    <option value="E">E</option>
                                    <option value="Q">Q</option>
                                    <option value="S">S</option>
                                    <option value="R">R</option>
                                    <option value="K">K</option> 
                                    <option value="A">A</option>
                                    <option value="H">H</option>
                                    <option value="F">F</option>
                                    <option value="J">J</option>
                                    <option value="L">L</option>
                                    <option value="T">T</option>
                                    <option value="D0">D0</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="V">V</option>
                                    <option value="W">W</option>
                                    <option value="U">U</option>
                                    <option value="X">X</option>
                                    <option value="P">P</option>
                                    <option value="G">G</option>                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="capacidad">
                                Capacidad:
                                </label>
                                <input type="text" name="capacidad" 
                                onkeypress="return tabular(event,this)"
                                onblur="salirInput(this)" onfocus="entrarInput(this)" 
                                pattern="[1-9]\d{0,}" required placeholder="Ingresa la capacidad de la Sala o Auditorio" 
                                class="form-control"
                                >
                            </div>
                                                                                                     

                            <div class="form-group">
                                <label for="auditorio">
                                Tipo de Sala o Auditorio:
                                </label>
                                <select name="auditorio">
                                    <option value="" disabled selected hidden>Selecciona el Tipo</option>
                                    <option value="auditorio">Auditorio</option>
                                    <option value="sala">Sala</option>
                                </select>
                            </div>
                                                                                
                            <input type="submit" name="submit" value="Registrar" class="btn btn-lg btn-block btn-success">                                                  
                        </form>
	          			</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php
require_once "inc/footer.php"; 
?>