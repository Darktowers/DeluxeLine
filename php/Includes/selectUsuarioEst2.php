<?php
session_start();
	include 'conexion.php';

	
		$usuario=$_SESSION['idUsuario'];

		$consulta="select * from reserva where fkIdUsuario='".$usuario."'and fkIdEstado=1";

		$resl=$mysql->query($consulta);
		if(!$resl){
			echo"fallo consulta";
		}
		$can=$resl->num_rows;
		$rs=$resl->fetch_assoc();
		
		if($_POST){
			$activo=$_POST['activo'];
			if($activo=="true"){
				$cambioEstRes="UPDATE reserva SET fkIdEstado = '2' WHERE idReserva = '".$rs['idReserva']."'";
				$cons=$mysql->query($cambioEstRes);
				$cambioEstRes2="UPDATE habitacion SET fkIdTipoEstado = '2' WHERE idHabitacion = '".$rs['fkIdHabitacion']."'";
				$cons2=$mysql->query($cambioEstRes2);
				if(!$cons || !$cons2){echo'Algo salio mal';}
				else{echo'true';}
			}
		}
		


?>