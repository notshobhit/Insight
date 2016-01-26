<?php
	require 'coreinc.php';
	check();
?>

<!DOCTYPE html>

<html>


<head>
	<title>
		Insight
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="../Images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="../Images/favicon(2).ico" type="image/x-icon" />

	<!--Requires net connection: -->
	<link href='css/fontLato300.css' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/indexPage.css">
	<link rel="stylesheet" type="text/css" href="css/navigator.css">

	<script src = "js/jquery.js"></script>
	<script src="js/jquery.mobile.custom.min.js"></script>
</head>
<body>

	<div id="hamburger" status="0"></div>
	<div id="wrapper"></div>

	<nav>
		<br /><br />

		<div class="profilePreviewBox">
			<?php echo "<img src=\"..\\ProfilePics\\".$_SESSION['id'].".jpg\""?>
			<br />
			<?php echo "<h1>".$_SESSION['fn']." ".$_SESSION['ln']."</h1>"?>
		</div>

		<hr class="hrInNav" />
		<ul class="options">
			<li onclick='location.href = "logout.php";'>Logout</li>
			<li>Notifications</li>
			<li>Settings</li>
			<li>Lorem</li>
		</ul>
	</nav>


	<header></header>



	<?php
		require 'displayPosts.php';
		displayPosts("SELECT * FROM `posts` ORDER BY `time` DESC");

	/*
	<!--div class="postsMain">
		<div class="likeSide"></div>
		<div class="postsHead">
			<img src="../ProfilePics/saurabh.sharma@gmail.com.jpg">
			<p>Saurabh Sharma said:</p>
		</div><br />
		<p class="postContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
		</p>

	</div>
	*/

	?>


	<?php require 'endScript.php';?>
	<script src = "js/common.js"></script>
	<script src = "js/navigator.js"></script>
</body>
</head>
