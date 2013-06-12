<?php

	
	define("DATABASE_SERVER","127.0.0.1");
	define("DATABASE_USER","root");
	define("DATABASE_PASSWORD","root");
	define("DATABASE_NAME","db_apesi03");
	

	// connecting to database
	$link = mysql_connect(DATABASE_SERVER,DATABASE_USER,DATABASE_PASSWORD);
	mysql_select_db(DATABASE_NAME,$link);
	
	
?>