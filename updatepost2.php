<?php

	require 'coreinc.php';

	$pc = trim($_POST['content']);
	$pc = nl2br($pc);


	$anStat = $_POST['anon'];

	$nam1 = $_SESSION['fn'];
	$nam2 = $_SESSION['ln'];
	$a = ($anStat == 1) ? "(Anonymously)" : "";
	
	$poster = $_SESSION['id'];


	$query="INSERT INTO `posts` (`posttext`, `anony`, `poster`) VALUES ('$pc', '$anStat', '$poster')";
	mysql_query($query);

	$pic_id = ($anStat == 1) ? "Someone" : $poster;

	$pc = str_replace("&lt;br /&gt;", "<br />", htmlspecialchars($pc));

	echo '<div class="feed"><div class="feedHead" id="newFeed"><img src="ProfilePics/'.$pic_id.'.jpg"></img><p class="postContent">You said: '.$a.'<br /><span class="showTime">Just now</span></p></div><p>'.$pc.'</p><div class="commentBox"><table> <tr><td class="like">Like</td><td class="dislike">Dislike</td><td class="share">Promote</td></tr> </table></div></div>';
?>