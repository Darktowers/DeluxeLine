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
  $('.buscar').hide("fade"); 
  $('.reservas').hide("fade"); 
  $('.pre').show("fade");
  $('.Registrarse').hide("fade"); 
  $('.IniciarForm').css("display","none");
   $('.RegistrarseForm').css("display","none"); 
  $('.reg').show("fade");
  $('.ini').show("fade");

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