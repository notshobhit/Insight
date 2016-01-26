<?php
    session_start();
    require 'connectToLoginCreds.php';

    /*function userinfoadded(){   
        $query="INSERT INTO `Userinfo` VALUES (`email`,`occupation`,`interests`) VALUES()";
    }*/

    function check(){
        if(! ((isset($_SESSION["id"]))  &&  (isset($_SESSION["ln"]))  &&  (isset($_SESSION["fn"]))  )) {
            $_SESSION["check"] = 0;
            header("Location: index.php");
            exit();
       }
    }
?>
