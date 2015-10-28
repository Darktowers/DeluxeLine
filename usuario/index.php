<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuario</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/usermain.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,300,700italic,700' rel='stylesheet' type='text/css'>

</head>

<body>
	<?php
	if(@$_SESSION['activo']==true){

	echo'
		<header class="Cabecera">
		<div class="Cabecera-logo ">
			<img class="Cabecera-logoImg" src="../img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="MenuEscritorio">
			<nav class="MenuEscritorio-nav">
				<li class="MenuEscritorio-item Iactive"><a href="" class="MenuEscritorio-link ">Principal</a></li>
				<!-- <li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ofertas</a></li> -->
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Buscar Habitacion</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">'.$_SESSION['usuario'].'</a></li>
			</nav>
		</div>
		<div class="Menumovil">
		<div class="cerrar"><span class="icon-cross"></span></div>
			<nav class="Menumovil-ul">
				<!-- <li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ofertas</a></li> -->
				<li class="Menumovil-item Iactive"><a href="" class="Menumovil-link ">Principal</a></li>
				<li class="Menumovil-item "><a href="" class="Menumovil-link">Buscar Habitacion</a></li>
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
	elseif(@$_SESSION['activo']!=true){
		header('location:../index.php');
	}
	?>
	<!-- <header class="Cabecera">
		<div class="Cabecera-logo ">
			<img class="Cabecera-logoImg" src="../img/logodeluxeline.png" alt="Logo DeluxeLine">
		</div>
		<div class="MenuEscritorio">
			<nav class="MenuEscritorio-nav">
				<li class="MenuEscritorio-item Iactive"><a href="" class="MenuEscritorio-link ">Principal</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ofertas</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Buscar Habitacion</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Cristian</a></li>
			</nav>
		</div>
		<div class="Menumovil">
			<nav class="Menumovil-ul">
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Ofertas</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Buscar Habitacion</a></li>
				<li class="MenuEscritorio-item"><a href="" class="MenuEscritorio-link">Cristian</a></li>
			</nav>
		</div>
		<div class="Menumovil-icono">
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
			<span class="Menumovil-grid"></span>
		</div>
	</header> 



Sus botones de checkin jajaja


-->
<div class="Messagebar">
	<div class="Messageerror Mess"><p>Por favor realize una reservacion para acceder a nuestros servicios</p></div>
	<a href="" class="Buscar1 but">Buscar Habitacion</a>
	<div class="Messagealert Mess"><p>Para acceder a nuestros servicios porfavor de click al checkin</p></div>
	<a href="" class="Checkin but">Checkin</a>
	<div class="Messagegood Mess"><p>Excelente ahora usted puede solicitar servicios con nuestra plataforma</p></div>
	
	

	
</div>

	<div class="Menu-s">
		<div class="tab t1 tabactive"><span class="icon-ticket"></span><p class="Escritorio">Servicios</p></div>
		<div class="tab t2"><span class="icon-cart"><p class="Escritorio">Productos</p></div>
		<div class="tab t3"><span class="icon-calendar"><p class="Escritorio">Tiempo</p></div>
		<div class="tab t4"><span class="icon-switch"><p class="Escritorio">Checkout</p></div>
	</div>
	<div class="Contenido">
		<div class="Cont c1">
			<h2>Servicios</h2>
			<div class="Comida">
				<h3>Comidas</h3>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/pavo.jpg" alt="Piscina">
					<p>Pavo a la naranja</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/cazuela.jpg" alt="Piscina">
					<p>Cazuela de mariscos</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/robalo.jpg" alt="Piscina">
					<p>Robalo en salsa</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/salmon.jpg" alt="Piscina">
					<p>Salmon</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
			</div>
			<div class="Bebida">
				<h3>Bebidas</h3>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/piscina1.jpg" alt="Piscina">
					<p>Piscina</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/piscina1.jpg" alt="Piscina">
					<p>Piscina</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/piscina1.jpg" alt="Piscina">
					<p>Piscina</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/sauna1.jpg" alt="Piscina">
					<p>Sauna</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
			</div>
			<div class="Plus">
				<h3>Plus</h3>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/buceo.jpg" alt="Piscina">
					<p>Buceo</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/paseobote.jpg" alt="Piscina">
					<p>Paseo en bote</p>
					<button class="Pedir">Pedir Unidad</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/piscina1.jpg" alt="Piscina">
					<p>Piscina</p>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/sauna1.jpg" alt="Piscina">
					<p>Sauna</p>
				</div>
			</div>
		</div>
		<div class="Cont c2">
			
			<h3>Compras recientes</h3>
		</div>
		<div class="Cont c3">
			
			<h3>Tiempo restante</h3>

			<div class="Tempo">
				<div class="fechas">
					<div class="fechaini">
						<p>Inicio</p>
						<p>30/10/15</p>
					</div>
					<div class="fechafin">
						<p>Fin</p>
						<p>01/11/15</p>
					</div>
				</div>
				<p class="noches" style="font-size: 20em;margin: 0;">
					2
				</p>
				<p style="font-size: 3em;margin: 0;">
					Noches
				</p>
			</div>
		</div>
		<div class="Cont c4">
			
			<h3>Checkout</h3>	

		</div>

	</div>
</body>
<script src="../js/lib/jquery.js"></script>
<script src="../js/lib/jquery-ui/jquery-ui.js"></script>
<script src="../js/calendario.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="js/mainuser.js"></script>
</html>