<?php
session_start();

	function crearUsuarioNuevo($nombre,$documento,$pass,$email){
		$pass2= md5($pass);

		include'conexion.php';

		$msg = validate($nombre,$documento,$pass2,$email);
		
			if ($msg=="true") {
				$consulta="insert into usuario values('','".$nombre."','".$documento."','".$pass2."','1','".$email."');";
				$Resl=$mysql->query($consulta);
				if($Resl){
					return "true";
				}
				
			}
			else if($msg!="true"){
				return $msg;
			}

			
		}
		function validate($nombre,$documento,$pass,$email) {

			if (!isset($nombre) || empty($nombre)) {
			return "El nombre es obligatorio!";
			}
			
			if (!isset($documento) || empty($documento)) {
				return "El numero de identificacion esta vacio, o no es valido!";
			} else if (!is_numeric($documento)) {
				return "El numero de identificacion debe ser numerico!";
			}
			
			if (!isset($email) || empty($email)) {
				return "El email es obligatorio!";
			} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				return "El email no tiene un formato valido!";
			} if(!filter_var($email, FILTER_SANITIZE_MAGIC_QUOTES)){
				return "El email no tiene un formato valido!";
			}
			
			if (!isset($pass) || empty($pass)) {
				return "La contraseña es obligatoria!";
			}
			
			if (emailExists($email)) {
				return "Ya existe un usuario con el email!";					
			}
			
			return "true";

		}
		function emailExists($email) {

			include'conexion.php';
			$query = "SELECT COUNT(1) AS rows FROM Usuario WHERE email = '".$email."'";
			$rs = $mysql->query($query);
			
			if (is_object($rs)) {
				if ($row = mysqli_fetch_array($rs)) {
					if ($row['rows'] > 0) {
						return true;
					}
				}
			} else {
				echo $rs."\n";
			}
		
			return false;
		}
	
	function iniciarSesion($email,$passI) {
		include 'conexion.php';
		$passwordI = md5($passI);
		echo $passwordI;
		$query = "SELECT * FROM Usuario WHERE email = '".$email."' AND password = '".$passwordI."'";
		$rs2 = $mysql->query($query);
		//Se valida que la consulta regrese un array de lo contrario, se toma como string
		//lo cual significa que ha ocurrido un error.
		
			$resl=$rs2->fetch_assoc();
			$row = $rs2->num_rows;
				
				if ($row == 1) {
					
						$_SESSION['activo']=true;
						$_SESSION['usuario']=$row['nombre'];
						$_SESSION['rol']=$row['fkIdRolUsuario'];
						return "true";
					}elseif($row < 1){
						return "Usuario o Contraseña Incorrectos";

					}
			
		 
	}