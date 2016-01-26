<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="shortcut icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link href=' http://fonts.googleapis.com/css?family=Roboto:300 ' rel='stylesheet' type='text/css'>

	<title>Log In</title>
	
	<style>

		html, body{
	    	font-family: 'Roboto', sans-serif;
		}
	
		header {
			background-color:#ff8000;
			color:#ffffff;
			width:100%;
			position:absolute;
			top:0;
			left:0;
			background-position:10% 50%;
			background-repeat:no-repeat;
			background-size:200px 60px;
			height:80px;
			text-align:center;
			transition:0.3s;
			-webkit-transition:0.3s;
			z-index:-1;
		}

		#main{
			background-color: #deeaf6;
			padding-top: 40px;
			padding-bottom: 40px;
			font-size: 1.2em;
			position: absolute;
			width: 100%;
			left:0;
			top:80px;
			text-align: center;
		}
	</style>

</head>

<body>
	<header style="background-image:url('images/TranspBack.gif');"> </header>
	<div id = "main">
		
		<?php

			$em = $_POST["emailId"];
			$pwd = $_POST["pass"];

			//connect to sql
			$link = mysql_connect('localhost', 'root', '');
			if (!$link) {
				die('Could not connect to sql: ' . mysql_error());
			}


			//connect to db
			$sublink = mysql_select_db('insight1');
			if(!$sublink) {
				die('Could not connect to db: '. mysql_error());
			}


			$checkID = mysql_query("SELECT * FROM `login creds` WHERE email= '$em' AND password='$pwd'");

			if(mysql_num_rows($checkID) > 0){
				$row = mysql_fetch_assoc($checkID);
				
				//check if mail ID is confirmed: 
				if($row['confirmCode'] != 0){
					//code not confirmed
					$_SESSION["unconfirmedID"] = $row['email'];
					header("Location: confirmCode.php");
					exit();
				}

				//set session variables, USER HAS LOGGED IN HERE:
				$_SESSION["fn"] = $row['firstName'];
				$_SESSION["ln"] = $row['lastName'];
				$_SESSION["id"] = $row['email'];
				$_SESSION["checkinfo"]=$row['userinfoadded'];
				header("Location: HomePage.php");
				mysql_close($link);
				exit();
			}

			else{
				$_SESSION["loginError"] = 1;
				mysql_close($link);
				header("Location:index.php");
			}

		mysql_close($link);

		?>

	</div>
</body>

</html>