<?php
session_start();
if(@$_SESSION['activo']!=true){

	echo "false";

}
elseif(@$_SESSION['activo']==true){

	if($_POST){
		include 'conexion.php';
		include 'generarReservacion.php';

		$usuario=$_SESSION['usuario'];

		$consulta="select * from usuario where nombre='".$usuario."'";

		$resl=$mysql->query($consulta);
		if(!$resl){
			echo"fallo consulta";
		}
		$rs=$resl->fetch_assoc();

		$idUsuario=$rs['idUsuario'];
		$idHabitacion=$_POST['tipoHabitacion'];
		$fechaLlegada=$_POST['fechaLleagada'];
		$fechaSalida=$_POST['fechaSalida'];
		$precioFinal=$_POST['precioHabitacion'];

		$consultaDisponHabi1="SELECT * FROM habitacion WHERE fkIdTipoHabitacion='".$idHabitacion."'";
		$conDH=$mysql->query($consultaDisponHabi1);
		$cantDH=$conDH->num_rows;

		if($cantDH>0 && $conDH){

			$consultaDisponHabi2="SELECT idHabitacion FROM habitacion WHERE fkIdTipoHabitacion='".$idHabitacion."'and fkIdTipoEstado=1";
			$conDH2=$mysql->query($consultaDisponHabi2);
			$resl2=$conDH2->fetch_assoc();
			if(!$conDH2){
				echo"algo fallo!!!";
			}else{
				
			$idReservaHabi=$resl2['idHabitacion'];
			}
		}
		else{
			echo"algo fallo !!!";
		}

		$reservarReturn=reservar($idUsuario,$idReservaHabi,$fechaLlegada,$fechaSalida,$precioFinal);

		if($reservarReturn=="true"){

			echo "true";

		}	

	}	

}
?>