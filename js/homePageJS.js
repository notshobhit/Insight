

$(document).ready(function(){

	//  On clicking the `post an update` button in navi
	$(".updateButton").click(function(){
		$("#overlay").show();
		$("#updatePost").show();
	});
	

	//	On clicking the overshadow element
	$("#overlay").click(function(){
		$(this).fadeOut();
		$("#searchMain").hide();
		$("#updatePost").hide();
	});



	//	Post a new update
	$("#textpostbutton").click(function(){

		//new post content, and whether anonymous or not:
		var inp = document.getElementById('postContent').value;
		if(inp == null || inp == "")
			return;


		var anyStat = $('#anony:checked').val();
		var anonyRequest = 1;
		if(anyStat == undefined)
			anonyRequest = 0;
		
		var url = "updatepost2.php";
		var params = "content=" + inp + "&anon=" + anonyRequest;
		
		//XMLHttpRequest Object:
		var xh = new XMLHttpRequest();
		
		xh.onreadystatechange = function(){
			if(xh.readyState == 4 && xh.status == 200){
				//remove overlay and hide 'update post' textarea:
				$("#overlay").click();
				
				//prepend the new post:
				document.getElementById('postsMain').innerHTML = xh.responseText + document.getElementById('postsMain').innerHTML;

				//fade in the new posts:
				highlightNew();

			}
		}

		xh.open("POST", url, true);
		
		//to post: 
		xh.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		
		xh.send(params);

		
		//empty the textarea content:
		document.getElementById('postContent').value = "";

		//if first post made, no posts message should disappear:
		$("#noPosts").fadeOut(100);

	});

	function highlightNew(){
		var feeds = document.getElementsByClassName('feed');
		feeds[0].style.display = 'none';
		
		$(".feed").fadeIn(1200);
		
		$("html, body").animate({
			scrollTop: 0
		}, "slow");
	}




	//Self Documenting:
	function searchDisplay(){
	    document.getElementById('overlay').style.display='block';
	    document.getElementById('searchMain').style.display='block';
	}

	function removeOverlay(){
	    document.getElementById('overlay').style.display='none';
	    document.getElementById('searchMain').style.display='none';
	    document.getElementById('updatePost').style.display='none';
	    document.getElementById('navi').style.display='block'
	}

	document.getElementsByClassName("searchButton")[0].onclick = searchDisplay;
	document.getElementsByClassName("searchButton")[1].onclick = searchDisplay;


});