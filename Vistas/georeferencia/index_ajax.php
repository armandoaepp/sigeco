<?php 
ob_start();
include_once "./Controlador_georeferencia.php"; 
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
$rpta=CRegistrar_georeferencia();
$contenido="Registrar_georeferencia.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;

case "Actualizar":
	if ($_POST["GeoReferenciaId_"]>0) {
		$rpta=CActualizar_georeferencia();
		if($rpta==0){$rpta="Datos Actulizados Correctamente";}
		else {$rpta="Error al Actulizados Datos";	}
	
	}else{
			$rpta=CRegistrar_georeferencia();
			if($rpta==0){$rpta="Datos Actulizados Correctamente";}
			else {$rpta="Error al Actulizados Datos";	}
			
	}
	
/*	$rpta=CActualizar_georeferencia();
	if($rpta==0){$rpta="Datos Actulizados Correctamente";}
	else {$rpta="Error al Actulizados Datos";	}
	*/
	echo $rpta;
break;
case "Eliminar":
$rpta=CEliminar_georeferencia();
header("Location: ../georeferencia");
break;
case "Recuperar":
$rpta=CRecuperar_georeferencia();
break;
case "Listar":
	$data=CListar_georeferencia();
	$contenido="Listar_georeferencia_datos.php";
	@include_once($contenido);	

break;
case "Listarsimple":
$Listarsimple_georeferencia=CListadoSimple_georeferencia();
break;
case "Buscar":
$rpta=CBuscar_georeferencia();
break;
case "Nuevo":
$titulo= "Nuevo georeferencia";
$accionf= "?accion=Registrar";
$contenido="Registrar_georeferencia.php";
require_once "../layout.php";
break;
case "OpenModal":
	$GeoReferenciaId="";
	$GeoReferenciaLatitud="";
	$GeoReferenciaLongitud="";
	$GeoReferenciaAltitud="";
	$GeoReferenciaTipoGps="";
	$ParcelaId="";
 if(isset($_POST["id"])){
	$rptamo=CBuscar_georeferencia($_POST["id"]);	
	$GeoReferenciaId=$rptamo["cuerpo"][0]["GeoReferenciaId"];
	$GeoReferenciaLatitud=$rptamo["cuerpo"][0]["GeoReferenciaLatitud"];
	$GeoReferenciaLongitud=$rptamo["cuerpo"][0]["GeoReferenciaLongitud"];
	$GeoReferenciaAltitud=$rptamo["cuerpo"][0]["GeoReferenciaAltitud"];
	$GeoReferenciaTipoGps=$rptamo["cuerpo"][0]["GeoReferenciaTipoGps"];
	$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
	if(count($rptamo["cuerpo"])>0)	$modalidad=$GeoReferenciaId;
	else 	$modalidad="Autogenerado";
	
	}
$contenido="Actualizar_georeferencia.php";
@include_once($contenido);	

/*	$rptamo=CBuscar_georeferencia($_POST["id"]);	
	$GeoReferenciaId=$rptamo["cuerpo"][0]["GeoReferenciaId"];
	$GeoReferenciaLatitud=$rptamo["cuerpo"][0]["GeoReferenciaLatitud"];
	$GeoReferenciaLongitud=$rptamo["cuerpo"][0]["GeoReferenciaLongitud"];
	$GeoReferenciaAltitud=$rptamo["cuerpo"][0]["GeoReferenciaAltitud"];
	$GeoReferenciaTipoGps=$rptamo["cuerpo"][0]["GeoReferenciaTipoGps"];
	$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
	if(count($rptamo["cuerpo"])>0)	$modalidad=$GeoReferenciaId;
	else 	$modalidad="Autogenerado";
	$contenido="Actualizar_georeferencia.php";
	 @include_once($contenido);	
	 
	*/

break;
}
ob_flush();
?>