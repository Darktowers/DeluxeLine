$(function() {
		
var MinDate;		
	$('.date').datepicker({ minDate: 0, onClose: function( selectedDate ) {
        $( ".dateFin" ).datepicker( "option", "minDate", selectedDate );
    	} 
    });

	$('.dateFin').datepicker(
		// { onClose: function( selectedDate ) {
  //       $( ".date" ).datepicker( "option", "maxDate", "+1m" );
  //     }
  //   }
    );
	

	$('.lol').datepicker({ minDate: 0, onClose: function( selectedDate ) {
        $( ".lolFin" ).datepicker( "option", "minDate", selectedDate );
    	} 
    });

	$('.lolFin').datepicker(
	// { onClose: function( selectedDate ) {
 //        $( ".lol" ).datepicker( "option", "maxDate", "+1m" );
 //      }
 //    }
    );
	
	
});
// $(function() {
		
// var MinDate;
// var MinDate2;		
// 	$('.date').datepicker({ minDate: 0 });
// 	$('.dateFin').datepicker({ minDate: +1 });

// 	$(".date").change(function(){
// 		cambio1=new Date($('.date').val());
// 		cambio2=new Date($('.dateFin').val());
// 		tomamas();
// 	});
// 	$(".dateFin").change(function(){
// 		cambio1=new Date($('.date').val());
// 		cambio2=new Date($('.dateFin').val());
// 		tomamas();
// 	});
// 	function tomamas(){
// 		calculoChange=cambio2.getDate() - cambio1.getDate();
		
// 		if(calculoChange<=0){
// 			$('.date').val(cambio2);
// 			$('.dateFin').val(cambio1);
// 		}
// 	}

// 	$('.lol').datepicker({ minDate: 0 });
// 	$('.lolFin').datepicker({ minDate: +1 });

// 	$(".lol").change(function(){
// 		cambio1=new Date($('.lol').val());
// 		cambio2=new Date($('.lolFin').val());
// 		tomamas2();
// 	});
// 	$(".lolFin").change(function(){
// 		cambio1=new Date($('.lol').val());
// 		cambio2=new Date($('.lolFin').val());
// 		tomamas2();
// 	});
// 	function tomamas2(){
// 		calculoChange=cambio2.getDate() - cambio1.getDate();
		
// 		if(calculoChange<=0){
// 			$('.lol').val(cambio2);
// 			$('.lolFin').val(cambio1);
// 		}
// 	}

// });