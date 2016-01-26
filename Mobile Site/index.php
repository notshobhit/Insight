<?php 
	session_start();
?>

<!DOCTYPE html>

<html>


<head>
	<title>
		Insight
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="shortcut icon" href="../Images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="../Images/favicon(2).ico" type="image/x-icon" />

	<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/indexPage.css">
	<script src = "js/jquery.js"></script>

</head>


<body>
	
	<header></header>
	
	<h1>Namaste!</h1>
	
	<?php
		if(isset($_SESSION["check"])){
			echo "<p style = \"color:red;\">Please login to access the page</p>";
			session_unset();
			session_destroy();
		}
	?>

	<?php
		if(isset($_SESSION["loginError"])){
			echo "<p style=\"color:red;\">Wrong email id or password</p>";
			session_unset();
			session_destroy();
		}
	?>
	
	
	<form method="post" action="login.php">
		<input type="email" placeholder="Email ID" class="loginInput" name="emailId" /><br /><br />
		<input type="password" placeholder="Password" class="loginInput" name="pass" /><br /><br />
		<input type="submit" value="Log In" class="indexButton" />
	</form>
	<br />
	<hr style="width: 80%;" />
	<br />
	
	<button class="indexButton">Sign Up</button>
	<br />
	<script src = "js/common.js"></script>
</body>
</html>