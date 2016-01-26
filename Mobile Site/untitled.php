<?php
	
	$id = 14;
	$path = "../likeData/".$id.".txt";
	
	$handle = fopen($path, "r+");
	$content = fread($handle, filesize($path));

//	echo $content;


//	fwrite($handle, "anujaverma@hotmail.com\n");
	fclose($handle);

?>