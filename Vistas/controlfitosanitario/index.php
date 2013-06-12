<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_controlfitosanitario.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_controlfitosanitario();
$contenido="Registrar_controlfitosanitario.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_controlfitosanitario();
$rptamo=CBuscar_controlfitosanitario($_GET["id"]);
$ControlFitosanitarioId=$rptamo["cuerpo"][0]["ControlFitosanitarioId"];
$ControlFitosanitarioDescripcion=$rptamo["cuerpo"][0]["ControlFitosanitarioDescripcion"];
$ControlFitosanitarioCantidad=$rptamo["cuerpo"][0]["ControlFitosanitarioCantidad"];
$ControlFitosanitarioCostoUnitario=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoUnitario"];
$ControlFitosanitarioJornalFamiliar=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalFamiliar"];
$ControlFitosanitarioJornalContratado=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalContratado"];
$ControlFitosanitarioCostoJornal=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoJornal"];
$LaborId=$rptamo["cuerpo"][0]["LaborId"];
$ControlFitosanitarioFecha=$rptamo["cuerpo"][0]["ControlFitosanitarioFecha"];
$contenido="Actualizar_controlfitosanitario.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_controlfitosanitario();
header("Location: ../controlfitosanitario");
break;
case "Recuperar":
$rpta=CRecuperar_controlfitosanitario();
break;
case "Listar":
$titulo="Listar controlfitosanitario";
$data=CListar_controlfitosanitario();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_controlfitosanitario=$cix->ImprimeTable("tablacontrolfitosanitario",$data,"?","?",5,$page);
$contenido="Listar_controlfitosanitario.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_controlfitosanitario=CListadoSimple_controlfitosanitario();
break;
case "Buscar":
$rpta=CBuscar_controlfitosanitario();
break;
case "Nuevo":
$titulo= "Nuevo controlfitosanitario";
$accionf= "?accion=Registrar";
$contenido="Registrar_controlfitosanitario.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_controlfitosanitario($_GET["id"]);
$ControlFitosanitarioId=$rptamo["cuerpo"][0]["ControlFitosanitarioId"];
$ControlFitosanitarioDescripcion=$rptamo["cuerpo"][0]["ControlFitosanitarioDescripcion"];
$ControlFitosanitarioCantidad=$rptamo["cuerpo"][0]["ControlFitosanitarioCantidad"];
$ControlFitosanitarioCostoUnitario=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoUnitario"];
$ControlFitosanitarioJornalFamiliar=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalFamiliar"];
$ControlFitosanitarioJornalContratado=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalContratado"];
$ControlFitosanitarioCostoJornal=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoJornal"];
$LaborId=$rptamo["cuerpo"][0]["LaborId"];
$ControlFitosanitarioFecha=$rptamo["cuerpo"][0]["ControlFitosanitarioFecha"];
$titulo= "Actualizar controlfitosanitario";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_controlfitosanitario.php";
require_once "../layout.php";
break;
}
ob_flush();
?>