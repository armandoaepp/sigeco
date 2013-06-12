<?php
include_once "../../Modelado/Modelo_trazabilidad.php"; 
include_once "../validacion.php"; 
function CRegistrar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId(validar($_POST["TrazabilidadId_"]));
$entrazabilidad->setTrazabilidadParcela(validar($_POST["TrazabilidadParcela_"]));
$entrazabilidad->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$entrazabilidad->Insertar_trazabilidad();
return $rpta;
}

function CActualizar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId(validar($_POST["TrazabilidadId_"]));
$entrazabilidad->setTrazabilidadParcela(validar($_POST["TrazabilidadParcela_"]));
$entrazabilidad->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$entrazabilidad->Actualizar_trazabilidad();
return $rpta;
}

function CEliminar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId($_GET["id"]);
$rpta=$entrazabilidad->Eliminar_trazabilidad();
return $rpta;
}

function CRecuperar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId($_GET["id"]);
$rpta=$entrazabilidad->Recuperar_trazabilidad();
return $rpta;
}

function CListar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$rpta=$entrazabilidad->Listar_trazabilidad();
return $rpta;
}

function CListadoSimple_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$rpta=$entrazabilidad->ListadoSimple_trazabilidad();
return $rpta;
}

function CBuscar_trazabilidad($id){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId($id);
$rpta=$entrazabilidad->Buscar_trazabilidad();
return $rpta;}

function CParcelaAcopio_trazabilidad($idAcopio){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setAcopioId($idAcopio);
$rpta=$entrazabilidad->ParcelaAcopio_trazabilidad();
return $rpta;}
?>