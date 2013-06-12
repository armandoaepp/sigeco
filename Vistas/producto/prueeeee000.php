<?php
session_start();
include_once "./Controlador_producto.php"; 
include_once("cix.php");
	$titulo="Listar producto";	
	$idUnidadP=$_SESSION["UnidadProductivaId"];				 
	$data=CListar_producto_xUP($idUnidadP);
	//$Listar_producto=$cix->ImprimeTable("tablaProducto",$data,"?","?","tablazebra");
	$Listar_producto=ImprimeTableP("tablaProducto",$data,"dfghdfg","gfhdfg",5,1,5,"");
	echo $Listar_producto;

?>