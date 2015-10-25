$(function() {
		
var MinDate;
var MinDate2;		
	$('.date').datepicker({ minDate: 0 });
	$('.dateFin').datepicker({ minDate: +1 });

	$('.date').change(function(){ 

		MinDate = $(".date").val();
		
	});
	//   .change(function(){
	// 	$('.dateFin').datepicker({ minDate: new Date( MinDate ) });
	// });
	$('.dateFin').change(function(){ 

		MinDate2 = $(".dateFin").val();
		
	})
	if(MinDate2<=MinDate){
		alert("La puta que no selecciones mamadas");
		$('.dateFin').datepicker({ minDate: new Date( MinDate ) });
	}

	$('.lol').datepicker({ minDate: 0 });

});