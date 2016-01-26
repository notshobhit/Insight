<?php
	require 'coreinc.php';
?>

<!DOCTYPE html>
<html>
<head>

	<title>Hello <?php echo $_POST["fname"]; ?></title>

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
		padding-bottom: 60px;
		font-size: 1.2em;
		position: absolute;
		width: 100%;
		left:0;
		top:80px;
		text-align: center;
	}

	</style>

	<link href=' http://fonts.googleapis.com/css?family=Roboto:300 ' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="images/favicon(2).ico" type="image/x-icon" />

</head>

<body>

	<header style="background-image:url('images/TranspBack.gif');"> </header>
	
	<div style = "display:none;">
		<?php

			$fn = $_POST["fname"];
			$ln = $_POST["lname"];
			$em = $_POST["email"];
			$pwd = $_POST["pass"];
			$sex = $_POST["sex"];
			$dd = $_POST["birthDate"];
			$mm = $_POST["birthMonth"];
			$yyyy = $_POST["birthYear"];
			$DTUite = $_POST["studentOfDTU"];
			$mailNotifs = $_POST["emailNotifs"];


			$bday = $yyyy.'/'.$mm."/".$dd;


			require "connectToLoginCreds.php";


			//check if mail ID already exists:
			$checkID = mysql_query("SELECT email FROM `login creds` WHERE email= '$em';");
			$check = 0;

			if(mysql_num_rows($checkID) > 0){
				$check = 1;
			}

			else{
				$code = rand();
				$sql = "INSERT INTO `login creds` (`firstName`, `lastName`, `email`, `password`, `sex`, `birthday`, `studentOfDTU`, `emailNotifs`, `confirmCode`) VALUES ('$fn', '$ln', '$em', '$pwd', '$sex', '$bday', '$DTUite', '$mailNotifs', '$code')";
				mysql_query($sql);
			}

			mysql_close($link);
			
		?>

	</div>


	<header style="background-image:url('images/TranspBack.gif');"> </header>

	<div id = "main">
		<?php

	
			/*$subject = "Insight Registration Confirmation";
			$body = "Confirmation code: ".$code;


			mail($em, $subject, $body, "From: svshobhitverma@gmail.com");
			*/

			if($check == 0){
				echo "<h1>Hello ".$fn." ".$ln."</h1><h3>You are one step away from being a part of the Insight family.</h3>";
				echo "We have sent a confirmation code to the address <b>".$em."</b>.<br />Enter the code when prompted the next time you log in to complete your registration.";
			}

			else{
				$_SESSION["emailAlreadyRegistered"] = 1;
				$_SESSION["emailInvalid"] = $em;
				$_SESSION["firstNameTemp"] = $fn;
				$_SESSION["lastNameTemp"] = $ln;
				header("Location:SignUpPage.php");
			}
	
		?>
	</div>


</body>

</html>