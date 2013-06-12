<?php 
ob_start();

include_once "./Controlador_producto.php"; 
include_once "../periodo/Controlador_periodo.php"; 
include_once "../cixajax.php"; 

$cix=new CixAJAX();

if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else if (isset($_POST["accion"])) {
    $evento = $_POST["accion"];
}else {
    $evento = "Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_producto();
$contenido="Registrar_producto.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_producto();
if($rpta==0)$rpta="Dato Eliminar Correctamente";
	echo $rpta;

break;
case "Eliminar":
	$rpta=CEliminar_producto();
	/*if($rpta==0)$rpta="Dato Eliminar Correctamente";*/
	echo $rpta;
break;
case "Recuperar":
$rpta=CRecuperar_producto();
break;
case "Listar":
	session_start();
	$titulo="Listar producto";	
	$idUnidadP=$_SESSION["UnidadProductivaId"];	
	//$rptaPeriodo=CPeriodoActivo_periodo();
	//$PeriodoActivo=$rptaPeriodo["cuerpo"][0]["PeriodoId"];
	$data=CListar_producto_xUP($idUnidadP);
	$Listar_producto=$cix->ImprimeTable("tablaProducto",$data,"?","?","tablazebra");	
	$contenido="Listar_producto.php";
	@include_once($contenido);
	 //echo $Listar; 	
break;
case "Listarsimple":
$Listarsimple_producto=CListadoSimple_producto();
break;
case "Buscar":
$rpta=CBuscar_producto();
break;
case "Nuevo":	// Inactivo 
	$titulo= "Nuevo producto";
	$accionf= "?accion=Registrar";
	$contenido="Registrar_producto.php";
	require_once "../layout.php";			
break;
case "Mactualizar":
	$rptamo=CBuscar_producto($_POST["id"]);
	$ProductoId=$rptamo["cuerpo"][0]["ProductoId"];
	$ProductoVariedad=$rptamo["cuerpo"][0]["ProductoVariedad"];
	$ProductoArea=$rptamo["cuerpo"][0]["ProductoArea"];
	$ProductoProduccionAnual=$rptamo["cuerpo"][0]["ProductoProduccionAnual"];
	$ProductoMesAfloracion=$rptamo["cuerpo"][0]["ProductoMesAfloracion"];
	$ProductoMesCosecha=$rptamo["cuerpo"][0]["ProductoMesCosecha"];
	$ProductoDescripcion=$rptamo["cuerpo"][0]["ProductoDescripcion"];
	$TipoProductoId=$rptamo["cuerpo"][0]["TipoProductoId"];
	$contenido="Actualizar_producto.php";
	include_once($contenido);
break;
}
ob_flush();
?>