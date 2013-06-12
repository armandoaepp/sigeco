<?php 
ob_start();
header("Content-Type: text/html;charset=utf-8");// para uniformizar los datos en json problemas de las tildes
include_once "./Controlador_labor.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_POST["accion"])){
$evento=$_POST["accion"];
} else if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}
switch($evento){
case "RegistrarLabor":
	$rpta=CRegistrar_labor();
	/*$rpta=0;
	if($rpta==0){
		//$rpta="Datos Registrados Correctamente";
		session_start();	// lllamos a la sesion 
		$Idparcela=$_SESSION["ParcelaId"];
		$data=CListadoDetalle_labor($Idparcela);
		//$rpta=count($data["cuerpo"]);
		//$rpta=$cix->ImprimeTable("tablaDetallesLabores",$data,"","?","tablazebra");	
		$rpta	= $data["cuerpo"];
	}*/			
	echo json_encode($rpta);
break;
case "ListarDetalleLabores":
		session_start();	// lllamos a la sesion 
		$Idparcela=$_SESSION["ParcelaId"];
		$data=CListadoDetalle_labor($Idparcela);	
		$rpta	= $data["cuerpo"];				
	echo json_encode($rpta);
break;
case "Actualizar":
$rpta=CActualizar_labor();
$rptamo=CBuscar_labor($_GET["id"]);
$LaborId=$rptamo["cuerpo"][0]["LaborId"];
$TipoLaborId=$rptamo["cuerpo"][0]["TipoLaborId"];
$LaborFecha=$rptamo["cuerpo"][0]["LaborFecha"];
$LaborJornalesFamiliar=$rptamo["cuerpo"][0]["LaborJornalesFamiliar"];
$LaborJornalesContratado=$rptamo["cuerpo"][0]["LaborJornalesContratado"];
$LaborCostoUnitarioJornal=$rptamo["cuerpo"][0]["LaborCostoUnitarioJornal"];
$LaborArea=$rptamo["cuerpo"][0]["LaborArea"];
$LaborNota=$rptamo["cuerpo"][0]["LaborNota"];
$LaborTipo=$rptamo["cuerpo"][0]["LaborTipo"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$contenido="Actualizar_labor.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_labor();
header("Location: ../labor");
break;
case "Recuperar":
$rpta=CRecuperar_labor();
break;
case "Listar":
$titulo="Listar labor";
$data=CListar_labor();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_labor=$cix->ImprimeTable("tablalabor",$data,"?","?",5,$page);
$contenido="Listar_labor.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_labor=CListadoSimple_labor();
break;
case "Buscar":
$rpta=CBuscar_labor();
break;
case "Nuevo":
$titulo= "Nuevo labor";
$accionf= "?accion=Registrar";
$contenido="Registrar_labor.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_labor($_GET["id"]);
$LaborId=$rptamo["cuerpo"][0]["LaborId"];
$TipoLaborId=$rptamo["cuerpo"][0]["TipoLaborId"];
$LaborFecha=$rptamo["cuerpo"][0]["LaborFecha"];
$LaborJornalesFamiliar=$rptamo["cuerpo"][0]["LaborJornalesFamiliar"];
$LaborJornalesContratado=$rptamo["cuerpo"][0]["LaborJornalesContratado"];
$LaborCostoUnitarioJornal=$rptamo["cuerpo"][0]["LaborCostoUnitarioJornal"];
$LaborArea=$rptamo["cuerpo"][0]["LaborArea"];
$LaborNota=$rptamo["cuerpo"][0]["LaborNota"];
$LaborTipo=$rptamo["cuerpo"][0]["LaborTipo"];
$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
$titulo= "Actualizar labor";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_labor.php";
require_once "../layout.php";
break;
}
ob_flush();
?>