<?php
	session_start();

	function check(){
		if(!((isset($_SESSION["id"]))  &&  (isset($_SESSION["ln"]))  &&  (isset($_SESSION["fn"]))  )) {
			$_SESSION["check"] = 0;
			header("Location: index.php");
			exit();
		}
	}

?>