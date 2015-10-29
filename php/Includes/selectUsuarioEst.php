<?php
	include 'conexion.php';
	
		$usuario=$_SESSION['idUsuario'];

		$consulta="select * from reserva where fkIdUsuario='".$usuario."'";

		$resl=$mysql->query($consulta);
		if(!$resl){
			echo"fallo consulta";
		}
		$can=$resl->num_rows;
		$rs=$resl->fetch_assoc();
		if($can<=0){
			echo'<div class="Messageerror Mess"><p>Por favor realize una reservacion para acceder a nuestros servicios</p></div>
					<a href="" class="Buscar1 but">Buscar Habitacion</a>';
		}
		elseif($can>0){
			$consulta2="select * from reserva where fkIdUsuario='".$usuario."'and fkIdEstado=2";
			$resl2=$mysql->query($consulta2);
			$can2=$resl2->num_rows;
			if($can2<=0){
			echo'<div class="Messagealert Mess"><p>Para acceder a nuestros servicios porfavor de click al checkin</p></div>
					<a  id="checkin" class="Checkin but">Checkin</a>
					<input type="hidden" name="inicioCheckin" id="inicioCheckin" value="'.$rs['fechaInicioReserva'].'"">
					<input type="hidden" name="finCheckin" id="finCheckin" value="'.$rs['fechaFinReserva'].'"">
					<input type="hidden" name="idReserva" id="idReserva" value="'.$rs['idReserva'].'"">
					';
				}else{
					if($can2>0){
						echo'
						<input type="hidden" name="idReserva" id="idReserva" value="'.$rs['idReserva'].'"">
							<div  class="Menu-s">
								<div class="tab t1 tabactive"><span class="icon-ticket"></span><p class="Escritorio">Servicios</p></div>
								<div class="tab t2"><span class="icon-cart"><p class="Escritorio">Productos</p></div>
								<div class="tab t3"><span class="icon-calendar"><p class="Escritorio">Tiempo</p></div>
								<div class="tab t4"><span class="icon-switch"><p class="Escritorio">Checkout</p></div>
							</div>
							<div  class="Contenido">
								<div class="Cont c1">
			<h2>Servicios</h2>
			<div class="Comida">
				<h3>Comidas</h3>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/pavo.jpg" alt="Piscina">
					<p>Pavo a la naranja</p>
					<button class="Pedir">Pedir Unidad
					<span>$35,000</span>
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/cazuela.jpg" alt="Piscina">
					<p>Cazuela de mariscos</p>
					<button class="Pedir">Pedir Unidad
					<span>$30,000</span>	
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/robalo.jpg" alt="Piscina">
					<p>Robalo en salsa</p>
					<button class="Pedir">Pedir Unidad
					<span>$35,000</span>
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/salmon.jpg" alt="Piscina">
					<p>Salmon</p>
					<button class="Pedir">Pedir Unidad
					<span>$45,000</span>
					</button>
				</div>
			</div>
			<div class="Bebida">
				<h3>Bebidas</h3>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/colada.jpg" alt="Piscina">
					<p>Piña Colada</p>
					<button class="Pedir">Pedir Unidad
					<span>$15,000</span>
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/coca.jpg" alt="Piscina">
					<p>Coca cola</p>
					<button class="Pedir">Pedir Unidad
					<span>$5,000</span>
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/casillero.jpg" alt="Piscina">
					<p>Casillero</p>
					<button class="Pedir">Pedir Unidad
						<span>$42,000</span>
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/jugonatural.jpg" alt="Piscina">
					<p>Jugo natural</p>
					<button class="Pedir">Pedir Unidad
					<span>$12,000</span>	
					</button>
				</div>
			</div>
			<div class="Plus">
				<h3>Plus</h3>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/buceo.jpg" alt="Piscina">
					<p>Buceo</p>
					<button class="Pedir">Pedir Hora
					<span>$242,000</span>	
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/paseobote.jpg" alt="Piscina">
					<p>Paseo en bote</p>
					<button class="Pedir">Pedir Hora
					<span>$142,000</span>	
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/piscina1.jpg" alt="Piscina">
					<p>Piscina</p>
					<button class="Pedir">Pedir Hora
					<span>$352,000</span>		
					</button>
				</div>
				<div class="Servicio">
					<div class="Cilueta"></div>
					<img src="img/sauna1.jpg" alt="Piscina">
					<p>Sauna</p>
					<button class="Pedir">Pedir Hora
						<span>$85,000</spanpan>	
					</button>
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
		<a  id="checkin" class="Checkin but">Checkout</a>
		</div>

	</div>
							';
					}
				}
		}
		
		


?>