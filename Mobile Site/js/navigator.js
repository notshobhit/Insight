/**
*
*      Javascript for navigator
*
*
*      The toggle button (id as `hamburger`) has an attribute `status`
*      Status 1: nav is shown; Status 0: nav is hidden
*
*
*/




function showNav(){
	//set hamburger status as 1:
	$("#hamburger").attr("status", "1");

	//movement:
	$("nav").css("left", "0");
	$("#hamburger").css("left", "210px");

	//bring in overlay, make body non scrollable:
	$("#wrapper").fadeIn();
	$("body").css("overflow", "hidden");

	//swipeleft to hide nav:
	$("body").bind("swipeleft", hideNav);
}

function hideNav(){
	//console.log('run hide');

	//Set hamburger status as 0:
	$("#hamburger").attr("status", "0");

	//movement
	$("nav").css("left", "-200px");
	$("#hamburger").css("left", "10px");

	//remove overlay:
	$("#wrapper").fadeOut();

	//make body scrollable again
	$("body").css("overflow", "scroll");
	
	//remove swipeleft event listener:
	$("body").unbind("swipeleft");
}

$("#hamburger").click(function(){
	var stat = $(this).attr("status");
	
	if(stat == 0){
		showNav();
	}

	else if(stat == 1){
		hideNav();
	}
});