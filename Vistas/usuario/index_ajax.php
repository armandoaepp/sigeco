<?php 
ob_start();
header("Content-Type: text/html;charset=utf-8");
include_once "./Controlador_usuario.php"; 
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
	$rpta=CRegistrar_usuario();
	//if($rpta==0)$rpta="Datos Registrados Correctamente";
	echo $rpta;
break;
case "Actualizar":
	$rpta=CActualizar_usuario();
	if($rpta==0)$rpta="Registro Actualizado Correctamente";
	echo $rpta;
break;
case "Eliminar":
	$rpta=CEliminar_usuario();
	if($rpta==0)$rpta="Usuario Desactivado Correctamente";
	echo $rpta;
break;
case "Recuperar":
$rpta=CRecuperar_usuario();
if($rpta==0)$rpta="Usuario Activado Correctamente";
	echo $rpta;
break;
case "Listar":
	$data=CListar_usuario();
	/*$Listar_usuario=$cix->ImprimeTable("tablaProducto",$data,"?","?","tablazebra");
	$contenido="Listar_usuario.php";*/
	$contenido="Listar_datos.php";
	@include_once($contenido);
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
case "OpenModal":
if(isset($_POST["id"])){
	$rptamo=CBuscar_usuario($_POST["id"]);
	$UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
	$Usuario=$rptamo["cuerpo"][0]["Usuario"];
	$UsuarioPassword=$rptamo["cuerpo"][0]["UsuarioPassword"];
	$TipoUsuarioId=$rptamo["cuerpo"][0]["TipoUsuarioId"];
	//$PersonalId=$rptamo["cuerpo"][0]["PersonalId"];
	//$UsuarioEstado=$rptamo["cuerpo"][0]["UsuarioEstado"];
	$contenido="Actualizar_usuario.php";
	include_once($contenido);
	}else{$contenido="Registrar_usuario.php";	
	include_once($contenido);}
break;
}
ob_flush();
?>