<?php 
session_start();
	echo "Cerrando Sesión...";
	echo "<META HTTP-EQUIV = REFRESH CONTENT='2 ;URL=../login.php'>";
	
session_destroy();
?>