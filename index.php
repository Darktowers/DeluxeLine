<?php
session_start();
?>
<!DOCTYPE html>
<head>
<html lang="en">
	<meta charset="UTF-8">
	<link rel="shortcut icon"
 href="favicon.ico" />
	<title>DeluxeLine Hotel</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="js/lib/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,300,700italic,700' rel='stylesheet' type='text/css'>
<style>
	#map {
width: 100%;
height: 500px;
border: 1px solid #000;
box-sizing: border-box;
border-top: 1em solid #058CDA;
}
.img-hotel{
height:  400px;	
}
</style>
</head>
<body>
	<?php
	if(@$_SESSION['activo']==true){

	echo'
		<header class="Cabecera">

		<div class="Cabecera-logo ">
		<a href="index.php">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
			</a>
		</div>
		<div class="MenuEscritorio">
			<nav class="MenuEscritorio-nav">
				<li class="MenuEscritorio-item "><a href="usuario/index.php" class="MenuEscritorio-link ">Principal</a></li>
				<!-- <li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ofertas</a></li> -->
				<li class="MenuEscritorio-item Iactive"><a href="" class="MenuEscritorio-link">Buscar Habitacion</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">'.$_SESSION['usuario'].'</a></li>
			</nav>
		</div>
		
		<div class="Menumovil-icono">
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
		</div>
		</header>
<div class="Menumovil">
			<nav class="Menumovil-ul">
				<!-- <li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ofertas</a></li> -->
				<li class="Menumovil-item Iactive"><a href="" class="Menumovil-link">Buscar Habitacion</a></li>
				<li class="Menumovil-item "><a href="" class="Menumovil-link">'.$_SESSION['usuario'].'</a></li>
			</nav>
		</div>
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
	
	<div class="Contenido-slider">
		<div class="owl-carousel">
		    <div class="item"><img src="img/deluxeline-pool.jpg" alt=""></div>
		    <div class="item"><img src="img/deluxeline-pool2.jpg" alt=""></div>
		    <div class="item"><img src="img/deluxeline-playa.jpg" alt=""></div>
		 
		</div>
		<section class="HotelFrase">
			<h1>Disfruta del hotel de tus sueños</h1>
			<div class="Buscar-movil">
				<input id="BuscarM" type="text" class="Buscar-movilInput" placeholder="Buscar Habitaciones">
				<div class="Buscar">
					<span class="icon-search"></span>
				</div>
			</div>
			<div class="BuscarEscritorio" id="BuscarEscritorio">
			<form action="buscar.php" method="post" class="BuscarEscritorio-form">
				<div class="BuscarEscritorio-contenedorForm">
					
		
					<input type="text" name="FechaLLegada" id="FechaLLegada-1" placeholder="LLegada" class="llegada date" required>
					<input id="hideKeyboard" style="position: absolute; left: 0px; top: -20px; z-index: -1;opacity: 0;" type="text" name="hideKeyboard" readonly="readonly" />
					<input type="text" name="FechaSalida" id="FechaSalida-1" placeholder="Salida" class="salida dateFin" required>
					<select name="NumeroHuespedes" id="" class="huespedes">
						
						<option value="1" selected>1 huesped</option>
						<option value="2">2 huespedes</option>
						<option value="3">3 huespedes</option>
						<option value="4">4 huespedes</option>
					</select>
					<button type="submit" class="BuscarEscritorio-botonBuscar">Buscar Habitaciones</button>
				</div>
				
			</form>
		</div>
		</section>
	</div>
		
	<section class="BuscarHabitacion buscar">
		<div class="Cabecera">
			<div class="Cabecera-logo">
			<img class="Cabecera-logoImg" src="img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="cerrar"><span class="icon-cross"></span></div>
		</div>
		<div class="BuscarHabitacion-box">
			<form action="buscar.php" method="post" class="BuscarHabitacion-boxForm">
				<div class="BuscarHabitacion-contenedorForm">
					<select name="NumeroHuespedes" id="" class="huespedes">
						
						<option value="1" selected>1 huesped</option>
						<option value="2">2 huespedes</option>
						<option value="3">3 huespedes</option>
						<option value="4">4 huespedes</option>
					</select>
				</div>
				<div class="BuscarHabitacion-contenedorFormFechas">
					<input type="text" name="FechaLLegada" id="FechaLLegada-2" placeholder="LLegada" class="llegada lol" required>
					<input type="text" name="FechaSalida" id="FechaSalida-2" placeholder="Salida" class="salida lolFin" required>
				</div>
				<button type="submit" class="BuscarHabitacion-botonBuscar">Buscar Habitaciones <span class="icon-search"></span></button>
			</form>
		</div>
	</section>
	
	<div class="Hotel">
		<div class="wrap">
			<section class="Hotel-calidad">
				<h2>Ofrecemos el mejor servicio al cliente</h2>
				<p>Usa nuestra platoforma para disfrutar de un servicio personalizado</p>	
				<button>Reservar ahora</button>
			</section>
			<section class="Hotel-calidadSlider">
				<div class="owl-carousel-1">
				    <div class="item" style="width:488px"><img src="img/deluxeline-pool.jpg" alt=""></div>
				    <div class="item" style="width:488px"><img src="img/deluxeline-pool2.jpg" alt=""></div>
				    <div class="item" style="width:488px"><img src="img/deluxeline-playa.jpg" alt=""></div>
				</div>
			</section>
		</div>

	</div>
	<section class="Serviciosm">
				<h2>Disfruta Nuestros Servicios</h2>
				<article class="serv">1</article>
				<article class="serv">2</article>
				<article class="serv">3</article>
				<article class="serv">4</article>
				<article class="serv">5</article>
		<div class="img-hotel" data-parallax="scroll" data-bleed="10"  data-z-index="3" data-image-src="./img/deluxeline-pool2.jpg">   
        </div>	</section>
	<section class="historia">
		<article>
				<h2>Tenemos mas de 25 años de historia</h2>
		</article>

	</section>

  <section class="Ubicacion">
		    <div class="Contactanos">
				<h3>Contactanos</h3>
				<p class="correo">info@deluxehotelco.com</p>
				<p class="tel">+57 3057129100</p>
				
				<div class="redes">
					<span class="icon-facebook"></span>
					<span class="icon-instagram"></span>
					<span class="icon-twitter"></span>
				</div>
			</div>
			<section id="map">

			</section>
	</section>
	<footer class="hotelfooter">
		<nav class="Hotelfooter-Links" style="    margin-right: 2em;">
			<li class="Hotelfooter-LinksItem"><a href="">Home</a></li>
			<li class="Hotelfooter-LinksItem"><a href="">Beneficios</a></li>
			<li class="Hotelfooter-LinksItem"><a href="">Calidad</a></li>
			<li class="Hotelfooter-LinksItem"><a href="">Ubicacion</a></li>
		</nav>
		<nav class="Hotelfooter-Links" style="    position: relative;
    top: -27px;">
			<li class="Hotelfooter-LinksItem"><a href="">Contactenos</a></li>
			<li class="Hotelfooter-LinksItem"><a href="">Sobre DeluxeLine</a></li>
			<li class="Hotelfooter-LinksItem"><a href="">Site Map</a></li>
			<li class="Hotelfooter-LinksItem"><a href=""></a></li>
		</nav>
		
	</footer>
	<div class="HotelLove">Code with <span class="icon-heart"></span></div>



	
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
    padding: 1em;
    border: 0;
    color: white;
    background: #05466B;
    display: block;
    box-sizing: border-box;">Registrarse</label>
    					<p style="color:black;">Al registrarme, acepto las Condiciones del servicio, la Política de Privacidad y de Cookies</p>
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
    padding: 1em;
    border: 0;
    color: white;
    background: #05466B;
    display: block;
    box-sizing: border-box;">Iniciar Sesion</label>
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
<script src="js/lib/jquery-ui/jquery-ui.js"></script>
<script src="js/calendario.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/ajaxs.js"></script>
<script src="js/main.js"></script>
<script src="js/parallax.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>

<script>
	
window.onload = function() {
 var myLatLng = {lat: 11.1063435, lng: -74.2236681};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!',
    icon: 'img/hotel.png'
  });
}



</script>
</html>
