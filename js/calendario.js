// $(function() {
		
// var MinDate;		
// 	$('.date').datepicker({ minDate: 0 });

// 	$('.date').change(function(){ 

// 		MinDate = $(".date").val();
		
// 	}).change(function(){
// 		$('.dateFin').datepicker({ minDate: new Date( MinDate ) });
// 	});
	

// 	$('.lol').datepicker({ minDate: 0 });

// 	$('.lol').change(function(){ 

// 		MinDate = $(".lol").val();
		
// 	}).change(function(){
// 		$('.lolFin').datepicker({ minDate: new Date( MinDate ) });
// 	});

// });
$(function() {

	$("#FechaLLegada-1").on("focus",function(){
		$('#hideKeyboard').focus();
	});
	$("#FechaSalida-1").on("focus",function(){
		$('#hideKeyboard').focus();
	});
	$("#FechaLLegada-2").on("focus",function(){
		$('#hideKeyboard').focus();
	});
	$("#FechaSalida-2").on("focus",function(){
		$('#hideKeyboard').focus();
	});
	$("#BuscarM").on("focus",function(){
		$('#hideKeyboard').focus();
	});
	
		
		
var MinDate;
var MinDate2;		
	$('.date').datepicker({ minDate: 0 });
	$('.dateFin').datepicker({ minDate: +1 });

	$(".date").change(function(){
		cambio1=new Date($('.date').val());
		cambio2=new Date($('.dateFin').val());
		tomamas();
	});
	$(".dateFin").change(function(){
		cambio1=new Date($('.date').val());
		cambio2=new Date($('.dateFin').val());
		tomamas();
	});
	function tomamas(){
		calculoChange=cambio2.getDate() - cambio1.getDate();
		
		if(calculoChange<=0){
			$('.date').val(cambio2);
			$('.dateFin').val(cambio1);
			// $('.date').datepicker({ minDate: cambio2 });
			// $('.dateFin').datepicker({ minDate: cambio1 });
		}
	}

	$('.lol').datepicker({ minDate: 0 });
	$('.lolFin').datepicker({ minDate: +1 });

	$(".lol").change(function(){
		cambio1=new Date($('.lol').val());
		cambio2=new Date($('.lolFin').val());
		tomamas2();
	});
	$(".lolFin").change(function(){
		cambio1=new Date($('.lol').val());
		cambio2=new Date($('.lolFin').val());
		tomamas2();
	});
	function tomamas2(){
		calculoChange=cambio2.getDate() - cambio1.getDate();
		
		if(calculoChange<=0){
			$('.lol').val(cambio2);
			$('.lolFin').val(cambio1);
			// $('.date').datepicker({ minDate: cambio2 });
			// $('.dateFin').datepicker({ minDate: cambio1 });
		}
	}

});