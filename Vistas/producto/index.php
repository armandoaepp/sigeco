<?php 
ob_start();

include_once "./Controlador_producto.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_producto();
$contenido="Registrar_producto.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_producto();
$rptamo=CBuscar_producto($_GET["id"]);
$ProductoId=$rptamo["cuerpo"][0]["ProductoId"];
$ProductoVariedad=$rptamo["cuerpo"][0]["ProductoVariedad"];
$ProductoArea=$rptamo["cuerpo"][0]["ProductoArea"];
$ProductoProduccionAnual=$rptamo["cuerpo"][0]["ProductoProduccionAnual"];
$ProductoMesAfloracion=$rptamo["cuerpo"][0]["ProductoMesAfloracion"];
$ProductoMesCosecha=$rptamo["cuerpo"][0]["ProductoMesCosecha"];
$ProductoDescripcion=$rptamo["cuerpo"][0]["ProductoDescripcion"];
$TipoProductoId=$rptamo["cuerpo"][0]["TipoProductoId"];
$contenido="Actualizar_producto.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_producto();
header("Location: ../producto");
break;
case "Recuperar":
$rpta=CRecuperar_producto();
break;
case "Listar":
$titulo="Listar producto";
$data=CListar_producto();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_producto=$cix->ImprimeTable("tablaproducto",$data,"?","?",5,$page);
$contenido="Listar_producto.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_producto=CListadoSimple_producto();
break;
case "Buscar":
$rpta=CBuscar_producto();
break;
case "Nuevo":
$titulo= "Nuevo producto";
$accionf= "?accion=Registrar";
$contenido="Registrar_producto.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_producto($_GET["id"]);
$ProductoId=$rptamo["cuerpo"][0]["ProductoId"];
$ProductoVariedad=$rptamo["cuerpo"][0]["ProductoVariedad"];
$ProductoArea=$rptamo["cuerpo"][0]["ProductoArea"];
$ProductoProduccionAnual=$rptamo["cuerpo"][0]["ProductoProduccionAnual"];
$ProductoMesAfloracion=$rptamo["cuerpo"][0]["ProductoMesAfloracion"];
$ProductoMesCosecha=$rptamo["cuerpo"][0]["ProductoMesCosecha"];
$ProductoDescripcion=$rptamo["cuerpo"][0]["ProductoDescripcion"];
$TipoProductoId=$rptamo["cuerpo"][0]["TipoProductoId"];
$titulo= "Actualizar producto";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_producto.php";
require_once "../layout.php";
break;
}
ob_flush();
?>