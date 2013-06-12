<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_georeferencia.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_georeferencia();
$contenido="Registrar_georeferencia.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_georeferencia();
$rptamo=CBuscar_georeferencia($_GET["id"]);
$GeoReferenciaId=$rptamo["cuerpo"][0]["GeoReferenciaId"];
$GeoReferenciaLatitud=$rptamo["cuerpo"][0]["GeoReferenciaLatitud"];
$GeoReferenciaLongitud=$rptamo["cuerpo"][0]["GeoReferenciaLongitud"];
$GeoReferenciaAltitud=$rptamo["cuerpo"][0]["GeoReferenciaAltitud"];
$GeoReferenciaTipoGps=$rptamo["cuerpo"][0]["GeoReferenciaTipoGps"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$contenido="Actualizar_georeferencia.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_georeferencia();
header("Location: ../georeferencia");
break;
case "Recuperar":
$rpta=CRecuperar_georeferencia();
break;
case "Listar":
$titulo="Listar georeferencia";
$data=CListar_georeferencia();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_georeferencia=$cix->ImprimeTable("tablageoreferencia",$data,"?","?",5,$page);
$contenido="Listar_georeferencia.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_georeferencia=CListadoSimple_georeferencia();
break;
case "Buscar":
$rpta=CBuscar_georeferencia();
break;
case "Nuevo":
$titulo= "Nuevo georeferencia";
$accionf= "?accion=Registrar";
$contenido="Registrar_georeferencia.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_georeferencia($_GET["id"]);
$GeoReferenciaId=$rptamo["cuerpo"][0]["GeoReferenciaId"];
$GeoReferenciaLatitud=$rptamo["cuerpo"][0]["GeoReferenciaLatitud"];
$GeoReferenciaLongitud=$rptamo["cuerpo"][0]["GeoReferenciaLongitud"];
$GeoReferenciaAltitud=$rptamo["cuerpo"][0]["GeoReferenciaAltitud"];
$GeoReferenciaTipoGps=$rptamo["cuerpo"][0]["GeoReferenciaTipoGps"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$titulo= "Actualizar georeferencia";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_georeferencia.php";
require_once "../layout.php";
break;
}
ob_flush();
?>