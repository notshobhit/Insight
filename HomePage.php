<?php
    require 'coreinc.php';
    check();
?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8" />
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/HomePage Stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/commonNavHead.css" />
    <link rel="shortcut icon" href="images/favicon(2).ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon(2).ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300 ' rel='stylesheet' type='text/css'>

    <title>Insight</title>

</head>

<body>

    <?php include 'Templates/headerSignedIn.php';?>

    <?php include 'Templates/naviAtHome.php';?>


    <!--
            ****
            ADDED BY SHOBHIT ON 1ST NOVEMBER
            ****
    -->
    <div class="nav-bar">
        <button class="is-active">Lorem</button>
        <button>Ipsum</button>
        <button>Dolor</button>
        <button>Candy</button>
        <button>Shops</button>
    </div>

    <!--
            ******
            END OF NEW CONTENT
            ******
    -->


    <div id="postsMain">


    <!-- 
        ***
            PHP script for displaying posts
        ***
    -->
    <?php
        require 'displayPosts.php';
        displayPosts("SELECT * FROM `posts` ORDER BY time DESC");
    
    ?>

    </div>



    <div id="overlay"></div>


    <!--Elements over 'Overlay'-->
    <div id="searchMain">
        <form name="search">
            <input type="text" placeholder="Enter Search Term..." name="searchQuery">
        </form>
    </div>

    
    <div id="updatePost">
        <textarea cols="60" rows="10" placeholder="Remember, be nice!" name="postContent" id="postContent"></textarea>
        <br /><br />
        <input type="checkbox" name="anony" id="anony" /><label for="anony">Post Anonymously</label>
        <br />
        <center><button id="textpostbutton">Post!</button></center>
    </div>


</body>
<script src = "js/jquery.js" ></script>
<script src = "js/jquery.waypoints.min.js"></script>
<script src = "js/homePageJS.js" ></script>
<script src = "js/posts.js" ></script>
<script src = "js/common.js" ></script>

</html>

<?php
    require 'endScript.php';
?>