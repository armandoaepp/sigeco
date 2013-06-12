<?php
include_once "../../Modelado/Modelo_periodo.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php"; 
function CRegistrar_periodo(){
$enperiodo=new Clase_periodo();
//$enperiodo->setPeriodoId(validar($_POST["PeriodoId_"]));
$enperiodo->setPeriodoAño(validar($_POST["PeriodoAño_"]));
$enperiodo->setPeriodoFechaInicio(validar($_POST["PeriodoFechaInicio_"]));
$enperiodo->setPeriodoFechaCierre(validar($_POST["PeriodoFechaCierre_"]));
$enperiodo->setPeriodoEstado(validar($_POST["PeriodoEstado_"]));
$rpta=$enperiodo->Insertar_periodo();
return $rpta;
}

function CActualizar_periodo(){
$enperiodo=new Clase_periodo();
$enperiodo->setPeriodoId(validar($_POST["PeriodoId_"]));
$enperiodo->setPeriodoAño(validar($_POST["PeriodoAño_"]));
$enperiodo->setPeriodoFechaInicio(validar($_POST["PeriodoFechaInicio_"]));
$enperiodo->setPeriodoFechaCierre(validar($_POST["PeriodoFechaCierre_"]));
$enperiodo->setPeriodoEstado(validar($_POST["PeriodoEstado_"]));
$rpta=$enperiodo->Actualizar_periodo();
return $rpta;
}

function CEliminar_periodo(){
$enperiodo=new Clase_periodo();
$enperiodo->setPeriodoId($_GET["id"]);
$rpta=$enperiodo->Eliminar_periodo();
return $rpta;
}

function CRecuperar_periodo(){
$enperiodo=new Clase_periodo();
$enperiodo->setPeriodoId($_GET["id"]);
$rpta=$enperiodo->Recuperar_periodo();
return $rpta;
}

function CListar_periodo(){
$enperiodo=new Clase_periodo();
$rpta=$enperiodo->Listar_periodo();
return $rpta;
}

function CListadoSimple_periodo(){
$enperiodo=new Clase_periodo();
$rpta=$enperiodo->ListadoSimple_periodo();
return $rpta;
}

function CBuscar_periodo($id){
$enperiodo=new Clase_periodo();
$enperiodo->setPeriodoId($id);
$rpta=$enperiodo->Buscar_periodo();
return $rpta;}

function CPeriodoActivo_periodo(){
	$enperiodo=new Clase_periodo();
	$rpta=$enperiodo->PeriodoActivo_periodo();
	return $rpta;
}

?>