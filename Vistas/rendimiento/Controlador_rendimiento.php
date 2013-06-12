<?php
include_once "../../Modelado/Modelo_rendimiento.php"; 
include_once "../validacion.php"; 
function CRegistrar_rendimiento(){
	$enrendimiento=new Clase_rendimiento();
	//$enrendimiento->setRendimientoId(validar($_POST["RendimientoId_"]));
	$enrendimiento->setRendimientoMuestra(validar($_POST["RendimientoMuestra_"]));
	$enrendimiento->setRendimientoCafePilado(validar($_POST["RendimientoCafePilado_"]));
	$enrendimiento->setRendimientoCafeDescarte(validar($_POST["RendimientoCafeDescarte_"]));
	/*
	$enrendimiento->setRendimientoCascara(validar($_POST["RendimientoCascara_"]));
	$enrendimiento->setRendimientoExportable(validar($_POST["RendimientoExportable_"]));
	$enrendimiento->setRendimientoTotal(validar($_POST["RendimientoTotal_"]));
	$enrendimiento->setRendimientoPorcentaje(validar($_POST["RendimientoPorcentaje_"]));
	*/
	$enrendimiento->setAcopioId(validar($_POST["AcopioId_"]));
	$rpta=$enrendimiento->Insertar_rendimiento();
return $rpta;
}

function CActualizar_rendimiento(){
	$enrendimiento=new Clase_rendimiento();
	$enrendimiento->setRendimientoId(validar($_POST["RendimientoId_"]));
	$enrendimiento->setRendimientoMuestra(validar($_POST["RendimientoMuestra_"]));
	$enrendimiento->setRendimientoCafePilado(validar($_POST["RendimientoCafePilado_"]));
	$enrendimiento->setRendimientoCafeDescarte(validar($_POST["RendimientoCafeDescarte_"]));
	//$enrendimiento->setRendimientoCascara(validar($_POST["RendimientoCascara_"]));
	//$enrendimiento->setRendimientoExportable(validar($_POST["RendimientoExportable_"]));
	//$enrendimiento->setRendimientoTotal(validar($_POST["RendimientoTotal_"]));
	//$enrendimiento->setRendimientoPorcentaje(validar($_POST["RendimientoPorcentaje_"]));
	$enrendimiento->setAcopioId(validar($_POST["AcopioId_"]));
	$rpta=$enrendimiento->Actualizar_rendimiento();
return $rpta;
}

function CEliminar_rendimiento(){
$enrendimiento=new Clase_rendimiento();
$enrendimiento->setRendimientoId($_GET["id"]);
$rpta=$enrendimiento->Eliminar_rendimiento();
return $rpta;
}

function CRecuperar_rendimiento(){
$enrendimiento=new Clase_rendimiento();
$enrendimiento->setRendimientoId($_GET["id"]);
$rpta=$enrendimiento->Recuperar_rendimiento();
return $rpta;
}

function CListar_rendimiento(){
$enrendimiento=new Clase_rendimiento();
$rpta=$enrendimiento->Listar_rendimiento();
return $rpta;
}

function CListadoSimple_rendimiento(){
$enrendimiento=new Clase_rendimiento();
$rpta=$enrendimiento->ListadoSimple_rendimiento();
return $rpta;
}

function CBuscar_rendimiento($id){
$enrendimiento=new Clase_rendimiento();
$enrendimiento->setRendimientoId($id);
$rpta=$enrendimiento->Buscar_rendimiento();
return $rpta;}

function CBuscar_Acopio_rendimiento($idAcopio){
$enrendimiento=new Clase_rendimiento();
$enrendimiento->setAcopioId($idAcopio);
$rpta=$enrendimiento->Buscar_Acopio_rendimiento();
return $rpta;}
?>