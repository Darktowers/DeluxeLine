<?php


class consulHabi 
{
	function __construct($NumeroHuespedes, $FechaLLegada, $FechaSalida)
	{
		include_once "conexion.php";
		$queryTipoHabitacion="select * from tipoHabitacion where cantHuespedes >='".$NumeroHuespedes."';";
		$resultado=$mysql->query($queryTipoHabitacion);
		if(!$resultado){echo "fallo consulta1";}


		while ($resl = $resultado->fetch_assoc()) {
			echo '<article class="Habitacion"><img src="img/habitaciones/'.$resl['descripcion'].'.jpg" alt="" class="Habitacion-img"><div class="tipoHabitacion"><h3>'.$resl['descripcion'].'</h3></div><div class="precio">$'.$resl['precio'].'</div></article>';
		}

	}
}

?>