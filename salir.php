<?php 
	session_start();
	unset($_SESSION['sesion']);
	unset($_SESSION['numero_control']);
	session_destroy();

	header("Location: index.php");
	?>