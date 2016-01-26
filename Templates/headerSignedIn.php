<header>

	<img src="images/TranspBack.gif" onclick="location.href='HomePage.php'"></img>
</header>

<?php $profileLocation = "location.href='profilePage.php?profile=".$_SESSION['id']."'";?>

<div id="nameTag" onclick="<?php echo $profileLocation;?>">
    <img src='<?php echo "ProfilePics/".$_SESSION["id"].".jpg";?>' />
    <span id="nameSpan"><?php echo $_SESSION["fn"]." ".$_SESSION["ln"];?></span>
</div>
