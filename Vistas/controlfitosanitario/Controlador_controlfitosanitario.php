<?php
include_once "../../Modelado/Modelo_controlfitosanitario.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php";
function CRegistrar_controlfitosanitario(){
	$encontrolfitosanitario=new Clase_controlfitosanitario();
//$encontrolfitosanitario->setControlFitosanitarioId(validar($_POST["ControlFitosanitarioId_"]));
	$encontrolfitosanitario->setControlFitosanitarioDescripcion(validar($_POST["ControlFitosanitarioDescripcion_"]));
	$encontrolfitosanitario->setControlFitosanitarioCantidad(validar($_POST["ControlFitosanitarioCantidad_"]));
	$encontrolfitosanitario->setControlFitosanitarioCostoUnitario(validar($_POST["ControlFitosanitarioCostoUnitario_"]));
	$encontrolfitosanitario->setControlFitosanitarioJornalFamiliar(validar($_POST["ControlFitosanitarioJornalFamiliar_"]));
	$encontrolfitosanitario->setControlFitosanitarioJornalContratado(validar($_POST["ControlFitosanitarioJornalContratado_"]));
	$encontrolfitosanitario->setControlFitosanitarioCostoJornal(validar($_POST["ControlFitosanitarioCostoJornal_"]));
	$encontrolfitosanitario->setLaborId(validar($_POST["LaborId_"]));
	$encontrolfitosanitario->setControlFitosanitarioFecha(validar(fechaFormatoBD($_POST["ControlFitosanitarioFecha_"])));
	$rpta=$encontrolfitosanitario->Insertar_controlfitosanitario();
return $rpta;
}

function CActualizar_controlfitosanitario(){
$encontrolfitosanitario=new Clase_controlfitosanitario();

	$encontrolfitosanitario->setControlFitosanitarioId(validar($_POST["ControlFitosanitarioId_"]));
	$encontrolfitosanitario->setControlFitosanitarioDescripcion(validar($_POST["ControlFitosanitarioDescripcion_"]));
	$encontrolfitosanitario->setControlFitosanitarioCantidad(validar($_POST["ControlFitosanitarioCantidad_"]));
	$encontrolfitosanitario->setControlFitosanitarioCostoUnitario(validar($_POST["ControlFitosanitarioCostoUnitario_"]));
	$encontrolfitosanitario->setControlFitosanitarioJornalFamiliar(validar($_POST["ControlFitosanitarioJornalFamiliar_"]));
	$encontrolfitosanitario->setControlFitosanitarioJornalContratado(validar($_POST["ControlFitosanitarioJornalContratado_"]));
	$encontrolfitosanitario->setControlFitosanitarioCostoJornal(validar($_POST["ControlFitosanitarioCostoJornal_"]));
	$encontrolfitosanitario->setLaborId(validar($_POST["LaborId_"]));
	$encontrolfitosanitario->setControlFitosanitarioFecha(validar(fechaFormatoBD($_POST["ControlFitosanitarioFecha_"])));
	
/*$encontrolfitosanitario->setControlFitosanitarioId(validar($_POST["ControlFitosanitarioId_"]));
$encontrolfitosanitario->setControlFitosanitarioDescripcion(validar($_POST["ControlFitosanitarioDescripcion_"]));
$encontrolfitosanitario->setControlFitosanitarioCantidad(validar($_POST["ControlFitosanitarioCantidad_"]));
$encontrolfitosanitario->setControlFitosanitarioCostoUnitario(validar($_POST["ControlFitosanitarioCostoUnitario_"]));
$encontrolfitosanitario->setControlFitosanitarioJornalFamiliar(validar($_POST["ControlFitosanitarioJornalFamiliar_"]));
$encontrolfitosanitario->setControlFitosanitarioJornalContratado(validar($_POST["ControlFitosanitarioJornalContratado_"]));
$encontrolfitosanitario->setControlFitosanitarioCostoJornal(validar($_POST["ControlFitosanitarioCostoJornal_"]));
$encontrolfitosanitario->setLaborId(validar($_POST["LaborId_"]));
$encontrolfitosanitario->setControlFitosanitarioFecha(validar($_POST["ControlFitosanitarioFecha_"]));*/

$rpta=$encontrolfitosanitario->Actualizar_controlfitosanitario();
return $rpta;
}

function CEliminar_controlfitosanitario(){
$encontrolfitosanitario=new Clase_controlfitosanitario();
$encontrolfitosanitario->setControlFitosanitarioId($_GET["id"]);
$rpta=$encontrolfitosanitario->Eliminar_controlfitosanitario();
return $rpta;
}

function CRecuperar_controlfitosanitario(){
$encontrolfitosanitario=new Clase_controlfitosanitario();
$encontrolfitosanitario->setControlFitosanitarioId($_GET["id"]);
$rpta=$encontrolfitosanitario->Recuperar_controlfitosanitario();
return $rpta;
}

function CListar_controlfitosanitario(){
$encontrolfitosanitario=new Clase_controlfitosanitario();
$rpta=$encontrolfitosanitario->Listar_controlfitosanitario();
return $rpta;
}

function CListadoSimple_controlfitosanitario(){
$encontrolfitosanitario=new Clase_controlfitosanitario();
$rpta=$encontrolfitosanitario->ListadoSimple_controlfitosanitario();
return $rpta;
}

function CBuscar_controlfitosanitario($id){
$encontrolfitosanitario=new Clase_controlfitosanitario();
$encontrolfitosanitario->setControlFitosanitarioId($id);
$rpta=$encontrolfitosanitario->Buscar_controlfitosanitario();
return $rpta;}

function CBuscar_controlfitosanitario_xIdLabor($idLabor){
	$encontrolfitosanitario=new Clase_controlfitosanitario();
	$encontrolfitosanitario->setLaborId($idLabor);
	$rpta=$encontrolfitosanitario->Buscar_controlfitosanitario_xIdLabor();
	return $rpta;
}

function CBuscar_controlfitosanitario_xIdParcela($IdParcela){
	$encontrolfitosanitario=new Clase_controlfitosanitario();
	$encontrolfitosanitario->setParcelaId($IdParcela);
	$rpta=$encontrolfitosanitario->Buscar_controlfitosanitario_xIdParcela();
	return $rpta;
}

?>