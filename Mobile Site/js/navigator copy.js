function showNav(){
	$("nav").css("left", "0");
	$("#hamburger").css("left", "210px");
	$("#wrapper").fadeIn();
}

function hideNav(){
	$("nav").css("left", "-200px");
	$("#hamburger").css("left", "10px");
	$("#wrapper").fadeOut();
}

$("#hamburger").click(function(){
	var stat = $(this).attr("status");
	if(stat == 0){
		$("#hamburger").attr("status", "1");
		showNav();
	}

	else if(stat == 1){
		$("#hamburger").attr("status", "0");
		hideNav();
	}
});