<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_usuario.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_usuario();
$contenido="Registrar_usuario.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_usuario();
$rptamo=CBuscar_usuario($_GET["id"]);
$UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
$Usuario=$rptamo["cuerpo"][0]["Usuario"];
$UsuarioPassword=$rptamo["cuerpo"][0]["UsuarioPassword"];
$TipoUsuarioId=$rptamo["cuerpo"][0]["TipoUsuarioId"];
$PersonalId=$rptamo["cuerpo"][0]["PersonalId"];
$UsuarioEstado=$rptamo["cuerpo"][0]["UsuarioEstado"];
$contenido="Actualizar_usuario.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_usuario();
header("Location: ../usuario");
break;
case "Recuperar":
$rpta=CRecuperar_usuario();
break;
case "Listar":
$titulo="Listar usuario";
$data=CListar_usuario();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_usuario=$cix->ImprimeTable("tablausuario",$data,"?","?",5,$page);
$contenido="Listar_usuario.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_usuario=CListadoSimple_usuario();
break;
case "Buscar":
$rpta=CBuscar_usuario();
break;
case "Nuevo":
$titulo= "Nuevo usuario";
$accionf= "?accion=Registrar";
$contenido="Registrar_usuario.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_usuario($_GET["id"]);
$UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
$Usuario=$rptamo["cuerpo"][0]["Usuario"];
$UsuarioPassword=$rptamo["cuerpo"][0]["UsuarioPassword"];
$TipoUsuarioId=$rptamo["cuerpo"][0]["TipoUsuarioId"];
$PersonalId=$rptamo["cuerpo"][0]["PersonalId"];
$UsuarioEstado=$rptamo["cuerpo"][0]["UsuarioEstado"];
$titulo= "Actualizar usuario";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_usuario.php";
require_once "../layout.php";
break;
}
ob_flush();
?>