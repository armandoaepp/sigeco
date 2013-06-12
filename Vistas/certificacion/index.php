<?php 
ob_start();
include_once "./Controlador_certificacion.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_certificacion();
$contenido="Registrar_certificacion.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_certificacion();
$rptamo=CBuscar_certificacion($_GET["id"]);
$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
$CertificacionStatus=$rptamo["cuerpo"][0]["CertificacionStatus"];
$CertificacionEmitido=$rptamo["cuerpo"][0]["CertificacionEmitido"];
$CertificacionFechaEmision=$rptamo["cuerpo"][0]["CertificacionFechaEmision"];
$CertificacionFechaVenci=$rptamo["cuerpo"][0]["CertificacionFechaVenci"];
$CertificacionNumero=$rptamo["cuerpo"][0]["CertificacionNumero"];
$CertificacionNota=$rptamo["cuerpo"][0]["CertificacionNota"];
$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
$contenido="Actualizar_certificacion.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_certificacion();
header("Location: ../certificacion");
break;
case "Recuperar":
$rpta=CRecuperar_certificacion();
break;
case "Listar":
$titulo="Listar certificacion";
$data=CListar_certificacion();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_certificacion=$cix->ImprimeTable("tablacertificacion",$data,"?","?",5,$page);
$contenido="Listar_certificacion.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_certificacion=CListadoSimple_certificacion();
break;
case "Buscar":
$rpta=CBuscar_certificacion();
break;
case "Nuevo":
$titulo= "Nuevo certificacion";
$accionf= "?accion=Registrar";
$contenido="Registrar_certificacion.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_certificacion($_GET["id"]);
$CertificacionId=$rptamo["cuerpo"][0]["CertificacionId"];
$CertificacionStatus=$rptamo["cuerpo"][0]["CertificacionStatus"];
$CertificacionEmitido=$rptamo["cuerpo"][0]["CertificacionEmitido"];
$CertificacionFechaEmision=$rptamo["cuerpo"][0]["CertificacionFechaEmision"];
$CertificacionFechaVenci=$rptamo["cuerpo"][0]["CertificacionFechaVenci"];
$CertificacionNumero=$rptamo["cuerpo"][0]["CertificacionNumero"];
$CertificacionNota=$rptamo["cuerpo"][0]["CertificacionNota"];
$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
$titulo= "Actualizar certificacion";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_certificacion.php";
require_once "../layout.php";
break;
}
ob_flush();
?>