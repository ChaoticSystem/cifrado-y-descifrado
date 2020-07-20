<?php

session_start();

$password = '1234567890123';

$passlenght = strlen($password);

if (!isset($_SESSION['variable_sesion']) && $_SESSION['variable_sesion'] != $password){
	
	header("Location: access.php");
}

if (isset($_POST['x'])){
	unset($_SESSION['variable_sesion']);
	session_destroy();
	
}

echo '<!DOCTYPE html>
			<html>
			<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>DATOS FULL</title>
			</head>
			<body>		
			<a  href=leer2.php value="FULL">Leer</a>
			<form id=f method="POST">
			<input id=x type=submit name=x value="Salir">
			<br><br>
			</form>
			</body>
			</html>';		
?>NDFVbTIzUzFWZkh4MXZ0YU9kMUU5UT09OjoPHrr78q5PaRK7XIEUs8Nt

