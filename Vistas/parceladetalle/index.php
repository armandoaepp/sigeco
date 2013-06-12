<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_parceladetalle.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_parceladetalle();
$contenido="Registrar_parceladetalle.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_parceladetalle();
$rptamo=CBuscar_parceladetalle($_GET["id"]);
$ParcelaDetalleId=$rptamo["cuerpo"][0]["ParcelaDetalleId"];
$UnidadProductivaProductoId=$rptamo["cuerpo"][0]["UnidadProductivaProductoId"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$ParcelaDetalleArea=$rptamo["cuerpo"][0]["ParcelaDetalleArea"];
$ParcelaDetalleFechaSiembra=$rptamo["cuerpo"][0]["ParcelaDetalleFechaSiembra"];
$DistanciaSurcos=$rptamo["cuerpo"][0]["DistanciaSurcos"];
$DistanciaPlantas=$rptamo["cuerpo"][0]["DistanciaPlantas"];
$TipoSiembra=$rptamo["cuerpo"][0]["TipoSiembra"];
$contenido="Actualizar_parceladetalle.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_parceladetalle();
header("Location: ../parceladetalle");
break;
case "Recuperar":
$rpta=CRecuperar_parceladetalle();
break;
case "Listar":
$titulo="Listar parceladetalle";
$data=CListar_parceladetalle();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_parceladetalle=$cix->ImprimeTable("tablaparceladetalle",$data,"?","?",5,$page);
$contenido="Listar_parceladetalle.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_parceladetalle=CListadoSimple_parceladetalle();
break;
case "Buscar":
$rpta=CBuscar_parceladetalle();
break;
case "Nuevo":
$titulo= "Nuevo parceladetalle";
$accionf= "?accion=Registrar";
$contenido="Registrar_parceladetalle.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_parceladetalle($_GET["id"]);
$ParcelaDetalleId=$rptamo["cuerpo"][0]["ParcelaDetalleId"];
$UnidadProductivaProductoId=$rptamo["cuerpo"][0]["UnidadProductivaProductoId"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$ParcelaDetalleArea=$rptamo["cuerpo"][0]["ParcelaDetalleArea"];
$ParcelaDetalleFechaSiembra=$rptamo["cuerpo"][0]["ParcelaDetalleFechaSiembra"];
$DistanciaSurcos=$rptamo["cuerpo"][0]["DistanciaSurcos"];
$DistanciaPlantas=$rptamo["cuerpo"][0]["DistanciaPlantas"];
$TipoSiembra=$rptamo["cuerpo"][0]["TipoSiembra"];
$titulo= "Actualizar parceladetalle";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_parceladetalle.php";
require_once "../layout.php";
break;
}
ob_flush();
?>