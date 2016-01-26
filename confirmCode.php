<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="shortcut icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link href=' http://fonts.googleapis.com/css?family=Lato:300 ' rel='stylesheet' type='text/css'>
	<link href="css/commonNavHead.css" rel="stylesheet" type="text/css" />
	<title>Log In</title>


	<style>


	html, body{
		font-family: 'Lato', sans-serif;
	}

	p#notif{
		color:#ff0000;
	}

	input.input-styled{
		box-sizing: border-box;
		width:30%;
		height: 40px;
		background-color: rgba(0,0,0,0);
		border: none;
		border-bottom: 2px solid #ccc;
		font-size: 20px;
		font-family: 'Roboto', sans-serif;
		padding-left: 10px;
		transition:0.3s;
		outline:none;*/
	}

	input.input-styled:focus{
		border-bottom: 2px solid #ff8000;
	}

	.button-styled{
		width:10%;
		height: 30px;
		border:none;
		font-size: 1.3em;
		color:#fff;
		background-color: rgba(225, 80, 0, 0.5);
		transition:0.3s;
		font-family: 'Roboto', sans-serif;
		outline: none;
	}

	.button-styled:focus, .button-styled:hover{
		background-color: rgba(225, 80, 0, 1);
	}


	</style>
</head>
<body>

	<header><img src="images/TranspBack.gif" onclick="location.href='index.php'" /></header>

	<?php
		/*
		require "connectToLoginCreds.php";

		if(!isset($_SESSION["unconfirmedID"])){
			session_unset();
			session_destroy();
			mysql_close($link);
			header("Location: index.php");
			exit();
		}


		$em_unconf = $_SESSION["unconfirmedID"];

		$unconfirmedCreds = mysql_fetch_assoc( mysql_query("SELECT * FROM `login creds` WHERE email= '$em_unconf'") );

		$_SESSION["correct_code"] = $unconfirmedCreds['confirmCode'];
		mysql_close($link);
	*/
	?>


	<center>
	<h3>Enter confirmation code for email ID: <b><?php //echo $em_unconf;?></b> </h3>
		<br />
		<p id = "notif"> </p>
		<form action = 'conf2.php' method = 'post'>

			<input type = "text" name="code" class="input-styled"></input><br /><br />
			<input type="submit" value="Go" class="button-styled" />
		</form>

	</center>


</body>
<script>
<?php
	/*if($_SESSION["check2"] == 1)
		echo "document.getElementById('notif').innerHTML = 'Entered code was wrong. Please try again';";
*/
?>
</script>


</html>
