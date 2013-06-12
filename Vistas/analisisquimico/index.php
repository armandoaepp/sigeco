<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_analisisquimico.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_analisisquimico();
$contenido="Registrar_analisisquimico.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_analisisquimico();
$rptamo=CBuscar_analisisquimico($_GET["id"]);
$AnalisisQuimicoId=$rptamo["cuerpo"][0]["AnalisisQuimicoId"];
$AnalisisQuimicoFecha=$rptamo["cuerpo"][0]["AnalisisQuimicoFecha"];
$AnalisisQuimicoPh=$rptamo["cuerpo"][0]["AnalisisQuimicoPh"];
$AnalisisQuimicoMateria=$rptamo["cuerpo"][0]["AnalisisQuimicoMateria"];
$AnalisisQuimicoCarbono=$rptamo["cuerpo"][0]["AnalisisQuimicoCarbono"];
$AnalisisQuimicoNt=$rptamo["cuerpo"][0]["AnalisisQuimicoNt"];
$AnalisisQuimicoN=$rptamo["cuerpo"][0]["AnalisisQuimicoN"];
$AnalisisQuimicoMo=$rptamo["cuerpo"][0]["AnalisisQuimicoMo"];
$AnalisisQuimicoK=$rptamo["cuerpo"][0]["AnalisisQuimicoK"];
$AnalisisQuimicoCa=$rptamo["cuerpo"][0]["AnalisisQuimicoCa"];
$AnalisisQuimicoMg=$rptamo["cuerpo"][0]["AnalisisQuimicoMg"];
$AnalisisQuimicoNa=$rptamo["cuerpo"][0]["AnalisisQuimicoNa"];
$AnalisisQuimicoAl=$rptamo["cuerpo"][0]["AnalisisQuimicoAl"];
$AnalisisQuimicoH=$rptamo["cuerpo"][0]["AnalisisQuimicoH"];
$AnalisisQuimicoCIC=$rptamo["cuerpo"][0]["AnalisisQuimicoCIC"];
$AnalisisQuimicoP2=$rptamo["cuerpo"][0]["AnalisisQuimicoP2"];
$AnalisisQuimicoP=$rptamo["cuerpo"][0]["AnalisisQuimicoP"];
$AnalisisQuimicoFe=$rptamo["cuerpo"][0]["AnalisisQuimicoFe"];
$AnalisisQuimicoMn=$rptamo["cuerpo"][0]["AnalisisQuimicoMn"];
$AnalisisQuimicoBoro=$rptamo["cuerpo"][0]["AnalisisQuimicoBoro"];
$AnalisisQuimicoZn=$rptamo["cuerpo"][0]["AnalisisQuimicoZn"];
$AnalisisQuimicoAzufre=$rptamo["cuerpo"][0]["AnalisisQuimicoAzufre"];
$AnalisisQuimicoCu=$rptamo["cuerpo"][0]["AnalisisQuimicoCu"];
$AnalisisQuimicoAr=$rptamo["cuerpo"][0]["AnalisisQuimicoAr"];
$AnalisisQuimicoA=$rptamo["cuerpo"][0]["AnalisisQuimicoA"];
$AnalisisQuimicoDescripcion=$rptamo["cuerpo"][0]["AnalisisQuimicoDescripcion"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$AnalisisQuimicoL=$rptamo["cuerpo"][0]["AnalisisQuimicoL"];
$contenido="Actualizar_analisisquimico.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_analisisquimico();
header("Location: ../analisisquimico");
break;
case "Recuperar":
$rpta=CRecuperar_analisisquimico();
break;
case "Listar":
$titulo="Listar analisisquimico";
$data=CListar_analisisquimico();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_analisisquimico=$cix->ImprimeTable("tablaanalisisquimico",$data,"?","?",5,$page);
$contenido="Listar_analisisquimico.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_analisisquimico=CListadoSimple_analisisquimico();
break;
case "Buscar":
$rpta=CBuscar_analisisquimico();
break;
case "Nuevo":
$titulo= "Nuevo analisisquimico";
$accionf= "?accion=Registrar";
$contenido="Registrar_analisisquimico.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_analisisquimico($_GET["id"]);
$AnalisisQuimicoId=$rptamo["cuerpo"][0]["AnalisisQuimicoId"];
$AnalisisQuimicoFecha=$rptamo["cuerpo"][0]["AnalisisQuimicoFecha"];
$AnalisisQuimicoPh=$rptamo["cuerpo"][0]["AnalisisQuimicoPh"];
$AnalisisQuimicoMateria=$rptamo["cuerpo"][0]["AnalisisQuimicoMateria"];
$AnalisisQuimicoCarbono=$rptamo["cuerpo"][0]["AnalisisQuimicoCarbono"];
$AnalisisQuimicoNt=$rptamo["cuerpo"][0]["AnalisisQuimicoNt"];
$AnalisisQuimicoN=$rptamo["cuerpo"][0]["AnalisisQuimicoN"];
$AnalisisQuimicoMo=$rptamo["cuerpo"][0]["AnalisisQuimicoMo"];
$AnalisisQuimicoK=$rptamo["cuerpo"][0]["AnalisisQuimicoK"];
$AnalisisQuimicoCa=$rptamo["cuerpo"][0]["AnalisisQuimicoCa"];
$AnalisisQuimicoMg=$rptamo["cuerpo"][0]["AnalisisQuimicoMg"];
$AnalisisQuimicoNa=$rptamo["cuerpo"][0]["AnalisisQuimicoNa"];
$AnalisisQuimicoAl=$rptamo["cuerpo"][0]["AnalisisQuimicoAl"];
$AnalisisQuimicoH=$rptamo["cuerpo"][0]["AnalisisQuimicoH"];
$AnalisisQuimicoCIC=$rptamo["cuerpo"][0]["AnalisisQuimicoCIC"];
$AnalisisQuimicoP2=$rptamo["cuerpo"][0]["AnalisisQuimicoP2"];
$AnalisisQuimicoP=$rptamo["cuerpo"][0]["AnalisisQuimicoP"];
$AnalisisQuimicoFe=$rptamo["cuerpo"][0]["AnalisisQuimicoFe"];
$AnalisisQuimicoMn=$rptamo["cuerpo"][0]["AnalisisQuimicoMn"];
$AnalisisQuimicoBoro=$rptamo["cuerpo"][0]["AnalisisQuimicoBoro"];
$AnalisisQuimicoZn=$rptamo["cuerpo"][0]["AnalisisQuimicoZn"];
$AnalisisQuimicoAzufre=$rptamo["cuerpo"][0]["AnalisisQuimicoAzufre"];
$AnalisisQuimicoCu=$rptamo["cuerpo"][0]["AnalisisQuimicoCu"];
$AnalisisQuimicoAr=$rptamo["cuerpo"][0]["AnalisisQuimicoAr"];
$AnalisisQuimicoA=$rptamo["cuerpo"][0]["AnalisisQuimicoA"];
$AnalisisQuimicoDescripcion=$rptamo["cuerpo"][0]["AnalisisQuimicoDescripcion"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$AnalisisQuimicoL=$rptamo["cuerpo"][0]["AnalisisQuimicoL"];
$titulo= "Actualizar analisisquimico";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_analisisquimico.php";
require_once "../layout.php";
break;
}
ob_flush();
?>