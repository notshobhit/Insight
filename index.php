<?php
	session_start();
?>

<?php
    if( ((isset($_SESSION["id"]))  &&  (isset($_SESSION["ln"]))  &&  (isset($_SESSION["fn"]))  )) {
        header("Location: HomePage.php");
        exit();
    }
?>

<!DOCTYPE html>

<html>


<head>
	<title>
		Insight
	</title>
	<link rel="shortcut icon" href="Images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="Images/favicon(2).ico" type="image/x-icon" />

	<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	
	<link href='css/newIndex.css' rel='stylesheet' type='text/css' />
	
	<script src = "js/jquery.js"></script>
	<script src = "js/jquery.waypoints.min.js"></script>
	<script type='text/javascript' src="//wurfl.io/wurfl.js"></script>
	<script>
		if(WURFL.is_mobile)
			location.href='Mobile Site/';
	</script>

</head>

<body>
	<video autoplay loop muted id="bgvid2">
    	<source src="Images/indexBack.mp4" type="video/mp4">
	</video>
	<div id = "loginMain">
		<div id="header"><img src="Images/TranspBack.gif" /></div>
		<br /><br /><br />
		<form name="loginForm" action="login.php" method="post">
			<input type="text" class="loginTextbox" placeholder="E-Mail ID" name="emailId"><br /><br /><br />
			<input type="password" class="loginTextbox" placeholder="Password" name="pass"><br /><br /><br />
			<input type="submit" value="Log In" class="buttonInMain">
		</form>
		<br />
		<hr style="width:80%"/>
		<br />
		<button class="buttonInMain" onclick="location.href='SignUpPage.php'">Sign Up</button>

	</div>
	<br /><br />
	<div class="about">
		<div class="content">	
			<h1>Why Insight?</h1>
			<h3>Communicate. Speak up. Share.</h3>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus molestie metus, sit amet pretium neque lacinia id. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam pellentesque tempor lorem, non facilisis eros eleifend sit  tempus massa. Pellentesque in est erat. Quisque congue nulla at eros varius, quis efficitur ex cursus.
			</p>
		</div>
	</div>

	<div class="about">
		<div class="content">
			<h1>Our Team</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus molestie metus, sit amet pretium neque lacinia id. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam pellentesque tempor lorem, non facilisis eros eleifend sit  tempus massa. Pellentesque in est erat. Quisque congue nulla at eros varius, quis efficitur ex cursus.
			</p>
		</div>
	</div>

	<?php
		if(isset($_SESSION["check"])){
			echo "<script>alert('Please log in to access the page');</script>";
			session_unset();
			session_destroy();
		}

		if(isset($_SESSION["loginError"])){
			echo "<script>alert('Email ID or password incorrect');</script>";
			session_unset();
			session_destroy();
		}
	?>

	<script src="js/IndexScript.js"></script>
</body>
</html>