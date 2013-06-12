<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_c_modulo.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_c_modulo();
$contenido="Registrar_c_modulo.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_c_modulo();
$rptamo=CBuscar_c_modulo($_GET["id"]);
$ModuloId=$rptamo["cuerpo"][0]["ModuloId"];
$ModuloNombre=$rptamo["cuerpo"][0]["ModuloNombre"];
$ModuloNota=$rptamo["cuerpo"][0]["ModuloNota"];
$contenido="Actualizar_c_modulo.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_c_modulo();
header("Location: ../c_modulo");
break;
case "Recuperar":
$rpta=CRecuperar_c_modulo();
break;
case "Listar":
$titulo="Listar c_modulo";
$data=CListar_c_modulo();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_c_modulo=$cix->ImprimeTable("tablac_modulo",$data,"?","?",5,$page);
$contenido="Listar_c_modulo.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_c_modulo=CListadoSimple_c_modulo();
break;
case "Buscar":
$rpta=CBuscar_c_modulo();
break;
case "Nuevo":
$titulo= "Nuevo c_modulo";
$accionf= "?accion=Registrar";
$contenido="Registrar_c_modulo.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_c_modulo($_GET["id"]);
$ModuloId=$rptamo["cuerpo"][0]["ModuloId"];
$ModuloNombre=$rptamo["cuerpo"][0]["ModuloNombre"];
$ModuloNota=$rptamo["cuerpo"][0]["ModuloNota"];
$titulo= "Actualizar c_modulo";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_c_modulo.php";
require_once "../layout.php";
break;
}
ob_flush();
?>