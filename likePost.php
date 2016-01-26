<?php
	require 'coreinc.php';

	$id = $_GET['postId'];
	$poster = $_SESSION['id'];

	$query1 = "UPDATE `posts` SET `likes` = `likes` + 1 WHERE `id` = '$id'";
	mysql_query($query1);


	$query2 = "SELECT `likes` FROM `posts` WHERE `id` = '$id'";
	$r = mysql_fetch_assoc(mysql_query($query2));
	$likes = $r['likes'];

	
	$path = "likeData/".$id.".txt";
	
	$handle = fopen($path, "a+");
	fwrite($handle, $poster."\n");
	fclose($handle);

	echo $likes;
?>