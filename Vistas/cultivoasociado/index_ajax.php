<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_cultivoasociado.php"; 
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
	$rpta=CRegistrar_cultivoasociado();
	if($rpta==0)$rpta="Registro Eliminado Correctamente";
	echo $rpta;
break;
case "Actualizar":
$rpta=CActualizar_cultivoasociado();
if($rpta==0)$rpta="Registro Actulizado Correctamente";
	echo $rpta;
break;
case "Eliminar":
	$rpta=CEliminar_cultivoasociado();
	if($rpta==0)$rpta="Registro Actulizado Correctamente";
		echo $rpta;
break;
case "Recuperar":
$rpta=CRecuperar_cultivoasociado();
break;
case "Listar":
	session_start();
	$idparacela=$_SESSION["ParcelaId"];//$_GET["idP"];	
	$data=CListar_cultivoasociado_idParcela($idparacela);	
	$Listar_cultivoasociado=$cix->ImprimeTableFunciones("tablaCultivoAsociado",$data,"ModalCultivoAsociado","EliminarCultivoAsociado","tablazebra");	
	echo $Listar_cultivoasociado;
break;
case "OpenModal":	
	if(isset($_POST["id"])){
	$rptamo=CBuscar_cultivoasociado($_POST["id"]);
	$CultivoAsociadoId=$rptamo["cuerpo"][0]["CultivoAsociadoId"];
	$CultivoAsociadoNombre=$rptamo["cuerpo"][0]["CultivoAsociadoNombre"];
	$CultivoAsociadoNota=$rptamo["cuerpo"][0]["CultivoAsociadoNota"];
	//$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];	
	$contenido="Actualizar_cultivoasociado.php";
	include_once($contenido);
	
	}else{
		$contenido="Registrar_cultivoasociado.php";	
		include_once($contenido);}

break;
}
ob_flush();
?>