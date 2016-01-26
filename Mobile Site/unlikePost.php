<?php
	require 'coreinc.php';

	require 'connectToLoginCreds.php';

	$id = $_GET['postId'];
	$poster = $_SESSION['id'];

	$query1 = "UPDATE `posts` SET `likes` = `likes` - 1 WHERE `id` = '$id'";
	mysql_query($query1);

/*
	$query2 = "SELECT `likes` FROM `posts` WHERE `id` = '$id'";
	$r = mysql_fetch_assoc(mysql_query($query2));
	$likes = $r['likes'];
*/
	
	$path = "../likeData/".$id.".txt";
	
	$handle = fopen($path, "r+");
	$content = fread($handle, filesize($path));
	$new_content = str_replace($poster."\n", "", $content);
	fclose($handle);


	$handle = fopen($path, "w+");
	fwrite($handle, $new_content);
	fclose($handle);
?>