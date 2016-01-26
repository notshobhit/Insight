$(document).ready(function(){
	//		On click of a like button on a post
	$(".like").click(function(){
		var postId = $(this).attr('postId');
		//console.log(postId);

		var elem = $(this);

		if($(this).attr("liked") != "yes"){
			var x = new XMLHttpRequest();

			x.onreadystatechange = function(){
				if(x.readyState == 4 && x.status == 200){
					elem.css({"color":"#ababab", "cursor":"auto"});
					elem.attr("liked", "yes");
					elem.text("Liked | " + x.responseText);		
				}
			}

			var params="?postId=" + postId;
			var url = "likePost.php";

			x.open("GET", url + params, true);
			x.send();

			
		}
	});

});