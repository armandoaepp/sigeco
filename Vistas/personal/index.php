<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_personal.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_personal();
$contenido="Registrar_personal.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_personal();
$rptamo=CBuscar_personal($_GET["id"]);
$PersonalId=$rptamo["cuerpo"][0]["PersonalId"];
$PersonalFechaIngreso=$rptamo["cuerpo"][0]["PersonalFechaIngreso"];
$PersonalDni=$rptamo["cuerpo"][0]["PersonalDni"];
$PersonalApellido=$rptamo["cuerpo"][0]["PersonalApellido"];
$PersonalNombre=$rptamo["cuerpo"][0]["PersonalNombre"];
$PersonalSexo=$rptamo["cuerpo"][0]["PersonalSexo"];
$PersonalFechaNac=$rptamo["cuerpo"][0]["PersonalFechaNac"];
$PersonalEmail=$rptamo["cuerpo"][0]["PersonalEmail"];
$PersonalDireccion=$rptamo["cuerpo"][0]["PersonalDireccion"];
$PersonalTelefono=$rptamo["cuerpo"][0]["PersonalTelefono"];
$PersonalEstado=$rptamo["cuerpo"][0]["PersonalEstado"];
$contenido="Actualizar_personal.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_personal();
header("Location: ../personal");
break;
case "Recuperar":
$rpta=CRecuperar_personal();
break;
case "Listar":
$titulo="Listar personal";
$data=CListar_personal();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_personal=$cix->ImprimeTable("tablapersonal",$data,"?","?",5,$page);
$contenido="Listar_personal.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_personal=CListadoSimple_personal();
break;
case "Buscar":
$rpta=CBuscar_personal();
break;
case "Nuevo":
$titulo= "Nuevo personal";
$accionf= "?accion=Registrar";
$contenido="Registrar_personal.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_personal($_GET["id"]);
$PersonalId=$rptamo["cuerpo"][0]["PersonalId"];
$PersonalFechaIngreso=$rptamo["cuerpo"][0]["PersonalFechaIngreso"];
$PersonalDni=$rptamo["cuerpo"][0]["PersonalDni"];
$PersonalApellido=$rptamo["cuerpo"][0]["PersonalApellido"];
$PersonalNombre=$rptamo["cuerpo"][0]["PersonalNombre"];
$PersonalSexo=$rptamo["cuerpo"][0]["PersonalSexo"];
$PersonalFechaNac=$rptamo["cuerpo"][0]["PersonalFechaNac"];
$PersonalEmail=$rptamo["cuerpo"][0]["PersonalEmail"];
$PersonalDireccion=$rptamo["cuerpo"][0]["PersonalDireccion"];
$PersonalTelefono=$rptamo["cuerpo"][0]["PersonalTelefono"];
$PersonalEstado=$rptamo["cuerpo"][0]["PersonalEstado"];
$titulo= "Actualizar personal";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_personal.php";
require_once "../layout.php";
break;
}
ob_flush();
?>