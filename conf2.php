<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

	if($_POST["code"] == $_SESSION["correct_code"]){
		//USER HAS ENTERED CORRECT CODE

		$e = $_SESSION["unconfirmedID"];


		require 'connectToLoginCreds.php';

		$query = "UPDATE `login creds` SET `confirmCode` = 0 WHERE email = '$e' ";

		mysql_query($query);


		
		$row =mysql_fetch_assoc( mysql_query("SELECT * FROM `login creds` WHERE email= '$e';") );
		$_SESSION["fn"] = $row['firstName'];
		$_SESSION["ln"] = $row['lastName'];
		$_SESSION["id"] = $row['email'];
		mysql_close($link);

		header("Location: HomePage.php");
		exit();


	}

	else{
		$_SESSION["check2"] = 1;
		header("Location: confirmCode.php");
		exit();
	}
}

?>