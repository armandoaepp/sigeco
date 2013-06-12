<?php session_start();	?>
<link href="../css/menu_up.css"rel="stylesheet" type="text/css" />
<div id="menu_interno">
  <ul id='navi'>
  <?php 
  $idUser=$_SESSION["idUsuario"];
	include_once("../c_menutipousuario/Controlador_c_menutipousuario.php");	
	$dataSubMenu=CListar_c_menutipousuario_GenerarSubMenu_xPadre(11,$idUser);
$cantele = count($dataSubMenu["cuerpo"]);
  	if ($cantele > 0) {			
	   for ($i = 0;$i < $cantele;$i++) {
		  $idLista= explode(".", $dataSubMenu["cuerpo"][$i]["URL"]);
		echo '<li id="'.$idLista[0].'"><a href="./'.$dataSubMenu["cuerpo"][$i]["URL"].'">'.$dataSubMenu["cuerpo"][$i]["MenuNombre"].'</a></li> '."\n";
		}
	}
  ?>
  </ul>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cssmenu ul li").removeClass("selected");
	    $("#cssmenu ul #m_unidadproductiva").addClass("selected");
	 });
</script>