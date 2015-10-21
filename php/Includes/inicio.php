<?php
include_once 'Usuario.php';

if($_POST){

	
	$pass=$_POST['pass'];
	$email=$_POST['email'];

	
	$iniciar=iniciarSesion($email,$pass);

	echo $iniciar;
}

?>