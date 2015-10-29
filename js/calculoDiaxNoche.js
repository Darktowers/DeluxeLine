$(function(){
	var llegada=new Date($('#fechaPreReservaLlegada').val());
	var salida=new Date($('#fechaPreReservaSalida').val());
	var diferencia = salida.getDate() - llegada.getDate();
	
	if(diferencia<0){

		 	diferencia=diferencia+31;
		 	
		 }
	var precio=$('#precioHabitacion').attr("value");
	var calculo=parseInt(diferencia)*parseInt(precio);
	
	$("#total").text("$"+calculo);
	$("#fechaPreReservaLlegada").change(function(){
		cambio1=new Date($('#fechaPreReservaLlegada').val());
		cambio2=new Date($('#fechaPreReservaSalida').val());
		tomalonuevo();
	});
	$("#fechaPreReservaSalida").change(function(){
		cambio1=new Date($('#fechaPreReservaLlegada').val());
		cambio2=new Date($('#fechaPreReservaSalida').val());
		tomalonuevo();
	});
	function tomalonuevo(){
		calculoChange=cambio2.getDate() - cambio1.getDate();
		 if(calculoChange<0){

		// 	$('#fechaPreReservaLlegada').val(cambio2);
		// 	$('#fechaPreReservaSalida').val(cambio1);
		 	// calculoChange= cambio1.getDate()-cambio2.getDate();
		 	calculoChange=calculoChange+31;
		 	
		 }
			
			var calculoNuevo=parseInt(calculoChange)*parseInt(precio);
			$("#total").text("$"+calculoNuevo);
		
	}
});
