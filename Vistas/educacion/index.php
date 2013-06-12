<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_educacion.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_educacion();
$contenido="Registrar_educacion.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_educacion();
$rptamo=CBuscar_educacion($_GET["id"]);
$EducacionId=$rptamo["cuerpo"][0]["EducacionId"];
$EducacionNivel=$rptamo["cuerpo"][0]["EducacionNivel"];
$contenido="Actualizar_educacion.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_educacion();
header("Location: ../educacion");
break;
case "Recuperar":
$rpta=CRecuperar_educacion();
break;
case "Listar":
$titulo="Listar educacion";
$data=CListar_educacion();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_educacion=$cix->ImprimeTableP("tablaeducacion",$data,"?","?",5,$page);
$contenido="Listar_educacion.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_educacion=CListadoSimple_educacion();
break;
case "Buscar":
$rpta=CBuscar_educacion();
break;
case "Nuevo":
$titulo= "Nuevo educacion";
$accionf= "?accion=Registrar";
$contenido="Registrar_educacion.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_educacion($_GET["id"]);
$EducacionId=$rptamo["cuerpo"][0]["EducacionId"];
$EducacionNivel=$rptamo["cuerpo"][0]["EducacionNivel"];
$titulo= "Actualizar educacion";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_educacion.php";
require_once "../layout.php";
break;
}
ob_flush();
?>