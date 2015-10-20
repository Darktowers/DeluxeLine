$(".c1").show();
$(".c2").hide();
$(".c3").hide();
$(".c4").hide();
  
  $(".t1").on("click",function(){
  	
  	$(".c1").show();
  	$(".c2").hide();
  	$(".c3").hide();
    $(".c4").hide();
    $(".t1").addClass("tabactive");
  	$(".t2").removeClass("tabactive");
    $(".t3").removeClass("tabactive");
    $(".t4").removeClass("tabactive");
  
  	
  	
  }); 
  
    $(".t2").on("click",function(){
  	
  	$(".c2").show();
  	$(".c1").hide();
  	$(".c3").hide();
  	$(".t2").addClass("tabactive");
  	$(".t1").removeClass("tabactive");
  	$(".t3").removeClass("tabactive");
  	$(".c4").hide();
  	$(".t4").removeClass("tabactive");
  }); 
   $(".t3").on("click",function(){
  	
  	$(".c3").css("display","block");
  	$(".c1").hide();
  	$(".c2").hide();
  	$(".c4").hide();
  	$(".t4").removeClass("tabactive");
  	$(".t3").addClass("tabactive");
  	$(".t1").removeClass("tabactive");
  	$(".t2").removeClass("tabactive");
  	
  	
  }); 
    $(".t4").on("click",function(){
  	
  	$(".c4").css("display","block");
  	$(".c1").hide();
  	$(".c2").hide();
  	$(".c3").hide();
  	$(".t4").addClass("tabactive");
  	$(".t1").removeClass("tabactive");
  	$(".t2").removeClass("tabactive");
  	$(".t3").removeClass("tabactive");
  	
  	
  	
  }); 