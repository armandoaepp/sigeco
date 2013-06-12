<?php
include_once "../../Modelado/Modelo_parametro.php"; 
include_once "../validacion.php"; 
function CRegistrar_parametro(){
	$enparametro=new Clase_parametro();
	$enparametro->setParametroId(validar($_POST["ParametroId_"]));
	$enparametro->setParametroGanulometria17(validar($_POST["ParametroGanulometria17_"]));
	$enparametro->setParametroGanulometria15(validar($_POST["ParametroGanulometria15_"]));
	//$enparametro->setParametroGanulometriaTotal(validar($_POST["ParametroGanulometriaTotal_"]));
	$enparametro->setParametroDefectosPrimarios(validar($_POST["ParametroDefectosPrimarios_"]));
	$enparametro->setParametroDefectosSecundario(validar($_POST["ParametroDefectosSecundario_"]));
	/*
	$enparametro->setParametroMuestraExportable(validar($_POST["ParametroMuestraExportable_"]));
	$enparametro->setParametroMuestraDescarte(validar($_POST["ParametroMuestraDescarte_"]));
	$enparametro->setParametroMuestraImpureza(validar($_POST["ParametroMuestraImpureza_"]));
	*/
	$enparametro->setAcopioId(validar($_POST["AcopioId_"]));
	$rpta=$enparametro->Insertar_parametro();
return $rpta;
}

function CActualizar_parametro(){
$enparametro=new Clase_parametro();
$enparametro->setParametroId(validar($_POST["ParametroId_"]));
$enparametro->setParametroGanulometria17(validar($_POST["ParametroGanulometria17_"]));
$enparametro->setParametroGanulometria15(validar($_POST["ParametroGanulometria15_"]));
$enparametro->setParametroGanulometriaTotal(validar($_POST["ParametroGanulometriaTotal_"]));
$enparametro->setParametroDefectosPrimarios(validar($_POST["ParametroDefectosPrimarios_"]));
$enparametro->setParametroDefectosSecundario(validar($_POST["ParametroDefectosSecundario_"]));
$enparametro->setParametroMuestraExportable(validar($_POST["ParametroMuestraExportable_"]));
$enparametro->setParametroMuestraDescarte(validar($_POST["ParametroMuestraDescarte_"]));
$enparametro->setParametroMuestraImpureza(validar($_POST["ParametroMuestraImpureza_"]));
$enparametro->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$enparametro->Actualizar_parametro();
return $rpta;
}

function CEliminar_parametro(){
$enparametro=new Clase_parametro();
$enparametro->setParametroId($_GET["id"]);
$rpta=$enparametro->Eliminar_parametro();
return $rpta;
}

function CRecuperar_parametro(){
$enparametro=new Clase_parametro();
$enparametro->setParametroId($_GET["id"]);
$rpta=$enparametro->Recuperar_parametro();
return $rpta;
}

function CListar_parametro(){
$enparametro=new Clase_parametro();
$rpta=$enparametro->Listar_parametro();
return $rpta;
}

function CListadoSimple_parametro(){
$enparametro=new Clase_parametro();
$rpta=$enparametro->ListadoSimple_parametro();
return $rpta;
}

function CBuscar_parametro($id){
$enparametro=new Clase_parametro();
$enparametro->setParametroId($id);
$rpta=$enparametro->Buscar_parametro();
return $rpta;}

function CListarAcopio_parametro($idAcopio){
$enparametro=new Clase_parametro();
$enparametro->setAcopioId($idAcopio);
$rpta=$enparametro->ListarAcopio_parametro();
return $rpta;}
?>