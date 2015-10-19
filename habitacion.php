
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscar Habitaciones</title>
	<link rel="stylesheet" href="js/lib/jquery-ui/jquery-ui.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,300,700italic,700' rel='stylesheet' type='text/css'>

</head>
<?php

if($_POST){
	include_once "php/includes/consulHabi.php";

	$NumeroHuespedes=$_POST['NumeroHuespedes'];
	$FechaLLegada=$_POST['FechaLLegada'];
	$FechaSalida=$_POST['FechaSalida'];
	$Habitacion=$_POST['habitacion'];
	$idHabitacion=$_POST['idHabitacion'];
	$precio=$_POST['precio'];

	$datoshabitacion=new consulHabi();

?>
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
<section class="BuscarHabitacion buscar">
		<div class="Cabecera">
			<div class="Cabecera-logo">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="cerrar"><span class="icon-cross"></span></div>
		</div>
		<div class="BuscarHabitacion-box ">
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
					<input type="text" name="FechaLLegada"placeholder="LLegada" class="llegada date">
					<input type="text" name="FechaSalida" placeholder="Salida" class="salida date">
				</div>
				<button class="BuscarHabitacion-botonBuscar">Buscar Habitaciones <span class="icon-search"></span></button>
			</form>
		</div>
	
	</section>
	<section class="BuscarHabitacion reservas">
		<div class="Cabecera">
			<div class="Cabecera-logo">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="cerrar"><span class="icon-cross"></span></div>
		</div>
		<div class="BuscarHabitacion-box pre">
			<form action="" class="BuscarHabitacion-boxForm">
				<div class="BuscarHabitacion-contenedorForm">
					<select name="NumeroHuespedes" id="" class="huespedes" >
						
						<option value="" selected><?php echo $NumeroHuespedes ?> huesped(es)</option>
						<option value="">1 huesped</option>
						<option value="">2 huespedes</option>
						<option value="">3 huespedes</option>
						<option value="">4 huespedes</option>
					</select>
				</div>
				<div class="BuscarHabitacion-contenedorFormFechas">
					<input type="text" name="FechaLLegada"placeholder="LLegada" class="llegada date" value="<?php echo $FechaLLegada ?>">
					<input type="text" name="FechaSalida" placeholder="Salida" class="salida date" value="<?php echo $FechaSalida ?>">
				</div>
				<div class="table">
					<table>
						<tr>
							<td>
        						Precio x 1 noche
      						</td>
							<td>$<?php echo $precio ?></td>
						</tr>
						<tr>
							<td>Total</td>
							<td>$800,000</td>
						</tr>
						
					</table>
				</div>
				<div class="BuscarHabitacion-botonBuscar reservarahora " style="display: inline-block;width: 50%;">Reservar</div>
			</form>
		</div>
		<div class="Registrarse">

				<div class="Registrarse-message reg" style="margin-top: 1em;">
					<span class="icon-newspaper"></span>
					<p>Registrate para poder reservar</p>

				</div>
				<div class="Registrarse-message ini">
					<span class="icon-user"></span>
					<p>Iniciar sesion</p>
				</div>
			<form action="php/registrarse.php" class="RegistrarseForm">
				
				<div class="Registrarse-formulario">
					<form action="registrar.php">
						<input type="text" name="nombre" placeholder="Nombre">
						<input type="text" name="cedula" placeholder="Cedula">
						<input type="email" name="email" placeholder="Correo Electronico">
						<input type="password" name="pass" placeholder="Contraseña">
						<button class="BuscarHabitacion-botonBuscar" style="width: 100%;
    padding: 1em;border:0;color:white;">Registrarse</button>
    					<p style="color:white;">Al registrarme, acepto las Condiciones del servicio, la Política de Privacidad y de Cookies</p>
					</form>
				</div>
				
			</form>
			<form action="php/iniciarsesion.php" class="IniciarForm">
				
				<div class="Registrarse-formulario">
					<form action="registrar.php">
						<input type="email" name="email" placeholder="Correo Electronico">
						<input type="password" name="pass" placeholder="Contraseña">
						<button class="BuscarHabitacion-botonBuscar" style="width: 100%;
    padding: 1em;border:0; color:white;">Iniciar Sesion</button>
					</form>
				</div>
				
			</form>
		</div>
	
	</section>
		<section class="Habitaciones hbb">
			<!-- <article class="HabitacionEscritorio">
				<img src="img/habitaciones/suite.jpg" alt="" class="Habitacion-img">
				<div class="tipoHabitacion"><h3></h3>
				<div class="descuento">20%</div>
			</div>
			<div class="precio">$800,000</div>
			</article> 
			<div class="Servicios-pri">
					<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/multy-user.png" alt=""></span>
						<span class="Number">5</span>
						<p class="Text">Huespedes</p>
					</div>
					<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/bed40.png" alt=""></span>
						<span class="Number">1</span>
						<p class="Text">Cama Doble</p>
					</div>
					<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/bathtub3.png" alt=""></span>
						<span class="Number">1</span>
						<p class="Text">Baño</p>
					</div>
					</div>
			<article class="Descripcion">
				<h1>Descripcion Habitacion</h1>
				<p>Acogedora y confortable es el alojamiento perfecto para personas en viaje de negocios, equipadas con los mejores servicios tecnológicos, conexión gratuita a internet de alta velocidad, minibar, caja fuerte, teléfono con linea directa desde la habitación TV LCD de pantalla plana. La habitación individual pone a su disposición una cama grande estilo francés y si lo desea es posible solicitar la habitación doble para uso individual.</p>
			</article>
			<article class="Serviciosadd">
				<h2>Servicios adicionales</h2>
				<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/telephone20.png" alt=""></span>
						<p class="Text">Telefono</p>
				</div>
				<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/minibar.png" alt=""></span>
						<p class="Text">Mini bar</p>
				</div>
				<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/cool6.png" alt=""></span>
						<p class="Text">Ventilador</p>
				</div>
				<div class="Servicio">
						<span class="Servicio-icono"><img src="img/icon/wifi74.png" alt=""></span>
						<p class="Text">Internet</p>
				</div>
				
				
		-->
			<?php
				$datoshabitacion->datosHabitacion($Habitacion,$idHabitacion);
			?>
	
		</section>
	
<?php
}
?>		
		

	
</body>
<script src="js/lib/jquery.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/lib/jquery-ui/jquery-ui.js"></script>
<script src="js/calendario.js"></script>
<script src="js/main.js"></script>
</html>