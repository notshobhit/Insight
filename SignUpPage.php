<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link  rel="stylesheet" type="text/css" href="css/SignUpPage CSS.css" />
	<link rel="shortcut icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link rel="icon" href="images/favicon(2).ico" type="image/x-icon" />
	<link href=' http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300' rel='stylesheet' type='text/css'>

	<title>Sign Up</title>
	
</head>


<body>
	<script src="js/SignUp.js"></script>


	<header style="background-image:url('images/TranspBack.gif');"> </header>
	<div id="main">

		<h1>Sign Up!</h1>
		<p id="intro">
			Welcome to Insight! A social network to connect the DTU family. Here, you can share any information about our college or any other miscellaneous topic. Signing up is easy and fast. Just fill in your details and you're good to go!
		</p>
		<div id = "notif"><?php if(isset($_SESSION["emailAlreadyRegistered"]) ) echo "The email ID ".$_SESSION['emailInvalid']." is already registered with another account."?></div>
		<br><br>


		<form name="signUpForm" onsubmit="return validateForm()" method = "post" action="signUp.php">

			<input id="fnametextbox" type="text" name="fname" placeholder="First Name" <?php if(isset($_SESSION["firstNameTemp"]) ) echo "value = ".$_SESSION["firstNameTemp"];?>>
			<input type="text" id="lnametextbox" name="lname" placeholder="Surname" <?php if(isset($_SESSION["lastNameTemp"]) ) echo "value = ".$_SESSION["lastNameTemp"];?>>
			<br><br>
			<input type="email" id="emailidtextbox" name="email" placeholder="Email ID">
			<br><br>
			<input type="password" id="pass1textbox" name="pass" placeholder="New Password">
			<br><br>
			<input type="password" id="pass2textbox" name="passConfirm" placeholder="Confirm Password">
			<br><br>


			Sex:<br><br>
			<input id="femaleRadio" type="radio" class="sexSwitch" name="sex" value="female">
			<label for="femaleRadio" style="margin-right:42%;">
				Female
			</label>
			<input id="maleRadio" type="radio" class="sexSwitch" name="sex" value="male" checked>
			<label for="maleRadio">
				Male
			</label>


			<br><br><br>


			Birthday: <br>

			<select name="birthDate" class="selecte" id="selectDate">
				<option value="0" disabled selected>Date</option>
				<?php
					for($val = 1; $val<32; $val++){
						echo "<option value='".$val."'>".$val."</option>";
					}

				?>
			</select>

			<select name="birthMonth" class="selecte" id="selectMonth">

				<option value="0" disabled selected>Month</option>
				<option value="01">January</option>
				<option value="02">February</option>
				<option value="03">March</option>
				<option value="04">April</option>
				<option value="05">May</option>
				<option value="06">June</option>
				<option value="07">July</option>
				<option value="08">August</option>
				<option value="09">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>

			</select>

			<select name="birthYear" class="selecte" id="selectYear">

				<option value="0" disabled selected>Year</option>
				
				<?php
					for($val = 1985; $val<1998; $val++){
						echo "<option value='".$val."'>".$val."</option>";
					}
				?>

			</select>

			<br><br><br>

			<p id="tex1">Are you a student of DTU?</p>

			<input id="toggle1" type="checkbox" class="inputThing" name="studentOfDTU" value="1">
			<label for="toggle1">
				<div class="round1">
				</div>
			</label>


			<p id="tex2">Would you like to receive E-mail notifications?</p>

			<input id="toggle2" type="checkbox" class="inputThing" name="emailNotifs" value="1">
			<label for="toggle2" style="margin-top:15px;">
				<div class="round1">
				</div>
			</label>


			<br>
			<br>
			<input type="submit" value="Go!" >

		</form>

	</div>
<?php
	session_unset();
	session_destroy();
?>
</body>

</html>