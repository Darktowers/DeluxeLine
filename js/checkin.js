$(function(){
	$("#checkin").click(function(){
		var f = new Date();
		var inicioCheck=new Date($("#inicioCheckin").attr("value"));
		var finCheck=new Date($("#finCheckin").attr("value"));
		var calculo =f.getDate() - inicioCheck.getDate();
		var calculo2 =f.getDate() - finCheck.getDate();
		//alert(calculo+"   "+ calculo2)
		if(calculo<0){
			alert("La fecha de tu reserva aun no se cumple!!!");
		}
		else{
			if(calculo>=0 || calculo2 <0){
				$.ajax({
					type:"POST",
					url:"../php/Includes/selectUsuarioEst2.php",
					data:{activo: "true"} ,
					success:function(data){
						if(data=="true"){
							$('.checkF').attr("style","display: block");
							$('.Messagebar').attr("style","display: none");
						}	else{alert(data);}
					}
				});
			}
			else{
				alert("Tu reservacion ya se vencio!!!");
			}
		}
	});
});