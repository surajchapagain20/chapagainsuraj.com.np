

//----------------------------------Meun side (desktop)---------------------------------

$(function(){
	$("#SIDE").animate({left:-155},500);
	$("#SIDE").hover(
		function(){ 
			$(this).stop().animate({left:-85},900,"easeOutBounce");
		},
		function(){ 
			$(this).stop().animate({left:-155},900,"easeOutBounce");
		}
	)
});


//-----------------------------------------Meun side (desktop)--------------------------------------------
