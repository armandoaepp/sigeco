<?php 
ob_start();
include_once "./Controlador_parceladetalle.php"; 
include_once "../parcela/Controlador_parcela.php"; 
include_once "../fecha.php";
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
	$rpta=CRegistrar_parceladetalle();
	/*if($rpta==0)$rpta="Datos Registrados Correctamente";*/
	echo $rpta;
	
break;
case "Actualizar":
	$rpta=CActualizar_parceladetalle();
	//if($rpta==0)$rpta="Datos Actualizados Correctamente";
	echo $rpta;
	break;
case "Eliminar":
	$rpta=CEliminar_parceladetalle();
	if($rpta==0)$rpta="Registro Eliminado Correctamente";
		echo $rpta;

break;
case "Recuperar":
$rpta=CRecuperar_parceladetalle();
break;
case "Listar":
	session_start();
	$idparacela=$_SESSION["ParcelaId"];//$_GET["idP"];	
	$idUnidadP=$_SESSION["UnidadProductivaId"];	
	$data=CListar_parcela_productos($idUnidadP,$idparacela);	
	$Listar_parceladetalle=$cix->ImprimeTableFunciones("tablaProdcutosPrincipales",$data,"ModalProductosPrincipales","EliminarProductoPrincipal","tablazebra");
	//$Listar_certificacion=$cix->ImprimeTable("tablacertificacion",$data,"?","?","tablazebra");
	echo $Listar_parceladetalle;

break;
case "OpenModal":	
	if(isset($_POST["id"])){
	$rptamo=CBuscar_parceladetalle($_POST["id"]);
	$ParcelaDetalleId=$rptamo["cuerpo"][0]["ParcelaDetalleId"];
	$ProductoId=$rptamo["cuerpo"][0]["ProductoId"];
	$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
	$area=explode(' ', $rptamo["cuerpo"][0]["ParcelaDetalleArea"]);
	$ParcelaDetalleArea=$area[0];//$rptamo["cuerpo"][0]["ParcelaDetalleArea"];
	$ParcelaDetalleFechaSiembra=fechaFormatoPeru($rptamo["cuerpo"][0]["ParcelaDetalleFechaSiembra"]);
	$DistanciaSurcos=$rptamo["cuerpo"][0]["DistanciaSurcos"];
	$DistanciaPlantas=$rptamo["cuerpo"][0]["DistanciaPlantas"];
	$TipoSiembra=$rptamo["cuerpo"][0]["TipoSiembra"];
	$contenido="Actualizar_parceladetalle.php";	
	include_once($contenido);
	}else{
		$contenido="Registrar_parceladetalle.php";	
	include_once($contenido);}
break;
}
ob_flush();
?>