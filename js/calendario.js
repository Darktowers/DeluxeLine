$(function() {
var contador=0;
var MinDate;		
	$('.date').datepicker({ minDate: 0 });

	$('.date').change(function(){ 

		MinDate = $(".date").val();
		contador++;
		
	}).change(function(){
		$('.dateFin').datepicker({ minDate: new Date( MinDate ) });
		if (contador>1) {
			$('#BuscarEscritorio').html('<form action="buscar.php" method="post" class="BuscarEscritorio-form"><div class="BuscarEscritorio-contenedorForm"><input type="text" name="FechaLLegada" id="FechaLLegada-1" placeholder="LLegada" class="llegada date" required><input type="text" name="FechaSalida" id="FechaSalida-1" placeholder="Salida" class="salida dateFin" required><select name="NumeroHuespedes" id="" class="huespedes"><option value="1" selected>1 huesped</option><option value="2">2 huespedes</option><option value="3">3 huespedes</option><option value="4">4 huespedes</option></select><button type="submit" class="BuscarEscritorio-botonBuscar">Buscar Habitaciones</button></div></form>');
			contador=0;
		};
	});
	

	$('.lol').datepicker({ minDate: 0 });

});
// $(function() {
		
// var MinDate;
// var MinDate2;		
// 	$('.date').datepicker({ minDate: 0 });
// 	$('.dateFin').datepicker({ minDate: +1 });

// 	$('.date').change(function(){ 

// 		MinDate = $(".date").val();
		
// 	});
// 	//   .change(function(){
// 	// 	$('.dateFin').datepicker({ minDate: new Date( MinDate ) });
// 	// });
// 	$('.dateFin').change(function(){ 

// 		MinDate2 = $(".dateFin").val();
		
// 	});
// 	if(MinDate2<=MinDate){
// 		alert("La puta que no selecciones mamadas");
// 		$('.dateFin').datepicker({ minDate: new Date( MinDate ) });
// 	}

// 	$('.lol').datepicker({ minDate: 0 });

// });