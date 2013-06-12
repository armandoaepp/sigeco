<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_tipoproducto.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_tipoproducto();
$contenido="Registrar_tipoproducto.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_tipoproducto();
$rptamo=CBuscar_tipoproducto($_GET["id"]);
$TipoProductoId=$rptamo["cuerpo"][0]["TipoProductoId"];
$TipoProducto=$rptamo["cuerpo"][0]["TipoProducto"];
$contenido="Actualizar_tipoproducto.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_tipoproducto();
header("Location: ../tipoproducto");
break;
case "Recuperar":
$rpta=CRecuperar_tipoproducto();
break;
case "Listar":
$titulo="Listar tipoproducto";
$data=CListar_tipoproducto();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_tipoproducto=$cix->ImprimeTableP("tablatipoproducto",$data,"?","?",5,$page);
$contenido="Listar_tipoproducto.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_tipoproducto=CListadoSimple_tipoproducto();
break;
case "Buscar":
$rpta=CBuscar_tipoproducto();
break;
case "Nuevo":
$titulo= "Nuevo tipoproducto";
$accionf= "?accion=Registrar";
$contenido="Registrar_tipoproducto.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_tipoproducto($_GET["id"]);
$TipoProductoId=$rptamo["cuerpo"][0]["TipoProductoId"];
$TipoProducto=$rptamo["cuerpo"][0]["TipoProducto"];
$titulo= "Actualizar tipoproducto";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_tipoproducto.php";
require_once "../layout.php";
break;
}
ob_flush();
?>