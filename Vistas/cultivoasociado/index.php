<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_cultivoasociado.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_cultivoasociado();
$contenido="Registrar_cultivoasociado.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_cultivoasociado();
$rptamo=CBuscar_cultivoasociado($_GET["id"]);
$CultivoAsociadoId=$rptamo["cuerpo"][0]["CultivoAsociadoId"];
$CultivoAsociadoNombre=$rptamo["cuerpo"][0]["CultivoAsociadoNombre"];
$CultivoAsociadoNota=$rptamo["cuerpo"][0]["CultivoAsociadoNota"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$contenido="Actualizar_cultivoasociado.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_cultivoasociado();
header("Location: ../cultivoasociado");
break;
case "Recuperar":
$rpta=CRecuperar_cultivoasociado();
break;
case "Listar":
$titulo="Listar cultivoasociado";
$data=CListar_cultivoasociado();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_cultivoasociado=$cix->ImprimeTable("tablacultivoasociado",$data,"?","?",5,$page);
$contenido="Listar_cultivoasociado.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_cultivoasociado=CListadoSimple_cultivoasociado();
break;
case "Buscar":
$rpta=CBuscar_cultivoasociado();
break;
case "Nuevo":
$titulo= "Nuevo cultivoasociado";
$accionf= "?accion=Registrar";
$contenido="Registrar_cultivoasociado.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_cultivoasociado($_GET["id"]);
$CultivoAsociadoId=$rptamo["cuerpo"][0]["CultivoAsociadoId"];
$CultivoAsociadoNombre=$rptamo["cuerpo"][0]["CultivoAsociadoNombre"];
$CultivoAsociadoNota=$rptamo["cuerpo"][0]["CultivoAsociadoNota"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$titulo= "Actualizar cultivoasociado";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_cultivoasociado.php";
require_once "../layout.php";
break;
}
ob_flush();
?>