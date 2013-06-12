<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_c_menutipousuario.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_c_menutipousuario();
$contenido="Registrar_c_menutipousuario.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_c_menutipousuario();
$rptamo=CBuscar_c_menutipousuario($_GET["id"]);
$MenuTipoUsuarioId=$rptamo["cuerpo"][0]["MenuTipoUsuarioId"];
$MenuId=$rptamo["cuerpo"][0]["MenuId"];
$TipoUsuarioId=$rptamo["cuerpo"][0]["TipoUsuarioId"];
$contenido="Actualizar_c_menutipousuario.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_c_menutipousuario();
header("Location: ../c_menutipousuario");
break;
case "Recuperar":
$rpta=CRecuperar_c_menutipousuario();
break;
case "Listar":
$titulo="Listar c_menutipousuario";
$data=CListar_c_menutipousuario();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_c_menutipousuario=$cix->ImprimeTable("tablac_menutipousuario",$data,"?","?",5,$page);
$contenido="Listar_c_menutipousuario.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_c_menutipousuario=CListadoSimple_c_menutipousuario();
break;
case "Buscar":
$rpta=CBuscar_c_menutipousuario();
break;
case "Nuevo":
$titulo= "Nuevo c_menutipousuario";
$accionf= "?accion=Registrar";
$contenido="Registrar_c_menutipousuario.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_c_menutipousuario($_GET["id"]);
$MenuTipoUsuarioId=$rptamo["cuerpo"][0]["MenuTipoUsuarioId"];
$MenuId=$rptamo["cuerpo"][0]["MenuId"];
$TipoUsuarioId=$rptamo["cuerpo"][0]["TipoUsuarioId"];
$titulo= "Actualizar c_menutipousuario";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_c_menutipousuario.php";
require_once "../layout.php";
break;
}
ob_flush();
?>