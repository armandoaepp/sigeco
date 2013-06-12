<?php 
session_start();
include_once "../cixajax.php"; 
$cix=new CixAJAX();					
include_once "../familiar/Controlador_familiar.php"; 

		$ProductorId=$_SESSION["ProductorId"];
	$datafamiliar=CListar_familiar_productor($ProductorId);
	$Listar_familiar=$cix->ImprimeTable("tablaFamiliar",$datafamiliar,"?","?","tablazebra");	
	
	 echo $Listar_familiar;  
?>
<script type="text/javascript">
$(document).ready(function(){
	
	$('#tablaFamiliar td:nth-child(3),#tablaFamiliar th:nth-child(3)').hide();
		
  });
  </script>