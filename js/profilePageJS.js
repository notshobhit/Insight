$(document).ready(function(){
/* 
	var i = 0,j = 0, y = window.pageYOffset, pp = 0;
	check();
	function check(){
		if(i==0){

			if(j==500){
				$("#heading").fadeOut();
			}

			setTimeout(function(){
				$("#heading").html("Activity");
			}, j);

			$("#heading").fadeIn();
			$("#leftArrow").fadeOut(10);
			$("#rightArrow").fadeIn(100);

			setTimeout(function(){
				$("#mainBody").load("Misc/profileActivityContent.txt");
			},j);
		}


		if(i==1){
			$("#leftArrow").fadeIn(100);
			$("#rightArrow").fadeIn(100);
			setTimeout(function(){
				$("#mainBody").load("Misc/profilePopularContent.txt");
			},j);
			$("#heading").fadeOut();
			setTimeout(function(){
				$("#heading").html("Popular Posts");
			},j);
			$("#heading").fadeIn();
		}


		if(i==2){
			$("#rightArrow").fadeOut(10);
			setTimeout(function(){
				$("#mainBody").load("Misc/profileExperienceContent.txt");
			},j);
			$("#heading").fadeOut();
			setTimeout(function(){
				$("#heading").html("Experience/Achievements");
			},j);
			$("#heading").fadeIn();
		}
	}

	j = 500;
	
	$('#rightArrow').click(function(){
		i++;
		check();
	});

	$('#leftArrow').click(function(){
		i--;
		check();
	});
	
	$('.arrow').hover(
		function(){
			$(this).css({"top": "0px", "height":"40px"});
		},
		function(){
			$(this).css({"top": "10px", "height":"20px"});
		}	
	);
*/	
	$("#profilePic").click(function(){
	
		$(this).animate({
			height: '500px',
			width: '500px'
		},400);

		$("#overlay").fadeIn();
		
		$(this).css({"cursor": "initial","zIndex": "6"});
		
		$("html, body").animate({scrollTop: '0'},500,function(){$("body").css({"overflow-y": "hidden"})});
	});
	
	
	
	$("#overlay").click(function(){
		
		pp = 0;
		
		$(this).fadeOut(500);

		$("#profilePic").animate({
			height: '150px',
			width: '150px'
		},400,function(){$("#profilePic").css({"cursor": "pointer", "zIndex": "0"});}
		);

		$("#searchMain").hide();
		
		
		$("body").css({"overflow-y": "scroll"});
		
	});


	$("#editButton").click(function(){
		var stat = $(this).attr("status");
		var button = $(this);
		if(stat == 0){
		//set status as 1

			$("textarea.test").removeAttr("readonly");
			button.attr("status", "1");

			$(".profileInfoBox hr").animate({
				opacity: 0
			});

			$("textarea.test").css("background", "rgba(255, 255, 255, 0.5)");
			
			button.css("opacity", "1");

			button.bind("mouseenter mouseleave", function(){
				button.css("opacity", 1);
			});
		}

		else if(stat == 1){
		//set status as 0
			$("textarea.test").attr("readonly", "readonly");
			button.attr("status", "0");

			$(".profileInfoBox hr").animate({
				opacity: 1
			});

			$("textarea.test").css({"background": "rgba(255, 255, 255, 0)", "border": "1px solid rgba(0, 0, 0, 0)"});
			button.css("opacity", "0.2");
			
			button.bind("mouseenter", function(){
				button.css("opacity", 0.5);
			});

			button.bind("mouseleave", function(){
				button.css("opacity", 0.2);
			});
		}
	});

	$(".test").focus(function(){
		var stat = $("#editButton").attr("status");
		if(stat == 1)
			$(this).css("border", "1px solid #fff");
	});
});