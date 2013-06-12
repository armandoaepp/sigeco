<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_labor.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
	$rpta=CRegistrar_labor();
	$contenido="Registrar_labor.php";
	$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_labor();
$rptamo=CBuscar_labor($_GET["id"]);
$LaborId=$rptamo["cuerpo"][0]["LaborId"];
$TipoLaborId=$rptamo["cuerpo"][0]["TipoLaborId"];
$LaborFecha=$rptamo["cuerpo"][0]["LaborFecha"];
$LaborJornalesFamiliar=$rptamo["cuerpo"][0]["LaborJornalesFamiliar"];
$LaborJornalesContratado=$rptamo["cuerpo"][0]["LaborJornalesContratado"];
$LaborCostoUnitarioJornal=$rptamo["cuerpo"][0]["LaborCostoUnitarioJornal"];
$LaborArea=$rptamo["cuerpo"][0]["LaborArea"];
$LaborNota=$rptamo["cuerpo"][0]["LaborNota"];
$LaborTipo=$rptamo["cuerpo"][0]["LaborTipo"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$contenido="Actualizar_labor.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_labor();
header("Location: ../labor");
break;
case "Recuperar":
$rpta=CRecuperar_labor();
break;
case "Listar":
$titulo="Listar labor";
$data=CListar_labor();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_labor=$cix->ImprimeTable("tablalabor",$data,"?","?",5,$page);
$contenido="Listar_labor.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_labor=CListadoSimple_labor();
break;
case "Buscar":
$rpta=CBuscar_labor();
break;
case "Nuevo":
$titulo= "Nuevo labor";
$accionf= "?accion=Registrar";
$contenido="Registrar_labor.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_labor($_GET["id"]);
$LaborId=$rptamo["cuerpo"][0]["LaborId"];
$TipoLaborId=$rptamo["cuerpo"][0]["TipoLaborId"];
$LaborFecha=$rptamo["cuerpo"][0]["LaborFecha"];
$LaborJornalesFamiliar=$rptamo["cuerpo"][0]["LaborJornalesFamiliar"];
$LaborJornalesContratado=$rptamo["cuerpo"][0]["LaborJornalesContratado"];
$LaborCostoUnitarioJornal=$rptamo["cuerpo"][0]["LaborCostoUnitarioJornal"];
$LaborArea=$rptamo["cuerpo"][0]["LaborArea"];
$LaborNota=$rptamo["cuerpo"][0]["LaborNota"];
$LaborTipo=$rptamo["cuerpo"][0]["LaborTipo"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$titulo= "Actualizar labor";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_labor.php";
require_once "../layout.php";
break;
}
ob_flush();
?>