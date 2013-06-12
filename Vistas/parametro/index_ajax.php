<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_parametro.php"; 
include_once "../cixajax.php"; 

$cix=new CixAJAX();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
  $rpta=CRegistrar_parametro();
 echo $rpta;
break;
case "Actualizar":
  $rpta=CActualizar_parametro();
  $rptamo=CBuscar_parametro($_GET["id"]);
  $ParametroId=$rptamo["cuerpo"][0]["ParametroId"];
  $ParametroGanulometria17=$rptamo["cuerpo"][0]["ParametroGanulometria17"];
  $ParametroGanulometria15=$rptamo["cuerpo"][0]["ParametroGanulometria15"];
  $ParametroGanulometriaTotal=$rptamo["cuerpo"][0]["ParametroGanulometriaTotal"];
  $ParametroDefectosPrimarios=$rptamo["cuerpo"][0]["ParametroDefectosPrimarios"];
  $ParametroDefectosSecundario=$rptamo["cuerpo"][0]["ParametroDefectosSecundario"];
  $ParametroMuestraExportable=$rptamo["cuerpo"][0]["ParametroMuestraExportable"];
  $ParametroMuestraDescarte=$rptamo["cuerpo"][0]["ParametroMuestraDescarte"];
  $ParametroMuestraImpureza=$rptamo["cuerpo"][0]["ParametroMuestraImpureza"];
  $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
  $contenido="Actualizar_parametro.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_parametro();
  header("Location: ../parametro");
break;
case "Recuperar":
  $rpta=CRecuperar_parametro();
break;
case "Listar":
 if(isset($_GET["idAcopio"])){
	 $rptamo=CListarAcopio_parametro($_GET["idAcopio"]);
	 if(count($rptamo["cuerpo"])>0){
	 $ParametroId=$rptamo["cuerpo"][0]["ParametroId"];
	 $ParametroGanulometria17=$rptamo["cuerpo"][0]["ParametroGanulometria17"];
	 $ParametroGanulometria15=$rptamo["cuerpo"][0]["ParametroGanulometria15"];
	 $ParametroGanulometriaTotal=$rptamo["cuerpo"][0]["ParametroGanulometriaTotal"];
	 $ParametroDefectosPrimarios=$rptamo["cuerpo"][0]["ParametroDefectosPrimarios"];
	 $ParametroDefectosSecundario=$rptamo["cuerpo"][0]["ParametroDefectosSecundario"];
	 $ParametroMuestraExportable=$rptamo["cuerpo"][0]["ParametroMuestraExportable"];
	 $ParametroMuestraDescarte=$rptamo["cuerpo"][0]["ParametroMuestraDescarte"];
	 $ParametroMuestraImpureza=$rptamo["cuerpo"][0]["ParametroMuestraImpureza"];
	 $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
	 }else{
	$ParametroId=" 0 %";
	 $ParametroGanulometria17=" 0 %";
	 $ParametroGanulometria15=" 0 %";
	 $ParametroGanulometriaTotal=" 0 %";
	 $ParametroDefectosPrimarios=" 0 %";
	 $ParametroDefectosSecundario=" 0 %";
	 $ParametroMuestraExportable=" 0 %";
	 $ParametroMuestraDescarte=" 0 %";
	 $ParametroMuestraImpureza=" 0 %";
	 $AcopioId=" 0 %";
		 }
	
 }else{
	 $ParametroId=" 0 %";
	 $ParametroGanulometria17=" 0 %";
	 $ParametroGanulometria15=" 0 %";
	 $ParametroGanulometriaTotal=" 0 %";
	 $ParametroDefectosPrimarios=" 0 %";
	 $ParametroDefectosSecundario=" 0 %";
	 $ParametroMuestraExportable=" 0 %";
	 $ParametroMuestraDescarte=" 0 %";
	 $ParametroMuestraImpureza=" 0 %";
	 $AcopioId=" 0 %";
 }
	$contenido="Listar_tabla_parametro.php";
	include_once($contenido);
break;
case "Listarsimple":
 $Listarsimple_parametro=CListadoSimple_parametro();
break;
case "Buscar":
 $rpta=CBuscar_parametro();
break;
case "Nuevo":
 $titulo= "Nuevo parametro";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_parametro.php";
 require_once "../layout.php";
break;
case "ModalidadFrm":
 
 if(isset($_GET["idAcopio"])){
	 $rptamo=CListarAcopio_parametro($_GET["idAcopio"]);
	 if(count($rptamo["cuerpo"])>0){
	 $ParametroId=$rptamo["cuerpo"][0]["ParametroId"];
	 $ParametroGanulometria17=$rptamo["cuerpo"][0]["ParametroGanulometria17"];
	 $ParametroGanulometria15=$rptamo["cuerpo"][0]["ParametroGanulometria15"];
	 $ParametroGanulometriaTotal=$rptamo["cuerpo"][0]["ParametroGanulometriaTotal"];
	 $ParametroDefectosPrimarios=$rptamo["cuerpo"][0]["ParametroDefectosPrimarios"];
	 $ParametroDefectosSecundario=$rptamo["cuerpo"][0]["ParametroDefectosSecundario"];
	 $ParametroMuestraExportable=$rptamo["cuerpo"][0]["ParametroMuestraExportable"];
	 $ParametroMuestraDescarte=$rptamo["cuerpo"][0]["ParametroMuestraDescarte"];
	 $ParametroMuestraImpureza=$rptamo["cuerpo"][0]["ParametroMuestraImpureza"];
	 $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
	 }else{
	$ParametroId=0;
	 $ParametroGanulometria17="";
	 $ParametroGanulometria15="";
	 $ParametroGanulometriaTotal="";
	 $ParametroDefectosPrimarios="";
	 $ParametroDefectosSecundario="";
	 $ParametroMuestraExportable="";
	 $ParametroMuestraDescarte="";
	 $ParametroMuestraImpureza="";
	 $AcopioId=$_GET["idAcopio"];
		 }
	
 }else{
	 $ParametroId=0;
	 $ParametroGanulometria17="";
	 $ParametroGanulometria15="";
	 $ParametroGanulometriaTotal="";
	 $ParametroDefectosPrimarios="";
	 $ParametroDefectosSecundario="";
	 $ParametroMuestraExportable="";
	 $ParametroMuestraDescarte="";
	 $ParametroMuestraImpureza="";
	 $AcopioId=0;
 }
	$contenido="Registrar_parametro.php";
	include_once($contenido);
break;
}
ob_flush();
?>