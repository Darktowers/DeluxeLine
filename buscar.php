
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscar Habitaciones</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,300,700italic,700' rel='stylesheet' type='text/css'>

</head>
</head>
<body>
	<header class="Cabecera cab">
	<div class="Cabecera-logo escritorio">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="MenuEscritorio">
			<nav class="MenuEscritorio-nav">
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Home</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Beneficios</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Calidad</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ubicacion</a></li>
			</nav>
		</div>
	<input type="text" placeholder="Buscar" class="Buscar-movil">
		
		<div class="Menumovil">
			<nav class="Menumovil-ul">
				<li class="Menumovil-item"><a href="" class="Menumovil-link">Home</a></li>
				<li class="Menumovil-item"><a href="" class="Menumovil-link">Beneficios</a></li>
				<li class="Menumovil-item"><a href="" class="Menumovil-link">Calidad</a></li>
				<li class="Menumovil-item"><a href="" class="Menumovil-link">Ubicacion</a></li>
			</nav>

		</div>
		<div class="Menumovil-icono">
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
		</div>
	</header>
<section class="BuscarHabitacion">
		<div class="Cabecera">
			<div class="Cabecera-logo">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="cerrar"><span class="icon-cross"></span></div>
		</div>
		<div class="BuscarHabitacion-box">
			<form action="" class="BuscarHabitacion-boxForm">
				<div class="BuscarHabitacion-contenedorForm">
					<select name="NumeroHuespedes" id="" class="huespedes">
						
						<option value="" selected>1 huesped</option>
						<option value="">2 huespedes</option>
						<option value="">3 huespedes</option>
						<option value="">4 huespedes</option>
					</select>
				</div>
				<div class="BuscarHabitacion-contenedorFormFechas">
					<input type="text" name="FechaLLegada"placeholder="LLegada" class="llegada">
					<input type="text" name="FechaSalida" placeholder="Salida" class="salida">
				</div>
				<button class="BuscarHabitacion-botonBuscar">Buscar Habitaciones <span class="icon-search"></span></button>
			</form>
		</div>
	</section>
	<section class="Habitaciones">
	<?php 

		if($_POST){

		include_once "php/includes/consulHabi.php";

		$NumeroHuespedes=$_POST['NumeroHuespedes'];
		$FechaLLegada=$_POST['FechaLLegada'];
		$FechaSalida=$_POST['FechaSalida'];


		new consulHabi ($NumeroHuespedes,$FechaLLegada,$FechaSalida);

		}

	?>
		<!--
			<article class="Habitacion">
				<img src="img/habitaciones/suite.jpg" alt="" class="Habitacion-img">
				<div class="tipoHabitacion"><h3>Suit</h3></div>
				<div class="precio">$800,000</div>
				<div class="descuento">20%</div>
			</article>
				<article class="Habitacion">
				<img src="img/habitaciones/superior_room.jpg" alt="" class="Habitacion-img">
				<div class="tipoHabitacion"><h3>Superior Room</h3></div>
				<div class="precio">$1´000,000</div>
				
			</article>
				<article class="Habitacion">
				<img src="img/habitaciones/junior_suite.jpg" alt="" class="Habitacion-img">
				<div class="tipoHabitacion"><h3>Junior Suit</h3></div>
				<div class="precio">$900.000</div>
				<div class="descuento">15%</div>
			</article>
				<article class="Habitacion">
				<img src="img/habitaciones/comfort-room.jpg" alt="" class="Habitacion-img">
				<div class="tipoHabitacion"><h3>Comfort Room</h3></div>
				<div class="precio">$1'200.000</div>
				<div class="descuento">30%</div>
			</article>-->
		</section>



	
</body>
<script src="js/lib/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</html>