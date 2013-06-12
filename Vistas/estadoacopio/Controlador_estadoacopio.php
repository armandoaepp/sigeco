<?php
include_once "../../Modelado/Modelo_estadoacopio.php"; 
include_once "../validacion.php"; 
function CRegistrar_estadoacopio(){
$enestadoacopio=new Clase_estadoacopio();
$enestadoacopio->setEstadoAcopioId(validar($_POST["EstadoAcopioId_"]));
$enestadoacopio->setEstadoAcopioEstimado(validar($_POST["EstadoAcopioEstimado_"]));
$enestadoacopio->setEstadoAcopioAcopiado(validar($_POST["EstadoAcopioAcopiado_"]));
$enestadoacopio->setEstadoAcopioSaldo(validar($_POST["EstadoAcopioSaldo_"]));
$enestadoacopio->setEstadoAcopioEstado(validar($_POST["EstadoAcopioEstado_"]));
$enestadoacopio->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
$enestadoacopio->setPeriodoId(validar($_POST["PeriodoId_"]));
$rpta=$enestadoacopio->Insertar_estadoacopio();
return $rpta;
}

function CActualizar_estadoacopio(){
$enestadoacopio=new Clase_estadoacopio();
$enestadoacopio->setEstadoAcopioId(validar($_POST["EstadoAcopioId_"]));
$enestadoacopio->setEstadoAcopioEstimado(validar($_POST["EstadoAcopioEstimado_"]));
$enestadoacopio->setEstadoAcopioAcopiado(validar($_POST["EstadoAcopioAcopiado_"]));
$enestadoacopio->setEstadoAcopioSaldo(validar($_POST["EstadoAcopioSaldo_"]));
$enestadoacopio->setEstadoAcopioEstado(validar($_POST["EstadoAcopioEstado_"]));
$enestadoacopio->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
$enestadoacopio->setPeriodoId(validar($_POST["PeriodoId_"]));
$rpta=$enestadoacopio->Actualizar_estadoacopio();
return $rpta;
}

function CEliminar_estadoacopio(){
$enestadoacopio=new Clase_estadoacopio();
$enestadoacopio->setEstadoAcopioId($_GET["id"]);
$rpta=$enestadoacopio->Eliminar_estadoacopio();
return $rpta;
}

function CRecuperar_estadoacopio(){
$enestadoacopio=new Clase_estadoacopio();
$enestadoacopio->setEstadoAcopioId($_GET["id"]);
$rpta=$enestadoacopio->Recuperar_estadoacopio();
return $rpta;
}

function CListar_estadoacopio(){
$enestadoacopio=new Clase_estadoacopio();
$rpta=$enestadoacopio->Listar_estadoacopio();
return $rpta;
}

function CListadoSimple_estadoacopio(){
$enestadoacopio=new Clase_estadoacopio();
$rpta=$enestadoacopio->ListadoSimple_estadoacopio();
return $rpta;
}

function CBuscar_estadoacopio($id){
$enestadoacopio=new Clase_estadoacopio();
$enestadoacopio->setEstadoAcopioId($id);
$rpta=$enestadoacopio->Buscar_estadoacopio();
return $rpta;}

function CBuscar_AcopioId_estadoacopio($idAcopio){
$enestadoacopio=new Clase_estadoacopio();
$enestadoacopio->setAcopioId($idAcopio);
$rpta=$enestadoacopio->Buscar_AcopioId_estadoacopio();
return $rpta;}
?>