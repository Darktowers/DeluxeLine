$(function (){

	$(".Habitacion").click(function()
	{	
		var nombreHabitacion = $(this).attr("value");
		var idHabitacion = $(this).attr("id");
		var precio = $(this).attr("alt");

		$("#habitacion").attr("value", nombreHabitacion);
		$("#idHabitacion").attr("value", idHabitacion);
		$("#precio").attr("value", precio);

		document.getElementById("consulta").submit();
				
	});


});
