<?php 
ob_start();
header("Content-Type: text/html;charset=utf-8");// para uniformizar los datos en json problemas de las tildes
include_once "./Controlador_controlfitosanitario.php"; 
include_once "../cixajax.php"; 
include_once "../fecha.php"; 
$cix=new CixAJAX();
if(isset($_POST["accion"])){
$evento=$_POST["accion"];
} else if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_controlfitosanitario();
if($rpta==0){
		$rpta= "Datos Registrados Correctamente ";
		}
	echo $rpta;
break;
case "Actualizar":
	$rpta=CActualizar_controlfitosanitario();
	if($rpta==0){
		$rpta= "Datos Actualizados Correctamente";
		}
	echo $rpta;
break;
case "Eliminar":
$rpta=CEliminar_controlfitosanitario();
if($rpta==0)$rpta="Registro Eliminado Correctamente";
	echo $rpta;
break;
case "Recuperar":
$rpta=CRecuperar_controlfitosanitario();
break;
case "Listar":
$titulo="Listar controlfitosanitario";
$data=CListar_controlfitosanitario();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_controlfitosanitario=$cix->ImprimeTable("tablacontrolfitosanitario",$data,"?","?",5,$page);
$contenido="Listar_controlfitosanitario.php";
require_once "../layout.php";
break;
case "ListarControxParcela":
		session_start();
		$idparacela=$_SESSION["ParcelaId"];
		$data=CBuscar_controlfitosanitario_xIdParcela($idparacela);
		//$data=CBuscar_controlfitosanitario_xIdParcela(4);
		$Listar_controlfitosanitario=$cix->ImprimeTable("TablaControl",$data,"ok","ok","tablazebra");
		echo $Listar_controlfitosanitario;
break;
case "Buscar":
$rpta=CBuscar_controlfitosanitario();
echo $rpta;
break;
case "ListarDetalleControl":
	$rptamo=CBuscar_controlfitosanitario($_POST["id"]);
	//$ControlFitosanitarioId=$rptamo["cuerpo"][0]["ControlFitosanitarioId"];
	$ControlFitosanitarioDescripcion=$rptamo["cuerpo"][0]["ControlFitosanitarioDescripcion"];
	$ControlFitosanitarioCantidad=$rptamo["cuerpo"][0]["ControlFitosanitarioCantidad"];
	$ControlFitosanitarioCostoUnitario=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoUnitario"];
	$ControlFitosanitarioJornalFamiliar=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalFamiliar"];
	$ControlFitosanitarioJornalContratado=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalContratado"];
	$ControlFitosanitarioCostoJornal=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoJornal"];
	//$LaborId=$rptamo["cuerpo"][0]["LaborId"];
	$ControlFitosanitarioFecha=fechaFormatoPeru($rptamo["cuerpo"][0]["ControlFitosanitarioFecha"]);
	$contenido="Listar_controlfitosanitario_detalle.php";	
	include_once($contenido);
break;
case "Mactualizar":
$rptamo=CBuscar_controlfitosanitario($_POST["id"]);
$ControlFitosanitarioId=$rptamo["cuerpo"][0]["ControlFitosanitarioId"];
$ControlFitosanitarioDescripcion=$rptamo["cuerpo"][0]["ControlFitosanitarioDescripcion"];
$ControlFitosanitarioCantidad=$rptamo["cuerpo"][0]["ControlFitosanitarioCantidad"];
$ControlFitosanitarioCostoUnitario=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoUnitario"];
$ControlFitosanitarioJornalFamiliar=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalFamiliar"];
$ControlFitosanitarioJornalContratado=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalContratado"];
$ControlFitosanitarioCostoJornal=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoJornal"];
$LaborId=$rptamo["cuerpo"][0]["LaborId"];
$ControlFitosanitarioFecha=fechaFormatoPeru($rptamo["cuerpo"][0]["ControlFitosanitarioFecha"]);
$contenido="Actualizar_controlfitosanitario.php";
include_once($contenido);
break;
}
ob_flush();
?>