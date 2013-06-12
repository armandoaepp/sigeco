<?php
include_once "../../Modelado/Modelo_tipocontrato.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipocontrato(){
$entipocontrato=new Clase_tipocontrato();
$entipocontrato->setTipoContratoId(validar($_POST["TipoContratoId_"]));
$entipocontrato->setTipoContrato(validar($_POST["TipoContrato_"]));
$entipocontrato->setTipoContratoEstado(validar($_POST["TipoContratoEstado_"]));
$rpta=$entipocontrato->Insertar_tipocontrato();
return $rpta;
}

function CActualizar_tipocontrato(){
$entipocontrato=new Clase_tipocontrato();
$entipocontrato->setTipoContratoId(validar($_POST["TipoContratoId_"]));
$entipocontrato->setTipoContrato(validar($_POST["TipoContrato_"]));
$entipocontrato->setTipoContratoEstado(validar($_POST["TipoContratoEstado_"]));
$rpta=$entipocontrato->Actualizar_tipocontrato();
return $rpta;
}

function CEliminar_tipocontrato(){
$entipocontrato=new Clase_tipocontrato();
$entipocontrato->setTipoContratoId($_GET["id"]);
$rpta=$entipocontrato->Eliminar_tipocontrato();
return $rpta;
}

function CRecuperar_tipocontrato(){
$entipocontrato=new Clase_tipocontrato();
$entipocontrato->setTipoContratoId($_GET["id"]);
$rpta=$entipocontrato->Recuperar_tipocontrato();
return $rpta;
}

function CListar_tipocontrato(){
$entipocontrato=new Clase_tipocontrato();
$rpta=$entipocontrato->Listar_tipocontrato();
return $rpta;
}

function CListadoSimple_tipocontrato(){
$entipocontrato=new Clase_tipocontrato();
$rpta=$entipocontrato->ListadoSimple_tipocontrato();
return $rpta;
}

function CBuscar_tipocontrato($id){
$entipocontrato=new Clase_tipocontrato();
$entipocontrato->setTipoContratoId($id);
$rpta=$entipocontrato->Buscar_tipocontrato();
return $rpta;}
?>