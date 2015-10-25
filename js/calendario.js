$(function() {
		
var MinDate;		
	$('.date').datepicker({ minDate: 0 });

	$('.date').change(function(){ 

		MinDate = $(".date").val();
		
	}).change(function(){
		$('.dateFin').datepicker({ minDate: new Date( MinDate ) });
	});
	

	$('.lol').datepicker({ minDate: 0 });

});