<?php 
ob_start();
include_once "./Controlador_base.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_base();
$contenido="Registrar_base.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_base();
$rptamo=CBuscar_base($_GET["id"]);
$BaseId=$rptamo["cuerpo"][0]["BaseId"];
$BaseNombre=$rptamo["cuerpo"][0]["BaseNombre"];
$contenido="Actualizar_base.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_base();
header("Location: ../base");
break;
case "Recuperar":
$rpta=CRecuperar_base();
break;
case "Listar":
$titulo="Listar base";
$data=CListar_base();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_base=$cix->ImprimeTable("tablabase",$data,"?","?",5,$page);
$contenido="Listar_base.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_base=CListadoSimple_base();
break;
case "Buscar":
$rpta=CBuscar_base();
break;
case "Nuevo":
$titulo= "Nuevo base";
$accionf= "?accion=Registrar";
$contenido="Registrar_base.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_base($_GET["id"]);
$BaseId=$rptamo["cuerpo"][0]["BaseId"];
$BaseNombre=$rptamo["cuerpo"][0]["BaseNombre"];
$titulo= "Actualizar base";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_base.php";
require_once "../layout.php";
break;
}
ob_flush();
?>