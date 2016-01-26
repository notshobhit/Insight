<?php
	require 'coreinc.php';
?>

<!DOCTYPE html>
<html>
<head>

	<title>Hello <?php echo $_POST["fname"]; ?></title>

	<link href=' http://fonts.googleapis.com/css?family=Roboto:300 ' rel='stylesheet' type='text/css'>
	<link href=' css/commonNavHead.css' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="images/favicon(2).ico" type="image/x-icon" />


	<style>

		html, body{
		    font-family: 'Roboto', sans-serif;

		}

	</style>

</head>

<body>

	<header style="background-image:url('images/TranspBack.gif');"> </header>
	

	<header style="background-image:url('images/TranspBack.gif');"> </header>

	<div id = "main">
		<?php

	
			$subject = "Insight Registration Confirmation";
			$body = "Confirmation code: ".$code;


			mail($em, $subject, $body, "From: svshobhitverma@gmail.com");


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