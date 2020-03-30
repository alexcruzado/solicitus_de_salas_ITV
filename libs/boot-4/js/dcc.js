function validarCampos(){

	// Vamos a validar el Numero de Control mediante un expresion regular
	//forma lo toma de clase 23 y campo es el nombre que tiene
	var nocontrol = document.forms["forma"]["nocontrol"].value;
	var nombre = document.forms["forma"]["nombre"].value;
	var apellidos = document.forms["forma"]["apellidos"].value;
	var edad = document.forms["forma"]["edad"].value;
	var telefono=document.forms["forma"]["telefono"].value;
	var correo=document.forms["forma"]["telefono"].value;

	var nombrevalido =  /^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,32})$/;
	var apellidosvalido =  /^([A-Za-z ÑÁÉÍÓÚñáéíóú]{2,64})$/;
	var nocontrolvalido = /^([E][0-9]{8,8})$/;
	var telefonovalido = /^([0-9]{10,10})$/;
	var correovalido= 	/^([A-Za-z][@][A-Za-z][.][A-Za-z]{5,50})$/;



	//comprobar si hay campos vacios y enviar un mensaje si hay alguno
	if(nocontrol=="" || nombre=="" || apellidos=="" || edad=="" || telefono==""){

 		document.getElementById("resultado").innerHTML = "No puede haber campos vacios";
		return false;

	}

	// If x is Not a Number or less than one or greater than 10
	if (isNaN(edad) || edad < 17 || edad > 65) {
 		document.getElementById("resultado").innerHTML = "La Edad no es Valida";
		return false;
	}

	if (!nocontrolvalido.test(nocontrol)){
 		document.getElementById("resultado").innerHTML = "El No. de Control no es Valido";
		return false;
	}

	if (!nombrevalido.test(nombre)){
 		document.getElementById("resultado").innerHTML = "El nombre no es Valido";
		return false;
	}

	if (!apellidosvalido.test(apellidos)){
 		document.getElementById("resultado").innerHTML = "El apellido no es Valido";
		return false;
	}
	if(!telefonovalido.test(telefono)){
		document.getElementById("resultado").innerHTML= "telefono invalido";
		return false;
	}
	if(isNaN(cedula))
	{
		document.getElementById("resultado").innerHTML="cedula invalida"
		return false;
	}

    return true;
}

function salirInput(elemento){
	elemento.style.background = '#fff';
	elemento.style.color = 'black';
	elemento.style.fontWeight = 'normal'; 
	elemento.style.fontSize = 'initial';
}

function entrarInput(elemento){
	elemento.style.background = 'white';
	elemento.style.color = 'black';
	elemento.style.fontWeight = 'bold'; 
	elemento.style.fontSize = '15px'
}

function tabular(e,obj) { 
	tecla=(document.all) ? e.keyCode : e.which; 
	if(tecla!=13) return; 
	frm=obj.form; 
	for(i=0;i<frm.elements.length;i++) 
	if(frm.elements[i]==obj) { 
		if (i==frm.elements.length-1) i=-1; 
		break } 
	frm.elements[i+1].focus(); 
	return false; 
}

