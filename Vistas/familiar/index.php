<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_familiar.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_familiar();
$contenido="Registrar_familiar.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_familiar();
$rptamo=CBuscar_familiar($_GET["id"]);
$FamiliarId=$rptamo["cuerpo"][0]["FamiliarId"];
$FamiliarApellido=$rptamo["cuerpo"][0]["FamiliarApellido"];
$FamiliarNombre=$rptamo["cuerpo"][0]["FamiliarNombre"];
$FamiliarSexo=$rptamo["cuerpo"][0]["FamiliarSexo"];
$FamiliarFechaNac=$rptamo["cuerpo"][0]["FamiliarFechaNac"];
$FamiliarParentesco=$rptamo["cuerpo"][0]["FamiliarParentesco"];
$FamiliarOcupacion=$rptamo["cuerpo"][0]["FamiliarOcupacion"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$EducacionId=$rptamo["cuerpo"][0]["EducacionId"];
$contenido="Actualizar_familiar.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_familiar();
header("Location: ../familiar");
break;
case "Recuperar":
$rpta=CRecuperar_familiar();
break;
case "Listar":
$titulo="Listar familiar";
$data=CListar_familiar();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_familiar=$cix->ImprimeTable("tablafamiliar",$data,"?","?",5,$page);
$contenido="Listar_familiar.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_familiar=CListadoSimple_familiar();
break;
case "Buscar":
$rpta=CBuscar_familiar();
break;
case "Nuevo":
$titulo= "Nuevo familiar";
$accionf= "?accion=Registrar";
$contenido="Registrar_familiar.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_familiar($_GET["id"]);
$FamiliarId=$rptamo["cuerpo"][0]["FamiliarId"];
$FamiliarApellido=$rptamo["cuerpo"][0]["FamiliarApellido"];
$FamiliarNombre=$rptamo["cuerpo"][0]["FamiliarNombre"];
$FamiliarSexo=$rptamo["cuerpo"][0]["FamiliarSexo"];
$FamiliarFechaNac=$rptamo["cuerpo"][0]["FamiliarFechaNac"];
$FamiliarParentesco=$rptamo["cuerpo"][0]["FamiliarParentesco"];
$FamiliarOcupacion=$rptamo["cuerpo"][0]["FamiliarOcupacion"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$EducacionId=$rptamo["cuerpo"][0]["EducacionId"];
$titulo= "Actualizar familiar";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_familiar.php";
require_once "../layout.php";
break;
}
ob_flush();
?>