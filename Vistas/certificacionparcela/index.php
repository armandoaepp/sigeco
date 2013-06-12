<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_certificacionparcela.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_certificacionparcela();
$contenido="Registrar_certificacionparcela.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_certificacionparcela();
$rptamo=CBuscar_certificacionparcela($_GET["id"]);
$CertificacionParcelaId=$rptamo["cuerpo"][0]["CertificacionParcelaId"];
$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$contenido="Actualizar_certificacionparcela.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_certificacionparcela();
header("Location: ../certificacionparcela");
break;
case "Recuperar":
$rpta=CRecuperar_certificacionparcela();
break;
case "Listar":
$titulo="Listar certificacionparcela";
$data=CListar_certificacionparcela();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_certificacionparcela=$cix->ImprimeTable("tablacertificacionparcela",$data,"?","?",5,$page);
$contenido="Listar_certificacionparcela.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_certificacionparcela=CListadoSimple_certificacionparcela();
break;
case "Buscar":
$rpta=CBuscar_certificacionparcela();
break;
case "Nuevo":
$titulo= "Nuevo certificacionparcela";
$accionf= "?accion=Registrar";
$contenido="Registrar_certificacionparcela.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_certificacionparcela($_GET["id"]);
$CertificacionParcelaId=$rptamo["cuerpo"][0]["CertificacionParcelaId"];
$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$titulo= "Actualizar certificacionparcela";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_certificacionparcela.php";
require_once "../layout.php";
break;
}
ob_flush();
?>