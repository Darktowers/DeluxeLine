<?php
function reservar($idUsuario,$idReservaHabi,$fechaLlegada,$fechaSalida,$precioFinal){
	
	include_once 'Reservacion.php';

	//Ingresar y Guardar Informacion
	//Tambien puede enviar los datos asi $reservacion->[nombre del campo] = [Valor a enviar]
	$reservacion = new Reservacion();
	$data = array("fkIdUsuario"=>$idUsuario,"fkIdHabitacion"=>$idReservaHabi,"precioFinal"=>$precioFinal,
			"fkIdEstado"=>1,"fechaInicioReserva"=>$fechaLlegada,"fechaFinReserva"=>$fechaSalida);

	$reservacion->setData($data);
	$msg = $reservacion->save();

	if ($msg) {
		echo $msg;
	} else {
		include 'conexion.php';
		$cambioEstado="UPDATE habitacion SET fkIdTipoEstado = 3 WHERE idHabitacion = '".$idReservaHabi."'";
		$conCE=$mysql->query($cambioEstado);
		if(!$conCE){
			echo"Algo Fallo !!!";
		}
		else{
			return "true";
		}
	}

	//Consultar Informacion
	//$ok = $reservacion->loadByID(1234);
	//if (!$ok) {
	//	echo "No se encontro nada\n";
	//} else {
	//	echo "ID: ".$reservacion->idReserva."\n";
	//}

}

