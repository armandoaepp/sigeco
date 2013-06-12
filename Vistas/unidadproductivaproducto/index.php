<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_unidadproductivaproducto.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_unidadproductivaproducto();
$contenido="Registrar_unidadproductivaproducto.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_unidadproductivaproducto();
$rptamo=CBuscar_unidadproductivaproducto($_GET["id"]);
$UnidadProductivaProductoId=$rptamo["cuerpo"][0]["UnidadProductivaProductoId"];
$ProductoId=$rptamo["cuerpo"][0]["ProductoId"];
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$contenido="Actualizar_unidadproductivaproducto.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_unidadproductivaproducto();
header("Location: ../unidadproductivaproducto");
break;
case "Recuperar":
$rpta=CRecuperar_unidadproductivaproducto();
break;
case "Listar":
$titulo="Listar unidadproductivaproducto";
$data=CListar_unidadproductivaproducto();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_unidadproductivaproducto=$cix->ImprimeTable("tablaunidadproductivaproducto",$data,"?","?",5,$page);
$contenido="Listar_unidadproductivaproducto.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_unidadproductivaproducto=CListadoSimple_unidadproductivaproducto();
break;
case "Buscar":
$rpta=CBuscar_unidadproductivaproducto();
break;
case "Nuevo":
$titulo= "Nuevo unidadproductivaproducto";
$accionf= "?accion=Registrar";
$contenido="Registrar_unidadproductivaproducto.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_unidadproductivaproducto($_GET["id"]);
$UnidadProductivaProductoId=$rptamo["cuerpo"][0]["UnidadProductivaProductoId"];
$ProductoId=$rptamo["cuerpo"][0]["ProductoId"];
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$titulo= "Actualizar unidadproductivaproducto";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_unidadproductivaproducto.php";
require_once "../layout.php";
break;
}
ob_flush();
?>