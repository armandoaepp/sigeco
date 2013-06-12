<?php //session_start();
	$datamenu=$_SESSION["dataMenu"];
  	$cantele = count($datamenu["cuerpo"]);
?>
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<div id='cssmenu'>
  <ul>
  <?php //m.MenuId, m.MenuNombre, m.PadreMenuId, md.ModuloNombre
  	if ($cantele > 0) {			
			for ($i = 0;$i < $cantele;$i++) {
				 $idListaM= explode("/", $datamenu["cuerpo"][$i]["URL"]);
				echo '<li ><a id="'.$idListaM[0].'" href="../'.$datamenu["cuerpo"][$i]["URL"].'">'.$datamenu["cuerpo"][$i]["MenuNombre"].'</a></li> '."\n";
				}
		}
  ?>

  </ul>
</div>