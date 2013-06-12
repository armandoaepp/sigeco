<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_unidadproductiva.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_unidadproductiva();
$contenido="Registrar_unidadproductiva.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_unidadproductiva();
$rptamo=CBuscar_unidadproductiva($_GET["id"]);
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$UnidadProductivaArea=$rptamo["cuerpo"][0]["UnidadProductivaArea"];
$UnidadProductivaComentario=$rptamo["cuerpo"][0]["UnidadProductivaComentario"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$contenido="Actualizar_unidadproductiva.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_unidadproductiva();
header("Location: ../unidadproductiva");
break;
case "Recuperar":
$rpta=CRecuperar_unidadproductiva();
break;
case "Listar":
$titulo="Listar unidadproductiva";
$data=CListar_unidadproductiva();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_unidadproductiva=$cix->ImprimeTable("tablaunidadproductiva",$data,"?","?",5,$page);
$contenido="Listar_unidadproductiva.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_unidadproductiva=CListadoSimple_unidadproductiva();
break;
case "Buscar":
$rpta=CBuscar_unidadproductiva();
break;
case "Nuevo":
$titulo= "Nuevo unidadproductiva";
$accionf= "?accion=Registrar";
$contenido="Registrar_unidadproductiva.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_unidadproductiva($_GET["id"]);
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$UnidadProductivaArea=$rptamo["cuerpo"][0]["UnidadProductivaArea"];
$UnidadProductivaComentario=$rptamo["cuerpo"][0]["UnidadProductivaComentario"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$titulo= "Actualizar unidadproductiva";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_unidadproductiva.php";
require_once "../layout.php";
break;
}
ob_flush();
?>