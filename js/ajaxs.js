$(function() {
		
$("#reservar").click(function(){
	var fechaLleagada=$("#fechaLlegada").attr("value");
	var fehcaSalida=$("#fechaSalida").attr("value");
	var tipoHabitacion=$("#tipoHabitacion").attr("value");
	
	$.ajax({
		type:"POST",
		url:"php/Includes/validacionSesion.php",
		data:{ fechaLleagada: fechaLleagada, fehcaSalida:fehcaSalida, tipoHabitacion : tipoHabitacion} ,
		success:function(data){
			if(data!="true"){
				// alert("todo al pelo no ha iniciado sesion");
			}
			else{
				if(data=="true"){
					alert("donde /&/& esta el boton de pago aqui redirecciona a esa vaina");
				}
			}
							
		}
	});
});

$("#registrar").click(function(){
	var nombre=$("#nombre").val();
	var cedula=$("#cedula").val();
	var password=$("#pass").val();
	var email=$("#email").val();
	
	$.ajax({
		type:"POST",
		url:"php/Includes/registrar.php",
		data:{ nombre: nombre, cedula:cedula, pass: password, email: email} ,
		success:function(data){
			$("#errorr").show("fade");	
			$("#errorr").html(data);		
		}
	});
});

$("#inicio").click(function(){
	
	var passwordInicio=$("#passInicio").val();
	var emailInicio=$("#emailInicio").val();
	
	$.ajax({
		type:"POST",
		url:"php/Includes/inicio.php",
		data:{pass: passwordInicio, email: emailInicio} ,
		success:function(data){
			$("#errori").show("fade");	
			$("#errori").html(data);			
		}
	});
});

});