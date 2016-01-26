// Listen for orientation changes

window.addEventListener("orientationchange", changeOrient);

changeOrient();

function changeOrient(){
	if(window.orientation == 90 || window.orientation == -90){
		$("header").hide();
	}


	else{
		$("header").show();
	}
}


/**
*
*    Like posts on swiping a feed division to the right:: 
*
*/
function likePost(){
	console.log('Swipe recorded');	

	/**
	*
	*  AJAX Request:
	*
	*/

	if($(this).attr("status") == "none"){

		var likeSide = $(this).find('> .likeSide');
		likeSide.css("width", "30px");

		var postId = $(this).attr("id");
		var thisPost = $(this);

		var xh = new XMLHttpRequest();
		
		xh.onreadystatechange = function(){
			if(xh.readyState == 4 && xh.status == 200){
				//console.log(xh.responseText);
				thisPost.find('> .likeSide > .likesNumber').html(xh.responseText);
			}
		}

		var url = "likePost.php"
		var params = "?postId=" + postId;

		xh.open("GET", url + params, true);
		xh.send();


		thisPost.attr("status", "liked");
		
		$(this).bind("swipeleft", unlikePost);
		$(this).unbind("swiperight");
		
	}

}

function unlikePost(){

	//double check: 
	if($(this).attr("status") == "liked"){

		var likeSide = $(this).find('> .likeSide');
		likeSide.css("width", "0px");

		var postId = $(this).attr("id");
		var thisPost = $(this);

		var xh = new XMLHttpRequest();
		
		xh.onreadystatechange = function(){
			if(xh.readyState == 4 && xh.status == 200){
				console.log(xh.responseText);
			}
		}

		var url = "unlikePost.php"
		var params = "?postId=" + postId;

		xh.open("GET", url + params, true);
		xh.send();


		thisPost.attr("status", "none");


		$(this).bind("swiperight", likePost);
		$(this).unbind("swipeleft");
	}

}

$(".postsMain[status=\"none\"]").on("swiperight", likePost);


$(".postsMain[status=\"liked\"]").on("swipeleft", unlikePost);