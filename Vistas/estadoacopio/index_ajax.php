<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_estadoacopio.php"; 
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
  $rpta=CRegistrar_estadoacopio();
   $rptamo=CBuscar_estadoacopio($_GET["id"]);
 $EstadoAcopioId=$rptamo["cuerpo"][0]["EstadoAcopioId"];
 $EstadoAcopioEstimado=$rptamo["cuerpo"][0]["EstadoAcopioEstimado"];
 $EstadoAcopioAcopiado=$rptamo["cuerpo"][0]["EstadoAcopioAcopiado"];
 $EstadoAcopioSaldo=$rptamo["cuerpo"][0]["EstadoAcopioSaldo"];
 $EstadoAcopioEstado=$rptamo["cuerpo"][0]["EstadoAcopioEstado"];
 $UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
 $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
 $titulo= "Actualizar estadoacopio";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_estadoacopio.php";
 require_once "../layout.php";
  $contenido="Registrar_estadoacopio.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_estadoacopio();
  $rptamo=CBuscar_estadoacopio($_GET["id"]);
  $EstadoAcopioId=$rptamo["cuerpo"][0]["EstadoAcopioId"];
  $EstadoAcopioEstimado=$rptamo["cuerpo"][0]["EstadoAcopioEstimado"];
  $EstadoAcopioAcopiado=$rptamo["cuerpo"][0]["EstadoAcopioAcopiado"];
  $EstadoAcopioSaldo=$rptamo["cuerpo"][0]["EstadoAcopioSaldo"];
  $EstadoAcopioEstado=$rptamo["cuerpo"][0]["EstadoAcopioEstado"];
  $UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
  $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
  $contenido="Actualizar_estadoacopio.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_estadoacopio();
  header("Location: ../estadoacopio");
break;
case "Recuperar":
  $rpta=CRecuperar_estadoacopio();
break;
case "Listar":
     $rptamo=CBuscar_AcopioId_estadoacopio($_GET["idAcopio"]);
	 //$rptamo=CBuscar_AcopioId_estadoacopio(4);
	 $EstadoAcopioId=$rptamo["cuerpo"][0]["EstadoAcopioId"];
	 $EstadoAcopioEstimado=$rptamo["cuerpo"][0]["EstadoAcopioEstimado"];
	 $EstadoAcopioAcopiado=$rptamo["cuerpo"][0]["EstadoAcopioAcopiado"];
	 $EstadoAcopioSaldo=$rptamo["cuerpo"][0]["EstadoAcopioSaldo"];
	// $EstadoAcopioEstado=$rptamo["cuerpo"][0]["EstadoAcopioEstado"];
	 //$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
	 //$PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];			 
	 
    	$contenido="Listar_tabla_estadoacopio.php";
      include_once($contenido);
break;
case "Listarsimple":
 $Listarsimple_estadoacopio=CListadoSimple_estadoacopio();
break;
case "Buscar":
 $rpta=CBuscar_estadoacopio();
break;
case "Nuevo":
 $titulo= "Nuevo estadoacopio";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_estadoacopio.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_estadoacopio($_GET["id"]);
 $EstadoAcopioId=$rptamo["cuerpo"][0]["EstadoAcopioId"];
 $EstadoAcopioEstimado=$rptamo["cuerpo"][0]["EstadoAcopioEstimado"];
 $EstadoAcopioAcopiado=$rptamo["cuerpo"][0]["EstadoAcopioAcopiado"];
 $EstadoAcopioSaldo=$rptamo["cuerpo"][0]["EstadoAcopioSaldo"];
 $EstadoAcopioEstado=$rptamo["cuerpo"][0]["EstadoAcopioEstado"];
 $UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
 $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
 $titulo= "Actualizar estadoacopio";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_estadoacopio.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>