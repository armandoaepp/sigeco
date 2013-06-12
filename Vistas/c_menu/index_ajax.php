<?php 
ob_start();
header("Content-Type: text/html;charset=utf-8");
include_once "./Controlador_c_menu.php"; 
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
$rpta=CRegistrar_c_menu();
$contenido="Registrar_c_menu.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_c_menu();
$rptamo=CBuscar_c_menu($_GET["id"]);
$MenuId=$rptamo["cuerpo"][0]["MenuId"];
$MenuNombre=$rptamo["cuerpo"][0]["MenuNombre"];
$MenuUrl=$rptamo["cuerpo"][0]["MenuUrl"];
$PadreMenuId=$rptamo["cuerpo"][0]["PadreMenuId"];
$ModuloId=$rptamo["cuerpo"][0]["ModuloId"];
$MenuEstado=$rptamo["cuerpo"][0]["MenuEstado"];
$contenido="Actualizar_c_menu.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_c_menu();
header("Location: ../c_menu");
break;
case "Recuperar":
$rpta=CRecuperar_c_menu();
break;
case "Listar":
	$data=CListar_c_menu();
	$Listar_c_menu=$cix->ImprimeTable("tablac_menu",$data,"?","?",5,$page);
	$contenido="Listar_c_menu.php";
	@include_once($contenido);
break;
break;
case "Buscar":
$rpta=CBuscar_c_menu();
break;
break;
case "Mactualizar":
$rptamo=CBuscar_c_menu($_GET["id"]);
$MenuId=$rptamo["cuerpo"][0]["MenuId"];
$MenuNombre=$rptamo["cuerpo"][0]["MenuNombre"];
$MenuUrl=$rptamo["cuerpo"][0]["MenuUrl"];
$PadreMenuId=$rptamo["cuerpo"][0]["PadreMenuId"];
$ModuloId=$rptamo["cuerpo"][0]["ModuloId"];
$MenuEstado=$rptamo["cuerpo"][0]["MenuEstado"];
$titulo= "Actualizar c_menu";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_c_menu.php";
require_once "../layout.php";
break;
}
ob_flush();
?>