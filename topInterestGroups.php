<?php
    session_start();
?>

<?php require 'coreinc.php';?>


<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="css/HomePage Stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/commonNavHead.css" />
    <link rel="shortcut icon" href="images/favicon(2).ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon(2).ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:300 ' rel='stylesheet' type='text/css'>

    <title>Insight</title>

</head>

<body>

<?php include 'Templates/headerSignedIn.php';?>
<?php include 'Templates/naviAtHome.php';?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src = "js/homePageJS.js" ></script>
<script src = "js/common.js" ></script>

</html>