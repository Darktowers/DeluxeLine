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
  $('.BuscarHabitacion').show("fade"); 
});
$('.cerrar').on("click",function(){
  $('.BuscarHabitacion').hide("fade"); 
});
$('.Buscar-movil').on("focus",function(){
  $('.BuscarHabitacion').show("fade"); 
});
/*Reservar*/
$('.reservarH').on("click",function(){
  $('.reservas').show("fade"); 
});
