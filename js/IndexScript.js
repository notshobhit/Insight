$(document).ready(function(){

	$("#header").click(function(){
		$(".about").fadeIn();

		$("html, body").animate({
			scrollTop: $(".about").offset().top
		}, 400);
	});

	$(".about").first().waypoint(function(){
		console.log('run');
	}, {
		offset: '50%'
	});
});
