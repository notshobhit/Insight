<?php

	require 'coreinc.php';

	$pc = $_POST['postContent'];


	if(isset($_POST['anony']))
		$anStat = 1;
	else
		$anStat = 0;

	$em = $_SESSION['id'];
	$query="INSERT INTO `posts` (`email` , `posttext`, `anony`) VALUES ('$em','$pc', '$anStat')";
	mysql_query($query);
	
	header("location: homepage.php");


?>