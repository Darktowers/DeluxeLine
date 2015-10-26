$('.owl-carousel').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,

});
$('.owl-carousel-1').owlCarousel({
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items:1,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,

});
/*Buscar habitacion*/
$('.Buscar-movilInput').on("focus",function(){
  $('.buscar').show("fade"); 
});
$('.cerrar').on("click",function(){
  $('.buscar').hide("fadeOut"); 
  $('.reservas').hide("fadeOut"); 
  $('.pre').show("fadeOut");
  $('.Registrarse').hide("fadeOut"); 
  $('.IniciarForm').css("display","none");
   $('.RegistrarseForm').css("display","none"); 
  $('.reg').show("fadeOut");
  $('.ini').show("fadeOut");
  $(".Registra").hide("fadeOut");
  $(".Iniciar").hide("fadeOut");
 $(".Menumovil").hide("fadeOut");

});
$('.Buscar-movil').on("focus",function(){
  $('.buscar').show("fade"); 
});
/*Reservar*/

$('.reservarH').on("click",function(){
  $('.reservas').show("fade"); 
});

$('.reservarahora').on("click",function(){
  $('.pre').hide("fade"); 
  $('.Registrarse').show("fade"); 
  
});

/*   */
$('.ini').on("click",function(){
  $('.reg').hide("fade"); 
  $('.IniciarForm').css("display","inline-block"); 
  
});
$('.reg').on("click",function(){
  $('.ini').hide("fade"); 
  $('.RegistrarseForm').css("display","inline-block"); 
  
});

/*  Formularios */
$(".Registra").hide();
$(".Iniciar").hide();
$('.inis').on("click",function(){
  $('.Iniciar').show("fade"); 
});
$('.regs').on("click",function(){
  $('.Registra').show("fade"); 
  
});

/*Menu Movil*/
$('.Menumovil-icono').on("click",function(){
  $(".Menumovil").show("fadeIn");
});


$("#FechaLLegada-1").on("focus",function(){
    $('#hideKeyboard').focus();
    $("#FechaLLegada-1").blur();
  });
  $("#FechaSalida-1").on("focus",function(){
    $('#hideKeyboard').focus();
    $("#FechaSalida-1").blur();
  });
  $("#FechaLLegada-2").on("focus",function(){
    $('#hideKeyboard').focus();
    $("#FechaLLegada-2").blur();
  });
  $("#FechaSalida-2").on("focus",function(){
    $('#hideKeyboard').focus();
    $("#FechaSalida-2").blur();
  });
  $("#BuscarM").on("focus",function(){
    $('#hideKeyboard').focus();
    $("#BuscarM").blur();
  });
  