<?php
	require 'connectToLoginCreds.php';
	$sql = "INSERT INTO `login creds` (`firstName`, `lastName`, `email`, `password`, `sex`, `birthday`, `studentOfDTU`, `emailNotifs`, `confirmCode`) VALUES ('fn', 'ln', 'em', 'pwd', 'sex', 'bday', 'DTUite', 'mailNotifs', 'code')";
	mysql_query($sql);
	mysql_close($link);
	echo "Working";
?>