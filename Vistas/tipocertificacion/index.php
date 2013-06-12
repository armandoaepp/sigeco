<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_tipocertificacion.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_tipocertificacion();
$contenido="Registrar_tipocertificacion.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_tipocertificacion();
$rptamo=CBuscar_tipocertificacion($_GET["id"]);
$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
$TipoCertificacion=$rptamo["cuerpo"][0]["TipoCertificacion"];
$contenido="Actualizar_tipocertificacion.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_tipocertificacion();
header("Location: ../tipocertificacion");
break;
case "Recuperar":
$rpta=CRecuperar_tipocertificacion();
break;
case "Listar":
$titulo="Listar tipocertificacion";
$data=CListar_tipocertificacion();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_tipocertificacion=$cix->ImprimeTable("tablatipocertificacion",$data,"?","?",5,$page);
$contenido="Listar_tipocertificacion.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_tipocertificacion=CListadoSimple_tipocertificacion();
break;
case "Buscar":
$rpta=CBuscar_tipocertificacion();
break;
case "Nuevo":
$titulo= "Nuevo tipocertificacion";
$accionf= "?accion=Registrar";
$contenido="Registrar_tipocertificacion.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_tipocertificacion($_GET["id"]);
$TipoCertificacionId=$rptamo["cuerpo"][0]["TipoCertificacionId"];
$TipoCertificacion=$rptamo["cuerpo"][0]["TipoCertificacion"];
$titulo= "Actualizar tipocertificacion";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_tipocertificacion.php";
require_once "../layout.php";
break;
}
ob_flush();
?>