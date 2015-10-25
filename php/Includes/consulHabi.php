<?php


class consulHabi 
{
	function habitacionesPorNumeroDeHuespedes($NumeroHuespedes)
	{
		include_once "conexion.php";
		$queryTipoHabitacion="select * from tipoHabitacion where cantHuespedes >='".$NumeroHuespedes."';";
		$resultado=$mysql->query($queryTipoHabitacion);
		if(!$resultado){echo "fallo consulta 1";}


		while ($resl = $resultado->fetch_assoc()) {
			echo '<article class="Habitacion" value="'.$resl['nombreHabitacion'].'" id="'.$resl['idTipoHabitacion'].'" alt="'.$resl['precio'].'">
					<img src="img/habitaciones/'.$resl['nombreHabitacion'].'.jpg" alt="'.$resl['nombreHabitacion'].'"  class="Habitacion-img">
						<div class="tipoHabitacion"><h3>'.$resl['nombreHabitacion'].'</h3></div>
						<div class="precio">$'.$resl['precio'].'</div>
				</article>';
		}

	}
	function datosHabitacion($nombreHabitacion,$idHabitacion){
		include_once "conexion.php";
		$queryHabitacion="select * from tipoHabitacion where nombreHabitacion ='".$nombreHabitacion."';";
		$resultado=$mysql->query($queryHabitacion);
		if(!$resultado){echo "fallo consulta 2";}


		while ($resl = $resultado->fetch_assoc()) {
			echo '<article class="HabitacionEscritorio">
				<img src="img/habitaciones/'.$resl['nombreHabitacion'].'.jpg" alt="" class="Habitacion-img">
				<div class="tipoHabitacion"><h3>'.$resl['nombreHabitacion'].'</h3>
				<!--<div class="descuento"></div>-->
			</div>
			<div class="precio">$'.$resl['precio'].'</div>
			</article>
			<div class="Servicios-pri">
					<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/multy-user.png" alt=""></span>
						<span class="Number">'.$resl['cantHuespedes'].'</span>
						<p class="Text">Huespedes</p>
					</div>
					';
			$queryServiciosHabitacion="select * from habitacionServicio where fkIdHabitacion='".$idHabitacion."'";
			$resultado2=$mysql->query($queryServiciosHabitacion);

			if(!$resultado2){echo "fallo consulta 3";}

			while ($resl2 = $resultado2->fetch_assoc()) {

				$queryDatosServiciosHabitacion1="select * from servicio where idServicio='".$resl2['fkIdServicio']."' ";
				$resultado3=$mysql->query($queryDatosServiciosHabitacion1);
				if(!$resultado3){echo "fallo consulta 3";}

				while ($resl3 = $resultado3->fetch_assoc()) {
					echo'<div class="Servicio">
							<span class="Servicio-icono"><img src="'.$resl3['urlImgServicio'].'" alt=""></span>
							<span class="Number"></span>
							<p class="Text">'.$resl3['nombreServicio'].'</p>
						</div>
						';
				}
				
				
			}


		}
		$consultaDescripcionHabitacion="select descripcionHabitacion from tipoHabitacion where idTipoHabitacion='".$idHabitacion."'";
		$resultado4=$mysql->query($consultaDescripcionHabitacion);
				if(!$resultado4){echo "fallo consulta 4";}
				$resl4 = $resultado4->fetch_assoc();
				echo'</div>
				<article class="Descripcion">
				<h1>Descripcion Habitacion</h1>
				<p>'.$resl4['descripcionHabitacion'].'</p>
				</article>';

				
				// echo'<article class="Serviciosadd">
				// 		<h2>Servicios adicionales</h2>';

				// $queryServiciosHabitacion="select * from habitacionServicio where fkIdHabitacion='".$idHabitacion."'";
				// $resultado2=$mysql->query($queryServiciosHabitacion);

				// if(!$resultado2){echo "fallo consulta 3";}

				// while ($resl2 = $resultado2->fetch_assoc()) {

				// 		$queryDatosServiciosHabitacion2="select * from servicio where idServicio='".$resl2['fkIdServicio']."' and fkTipoServicio != 1";
				// 		$resultado5=$mysql->query($queryDatosServiciosHabitacion2);
				// 		if(!$resultado5){echo "fallo consulta 5";}

						
				// 		while ($resl5 = $resultado5->fetch_assoc()) {
				// 			echo'<div class="Servicio">
				// 					<span class="Servicio-icono"><img src="'.$resl5['urlImgServicio'].'" alt=""></span>
				// 					<p class="Text">'.$resl5['nombreServicio'].'</p>
				// 				</div>
				// 				';
				// 		}
						
						
				// 	}

				echo'<div class="Reservar">
						<button class="BuscarHabitacion-botonBuscar reservarH">Reservar ahora</button>
					</div>
				</article>';

				
				
	}
}

?>