<?php		
	//connect to sql
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect to sql: ' . mysql_error());
	}


	//connect to db
	$sublink = mysql_select_db('insight1');
	if(!$sublink) {
		die('Could not connect to db: '. mysql_error());
	}
?>