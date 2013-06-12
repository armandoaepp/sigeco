<?php 
ob_start();
include_once "./Controlador_parcela.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else if (isset($_POST["accion"])) {
    $evento = $_POST["accion"];
}else {
    $evento = "Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_parcela();
$contenido="Registrar_parcela.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_parcela();
$rptamo=CBuscar_parcela($_GET["id"]);
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$ParcelaNombre=$rptamo["cuerpo"][0]["ParcelaNombre"];
$ParcelaArea=$rptamo["cuerpo"][0]["ParcelaArea"];
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
$BaseId=$rptamo["cuerpo"][0]["BaseId"];
$DistritoId=$rptamo["cuerpo"][0]["DistritoId"];
$ParcelaCaserio=$rptamo["cuerpo"][0]["ParcelaCaserio"];
$contenido="Actualizar_parcela.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
	$rpta=CEliminar_parcela();
	header("Location: ../parcela");
break;
case "Recuperar":
$rpta=CRecuperar_parcela();
break;
case "Listar":
$titulo="Listar parcela";
$data=CListar_parcela();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_parcela=$cix->ImprimeTable("tablaparcela",$data,"?","?",5,$page);
$contenido="Listar_parcela.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_parcela=CListadoSimple_parcela();
break;
case "Buscar":
$rpta=CBuscar_parcela();
break;
case "Nuevo":
$titulo= "Nuevo parcela";
$accionf= "?accion=Registrar";
$contenido="Registrar_parcela.php";
require_once "../layout.php";
break;
case "Mactualizar":
	$rptamo=CBuscar_parcela($_GET["id"]);
	$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
	$ParcelaNombre=$rptamo["cuerpo"][0]["ParcelaNombre"];
	$ParcelaArea=$rptamo["cuerpo"][0]["ParcelaArea"];
	$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
	$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
	$BaseId=$rptamo["cuerpo"][0]["BaseId"];
	$DistritoId=$rptamo["cuerpo"][0]["DistritoId"];
	$ParcelaCaserio=$rptamo["cuerpo"][0]["ParcelaCaserio"];
	$titulo= "Actualizar parcela";
	$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
	$contenido="Actualizar_parcela.php";
	require_once "../layout.php";
break;
 case "EliminarSerie": 
        $rpta = CEliminarSerie_parcela();
     // header("Location: ../unidadproductiva/parcela.php");
        break;
}
ob_flush();
?>