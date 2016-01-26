<?php 
	require 'coreinc.php';
	check();
?>

<!DOCTYPE html>
<html>
<head>

    <?php
        $u = $_GET['profile'];
        
        $query = "SELECT * FROM `login creds` WHERE `email` = '$u'";
        
        $res = mysql_query($query);

        //invalid user, user does not exist:
        if (mysql_num_rows($res) == 0){
            //Do something
            header("Location: index.php");
            exit(0);
        }

        $creds = mysql_fetch_assoc($res);

        $name = $creds['firstName']." ".$creds['lastName'];
    ?>

    <link rel="stylesheet" type="text/css" href="css/commonNavHead.css" />
    <link rel="stylesheet" type="text/css" href="css/profilePageCSS.css" />
    <link rel="stylesheet" type="text/css" href="css/HomePage Stylesheet.css" />
    <link rel="shortcut icon" href="Images/favicon(2).ico" type="image/x-icon" />
    <link rel="icon" href="Images/favicon(2).ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300 ' rel='stylesheet' type='text/css'>

    <title><?php echo $name?></title>

</head>

<body>

    <?php include 'Templates/headerSignedIn.php';?>
    <?php include 'Templates/naviAtHome.php';?>

    <?php
        if($u == $_SESSION['id'])
            echo "<div id = \"editButton\" status=\"0\"><img src=\"Images/tools.svg\"></div>"
    ?>

    <div id = "profilePic" style="background-image:url('ProfilePics/<?php echo $u;?>.jpg');">
    </div>

    <h1 id = "profileName"><?php echo $name;?></h1>

    <div id = "profileQuote">
        "Lorem Ipsum Dolor."
    </div>




    <div id = "profileActions"></div>

    <br />

    <?php

    /*if($_SESSION["checkinfo"]==0)
    	echo "pls add info";

    else
    */
    echo 
    '<center>
    	<div id = "profileTopRow">

            <div class = "profileInfoBox">
                <textarea readonly="readonly" class="test" rows="1">Occupation</textarea><hr>
                <textarea class="test test2" rows="2">Student at Delhi Technological University</textarea>
            </div>

    		<div class = "profileInfoBox">
                <textarea readonly="readonly" class="test" rows="1">From</textarea><hr>
    			<textarea readonly="readonly" class="test test2" rows="2">New Delhi, India</textarea>
    		</div>



    		<div class = "profileInfoBox">
                <textarea readonly="readonly" class="test" rows="1">Interests</textarea><hr>
    			<textarea readonly="readonly" class="test test2" rows="2">Programming, Basketball, Guitar</textarea>
    		</div>

    		<div class = "profileInfoBox">
                <textarea readonly="readonly" class="test" rows="1">Birthday</textarea><hr>
    			<textarea readonly="readonly" class="test test2" rows="2">27th December 1996</textarea>
    		</div>
    		

    	</div>
    </center>';?>

    <div id = "profileSecondRow">
    	<span id = "heading">Activity</span>
    	<!--div id = "leftArrow" class = "arrow"></div>
    	<div id = "rightArrow" class = "arrow"></div-->
    </div>

    <div id = "mainBody"></div>
    <?php
        require 'displayPosts.php';
        
        if($_SESSION['id'] == $u)
            displayPosts("SELECT * FROM `posts` WHERE `poster` = '$u' ORDER BY `time` DESC");
        
        else
        displayPosts("SELECT * FROM `posts` WHERE `poster` = '$u' AND `anony` = 0 ORDER BY `time` DESC");
    ?>
    <br /><br />
    <div id="overlay"></div>


    <div id="searchMain">
        <form name="search">
        <input type="text" placeholder="Enter Search Term..." name="searchQuery">
        </form>
    </div>





</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src = "js/profilePageJS.js" ></script>
<script src = "js/posts.js" ></script>
<script src = "js/common.js" ></script>
</html>