<?php
	//Close the links to database, that were opened(possibly) by connectToLoginCreds.php

	if(isset($link))
		mysql_close($link);
?>