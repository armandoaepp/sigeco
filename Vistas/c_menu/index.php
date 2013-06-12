<?php 
ob_start();
include_once "./Controlador_c_menu.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
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
$titulo="Listar c_menu";
$data=CListar_c_menu();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_c_menu=$cix->ImprimeTable("tablac_menu",$data,"?","?",5,$page);
$contenido="Listar_c_menu.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_c_menu=CListadoSimple_c_menu();
break;
case "Buscar":
$rpta=CBuscar_c_menu();
break;
case "Nuevo":
$titulo= "Nuevo c_menu";
$accionf= "?accion=Registrar";
$contenido="Registrar_c_menu.php";
require_once "../layout.php";
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