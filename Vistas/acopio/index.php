<?php 
ob_start();
include_once "./Controlador_acopio.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_acopio();
$contenido="Registrar_acopio.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_acopio();
$rptamo=CBuscar_acopio($_GET["id"]);
$AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
$AcopioFecha=$rptamo["cuerpo"][0]["AcopioFecha"];
$AcopioNSacos=$rptamo["cuerpo"][0]["AcopioNSacos"];
$AcopioPesoBruto=$rptamo["cuerpo"][0]["AcopioPesoBruto"];
$AcopioHumedadEntregada=$rptamo["cuerpo"][0]["AcopioHumedadEntregada"];
$AcopioHumedadRequerida=$rptamo["cuerpo"][0]["AcopioHumedadRequerida"];
$AcopioPrecioQuintal=$rptamo["cuerpo"][0]["AcopioPrecioQuintal"];
$AcopioTara=$rptamo["cuerpo"][0]["AcopioTara"];
$BaseId=$rptamo["cuerpo"][0]["BaseId"];
$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
$AcopioQuintalesNetos=$rptamo["cuerpo"][0]["AcopioQuintalesNetos"];
$AcopioStatus=$rptamo["cuerpo"][0]["AcopioStatus"];
$AcopioEstado=$rptamo["cuerpo"][0]["AcopioEstado"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$GuiaAcopioId=$rptamo["cuerpo"][0]["GuiaAcopioId"];
$contenido="Actualizar_acopio.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_acopio();
header("Location: ../acopio");
break;
case "Recuperar":
$rpta=CRecuperar_acopio();
break;
case "Listar":
$titulo="Listar acopio";
$data=CListar_acopio();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_acopio=$cix->ImprimeTable("tablaacopio",$data,"?","?",5,$page);
$contenido="Listar_acopio.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_acopio=CListadoSimple_acopio();
break;
case "Buscar":
$rpta=CBuscar_acopio();
break;
case "Nuevo":
$titulo= "Nuevo acopio";
$accionf= "?accion=Registrar";
$contenido="Registrar_acopio.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_acopio($_GET["id"]);
$AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
$AcopioFecha=$rptamo["cuerpo"][0]["AcopioFecha"];
$AcopioNSacos=$rptamo["cuerpo"][0]["AcopioNSacos"];
$AcopioPesoBruto=$rptamo["cuerpo"][0]["AcopioPesoBruto"];
$AcopioHumedadEntregada=$rptamo["cuerpo"][0]["AcopioHumedadEntregada"];
$AcopioHumedadRequerida=$rptamo["cuerpo"][0]["AcopioHumedadRequerida"];
$AcopioPrecioQuintal=$rptamo["cuerpo"][0]["AcopioPrecioQuintal"];
$AcopioTara=$rptamo["cuerpo"][0]["AcopioTara"];
$BaseId=$rptamo["cuerpo"][0]["BaseId"];
$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
$AcopioQuintalesNetos=$rptamo["cuerpo"][0]["AcopioQuintalesNetos"];
$AcopioStatus=$rptamo["cuerpo"][0]["AcopioStatus"];
$AcopioEstado=$rptamo["cuerpo"][0]["AcopioEstado"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$GuiaAcopioId=$rptamo["cuerpo"][0]["GuiaAcopioId"];
$titulo= "Actualizar acopio";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_acopio.php";
require_once "../layout.php";
break;
}
ob_flush();
?>