$(function() {
		
$("#reservar").click(function(){
	var fechaLleagada=$("#fechaLlegada").attr("value");
	var fechaSalida=$("#fechaSalida").attr("value");
	var tipoHabitacion=$("#tipoHabitacion").attr("value");
	var precioHabitacion=$("#precioHabitacion").attr("value");
	
	$.ajax({
		type:"POST",
		url:"php/Includes/validacionSesion.php",
		data:{ fechaLleagada: fechaLleagada, fechaSalida : fechaSalida, tipoHabitacion : tipoHabitacion, precioHabitacion : precioHabitacion} ,
		success:function(data){
			if(data=="false"){
				// alert("todo al pelo no ha iniciado sesion");
			}
			else{
				if(data=="true"){
					alert("Tu reserva ha sido realizada");
					document.location=("usuario/index.php");
				}
				else{
					if(data!="true"||data!="false"){
						alert(data);
						document.location=("index.php");
					}
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

			if(data=="true"){
				$.ajax({
					type:"POST",
					url:"php/Includes/inicio.php",
					data:{pass: password, email: email} ,
					success:function(data){
						if(data=="true"){document.location=("usuario/index.php");}
						else{
						$("#errori").show("fade");	
						$("#errori").html(data);	
						}		
					}
				});
			}
			else{
				$("#errorr").show("fade");	
				$("#errorr").html(data);		
			}
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
			if(data=="true"){document.location=("usuario/index.php");}
			else{
			$("#errori").show("fade");	
			$("#errori").html(data);	
			}		
		}
	});
});


$("#registrarYReservar").click(function(){
	var nombre=$("#nombre").val();
	var cedula=$("#cedula").val();
	var password=$("#pass").val();
	var email=$("#email").val();
	
	$.ajax({
		type:"POST",
		url:"php/Includes/registrar.php",
		data:{ nombre: nombre, cedula:cedula, pass: password, email: email} ,
		success:function(data){

			if(data=="true"){
				$.ajax({
					type:"POST",
					url:"php/Includes/inicio.php",
					data:{pass: password, email: email} ,
					success:function(data){
						if(data=="true"){
							var fechaLleagada=$("#fechaLlegada").attr("value");
							var fechaSalida=$("#fechaSalida").attr("value");
							var tipoHabitacion=$("#tipoHabitacion").attr("value");
							var precioHabitacion=$("#precioHabitacion").attr("value");
							$.ajax({
								type:"POST",
								url:"php/Includes/validacionSesion.php",
								data:{ fechaLleagada: fechaLleagada, fechaSalida : fechaSalida, tipoHabitacion : tipoHabitacion, precioHabitacion : precioHabitacion} ,
								success:function(data){
									
									
										if(data=="true"){
											alert("Tu reserva ha sido realizada");
											document.location=("usuario/index.php");
										}
										else{
											if(data!="true"||data!="false"){
												alert(data);
												document.location=("index.php");
											}
										}
															
								}

							});

						}
						else{
						$("#errori").show("fade");	
						$("#errori").html(data);	
						}		
					}
				});
			}
			else{
				$("#errorr").show("fade");	
				$("#errorr").html(data);		
			}
		}
	});
});

$("#inicioYReservar").click(function(){
	
	var passwordInicio=$("#passInicio").val();
	var emailInicio=$("#emailInicio").val();
	
	$.ajax({
		type:"POST",
		url:"php/Includes/inicio.php",
		data:{pass: passwordInicio, email: emailInicio} ,
		success:function(data){
			if(data=="true"){
				
							var fechaLleagada=$("#fechaLlegada").attr("value");
							var fechaSalida=$("#fechaSalida").attr("value");
							var tipoHabitacion=$("#tipoHabitacion").attr("value");
							var precioHabitacion=$("#precioHabitacion").attr("value");
							$.ajax({
								type:"POST",
								url:"php/Includes/validacionSesion.php",
								data:{ fechaLleagada: fechaLleagada, fechaSalida : fechaSalida, tipoHabitacion : tipoHabitacion, precioHabitacion : precioHabitacion} ,
								success:function(data){
									
									
										if(data=="true"){
											alert("Tu reserva ha sido realizada");
											document.location=("usuario/index.php");
										}
										else{
											if(data!="true"||data!="false"){
												alert(data);
												document.location=("index.php");
											}
										}
															
								}

							});

						
			}
			else{
			$("#errori").show("fade");	
			$("#errori").html(data);	
			}		
		}
	});
});


});