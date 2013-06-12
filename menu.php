<?php
//session_start();
	$datamenu=$_SESSION["dataMenu"];
  	$cantele = count($datamenu["cuerpo"]);
?>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<div id='cssmenu'>
  <ul>
  <?php //m.MenuId, m.MenuNombre, m.PadreMenuId, md.ModuloNombre
  	if ($cantele > 0) {			
			for ($i = 0;$i < $cantele;$i++) {
					echo '<li><a href="Vistas/'.$datamenu["cuerpo"][$i]["URL"].'">'.$datamenu["cuerpo"][$i]["MenuNombre"].'</a></li> ';
				}
		}
  ?>
  </ul>
</div>