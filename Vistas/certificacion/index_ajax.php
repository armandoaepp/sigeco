<?php 
ob_start();
include_once "./Controlador_certificacion.php"; 
include_once "../cixajax.php"; 
include_once "../fecha.php";
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
	$rpta=CRegistrar_certificacion();
	if($rpta==0)$rpta="Datos Registrados Correctamente";
	echo $rpta;
break;
case "Actualizar":
	$rpta=CActualizar_certificacion();
	if($rpta==0)$rpta="Registro Actulizado Correctamente";
	echo $rpta;
break;
case "Eliminar":
	$rpta=CEliminar_certificacion();
	if($rpta==0)$rpta="Registro Eliminado Correctamente";
	echo $rpta;
break;
case "Recuperar":
$rpta=CRecuperar_certificacion();
break;
case "Listar":
	session_start();
	$idparacela=$_SESSION["ParcelaId"];
	//echo "idparacela::: $idparacela";
	$data=CListar_certificacion_xParcela($idparacela);
	// nombre de la tabla , nombre de la funcion modificar , nombre de la funcion eliminar y la clases css para la tabla
	$Listar_certificacion=$cix->ImprimeTableFunciones("tablaCertificacion",$data,"ModalCertificacion","EliminarCertificacion","tablazebra");
	//$Listar_certificacion=$cix->ImprimeTable("tablacertificacion",$data,"?","?","tablazebra");
	echo $Listar_certificacion;
	/*$contenido="Listar_certificacion.php";
	include_once($contenido);*/
break;
case "Listarsimple":
$Listarsimple_certificacion=CListadoSimple_certificacion();
break;
case "Buscar":
$rpta=CBuscar_certificacion();
break;
case "Nuevo":
$titulo= "Nuevo certificacion";
$accionf= "?accion=Registrar";
$contenido="Registrar_certificacion.php";
require_once "../layout.php";
break;
case "OpenModal":
	if(isset($_POST["id"])){
	$rptamo=CBuscar_certificacion($_POST["id"]);
	$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
	$CertificacionStatus=$rptamo["cuerpo"][0]["CertificacionStatus"];
	$CertificacionEmitido=$rptamo["cuerpo"][0]["CertificacionEmitido"];
	$CertificacionFechaEmision=fechaFormatoPeru($rptamo["cuerpo"][0]["CertificacionFechaEmision"]);
	$CertificacionFechaVenci=fechaFormatoPeru($rptamo["cuerpo"][0]["CertificacionFechaVenci"]);
	$CertificacionNumero=$rptamo["cuerpo"][0]["CertificacionNumero"];
	$CertificacionNota=$rptamo["cuerpo"][0]["CertificacionNota"];
	$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
	$contenido="Actualizar_certificacion.php";	
	include_once($contenido);
	}else{$contenido="Registrar_certificacion.php";	
	include_once($contenido);}
break;
}
ob_flush();
?>