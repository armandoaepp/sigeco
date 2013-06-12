<?php


	// connect database
	include("../config.php");
	
	// execute query in correct order 
	//(value,text)
	$query = "SELECT * FROM pais ";
	$result = mysql_query($query);
	$items = array();
	if($result &&   mysql_num_rows($result)>0) {
		while($row = mysql_fetch_array($result)) {
			$items[] = array( $row[0], $row[1]);
		}		
	}
	mysql_close();
	// encode to json
	echo(json_encode($items)); 
?>