<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_telefono.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_telefono();
$contenido="Registrar_telefono.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_telefono();
$rptamo=CBuscar_telefono($_GET["id"]);
$TelefonoId=$rptamo["cuerpo"][0]["TelefonoId"];
$TelefonoFijo=$rptamo["cuerpo"][0]["TelefonoFijo"];
$TelefonoMovil=$rptamo["cuerpo"][0]["TelefonoMovil"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
$AgendaId=$rptamo["cuerpo"][0]["AgendaId"];
$contenido="Actualizar_telefono.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_telefono();
header("Location: ../telefono");
break;
case "Recuperar":
$rpta=CRecuperar_telefono();
break;
case "Listar":
$titulo="Listar telefono";
$data=CListar_telefono();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_telefono=$cix->ImprimeTable("tablatelefono",$data,"?","?",5,$page);
$contenido="Listar_telefono.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_telefono=CListadoSimple_telefono();
break;
case "Buscar":
$rpta=CBuscar_telefono();
break;
case "Nuevo":
$titulo= "Nuevo telefono";
$accionf= "?accion=Registrar";
$contenido="Registrar_telefono.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_telefono($_GET["id"]);
$TelefonoId=$rptamo["cuerpo"][0]["TelefonoId"];
$TelefonoFijo=$rptamo["cuerpo"][0]["TelefonoFijo"];
$TelefonoMovil=$rptamo["cuerpo"][0]["TelefonoMovil"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
$AgendaId=$rptamo["cuerpo"][0]["AgendaId"];
$titulo= "Actualizar telefono";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_telefono.php";
require_once "../layout.php";
break;
}
ob_flush();
?>