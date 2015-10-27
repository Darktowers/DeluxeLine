<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscar Habitaciones</title>
	<link rel="shortcut icon"
 href="favicon.ico"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,300,700italic,700' rel='stylesheet' type='text/css'>
<style>
	.Cabecera{
			background: black !important;
		}
</style>
</head>
</head>
<body>
	<?php
	if(@$_SESSION['activo']==true){

	echo'
		<header class="Cabecera">
		<div class="Cabecera-logo ">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="MenuEscritorio">
			<nav class="MenuEscritorio-nav">
				<li class="MenuEscritorio-item "><a href="" class="MenuEscritorio-link ">Principal</a></li>
				<!-- <li class="MenuEscritorio-item "><a href="" class="MenuEscritorio-link">Ofertas</a></li> -->
				<li class="MenuEscritorio-item Iactive"><a href="" class="MenuEscritorio-link">Buscar Habitacion</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">'.$_SESSION['usuario'].'</a></li>
			</nav>
		</div>
		<div class="Menumovil">
			<nav class="Menumovil-ul">
				<!-- <li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ofertas</a></li> -->
				<li class="Menumovil-item Iactive"><a href="" class="Menumovil-link">Buscar Habitacion</a></li>
				<li class="Menumovil-item "><a href="" class="Menumovil-link">'.$_SESSION['usuario'].'</a></li>
			</nav>
		</div>
		<div class="Menumovil-icono">
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
		</div>
		</header>

	';

	}
	else{

		echo'

		<header class="Cabecera">
		<div class="Cabecera-logo ">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="MenuEscritorio">
			<nav class="MenuEscritorio-nav">
				<li class="MenuEscritorio-item Iactive"><a href="" class="MenuEscritorio-link">Home</a></li>
				<!-- <li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Servicios</a></li> -->
				<li class="MenuEscritorio-item inis">Iniciar Sesion</li>
				<li class="MenuEscritorio-item regs">Registrarse</li>
			</nav>
		</div>
	
		<div class="Menumovil-icono">
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
		</div>
	</header>
		<div class="Menumovil">
		<div class="cerrar"><span class="icon-cross"></span></div>
			<nav class="Menumovil-ul">

				<li class="Menumovil-item Iactive"><a href="" class="Menumovil-link">Home</a></li>
				<!-- <li class="Menumovil-item"><a href="" class="Menumovil-link">Servicios</a></li> -->
				<li class="Menumovil-item inis lol">Iniciar Sesion</li>
				<li class="Menumovil-item regs lol">Registrarse</li>
			</nav>
		</div>

		';

	}

	?>
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

		echo"<form id='consulta' action='habitacion.php' method='post'>
				<input type='hidden' name='NumeroHuespedes' id='NumeroHuespedes' value='".$NumeroHuespedes."'>
				<input type='hidden' name='FechaLLegada' id='FechaLLegada' value='".$FechaLLegada."'>
				<input type='hidden' name='FechaSalida' id='FechaSalida' value='".$FechaSalida."'>
				<input type='hidden' name='habitacion' id='habitacion' value=''>
				<input type='hidden' name='idHabitacion' id='idHabitacion' value=''>
				<input type='hidden' name='precio' id='precio' value=''>
			</form>";


		$clase=new consulHabi();

		$clase->habitacionesPorNumeroDeHuespedes($NumeroHuespedes);

		}
		elseif(!$_POST){
			header('location:index.php');
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


<div class="Registra">

				<div class="Registrarse-formulario">
<div class="cerrar"><span class="icon-cross"></span></div>
				<p>Registrate</p>
				<div id="errorr" class="error">Error</div>
				<!-- <form > -->
						<input type="text" name="nombre" id="nombre" placeholder="Nombre">
						<input type="number" name="cedula" id="cedula" placeholder="Cedula">
						<input type="email" name="email" id="email" placeholder="Correo Electronico">
						<input type="password" name="pass" id="pass" placeholder="Contraseña">
						<label class="BuscarHabitacion-botonBuscar" id="registrar"  style="width: 100%;
    padding: 1em;border:0;color:white;background: #05466B;">Registrarse</label>
    					<p style="color:white;">Al registrarme, acepto las Condiciones del servicio, la Política de Privacidad y de Cookies</p>
				<!-- </form> -->
					<!-- <form action="registrar.php">
						<input type="text" name="nombre" placeholder="Nombre">
						<input type="text" name="cedula" placeholder="Cedula">
						<input type="email" name="email" placeholder="Correo Electronico">
						<input type="password" name="pass" placeholder="Contraseña">
						<button class="BuscarHabitacion-botonBuscar" style="width: 100%;
    padding: 1em;border:0;color:white;background: #05466B;">Registrarse</button>
    					<p >Al registrarme, acepto las Condiciones del servicio, la Política de Privacidad y de Cookies</p>
					</form> -->
				</div>
				
			</form>
			
		</div>
	<div class="Iniciar">
		
		
			
				<div class="Registrarse-formulario">
				<div class="cerrar"><span class="icon-cross"></span></div>
				<p>Inicia Sesion</p>	
				<div id="errori" class="error">Error</div>
					<!-- <form action="registrar.php"> -->
						<input type="email" name="email" id="emailInicio" placeholder="Correo Electronico">
						<input type="password" name="pass" id="passInicio" placeholder="Contraseña">
						<label class="BuscarHabitacion-botonBuscar" id="inicio" style="width: 100%;
    padding: 1em;border:0; color:white;background: #05466B;">Iniciar Sesion</label>
					<!-- </form> -->
					<!-- <form action="registrar.php">
						<input type="email" name="email" placeholder="Correo Electronico">
						<input type="password" name="pass" placeholder="Contraseña">
						<button class="BuscarHabitacion-botonBuscar" style="width: 100%;
    padding: 1em;border:0; color:white;background: #05466B;">Iniciar Sesion</button>
					</form> -->
				</div>
				
			
		</div>
	
</body>
<script src="js/lib/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/habitacionSelect.js"></script>
</html>
