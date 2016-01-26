<?php session_start();?>

<?php
	$em = $_POST["emailId"];
	$pwd = $_POST["pass"];

	//connect to db:
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect to sql: ' . mysql_error());
	}


	//connect to db
	$sublink = mysql_select_db('insight1');
	if(!$sublink) {
		die('Could not connect to db: '. mysql_error());
	}


	$checkID = mysql_query("SELECT * FROM `login creds` WHERE email= '$em' AND password='$pwd';");

	if(mysql_num_rows($checkID) > 0){
		$row = mysql_fetch_assoc($checkID);
		
		/*
		//check if mail ID is confirmed: 

		if($row['confirmCode'] != 0){
			//code not confirmed
			$_SESSION["unconfirmedID"] = $row['email'];
			header("Location: confirmCode.php");
			exit();
		}
		*/

		//set session variables, USER HAS LOGGED IN HERE:
		$_SESSION["fn"] = $row['firstName'];
		$_SESSION["ln"] = $row['lastName'];
		$_SESSION["id"] = $row['email'];
		mysql_close($link);
		header("Location: HomePage.php");
		exit();
	}

	else{
		$_SESSION["loginError"] = 1;
		mysql_close($link);
			header("Location:index.php");
		}

	mysql_close($link);


?>