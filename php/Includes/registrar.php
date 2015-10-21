<?php
include_once 'Usuario.php';

if($_POST){

	$nombre=$_POST['nombre'];
	$documento=$_POST['cedula'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];

	
	$crear=crearUsuarioNuevo($nombre,$documento,$pass,$email);

	echo $crear;
}

?>