<?php
include_once "../../Modelado/Modelo_tiposeleccion.php"; 
include_once "../validacion.php"; 
function CRegistrar_tiposeleccion(){
$entiposeleccion=new Clase_tiposeleccion();
$entiposeleccion->setTipoSeleccionId(validar($_POST["TipoSeleccionId_"]));
$entiposeleccion->setTipoSeleccion(validar($_POST["TipoSeleccion_"]));
$rpta=$entiposeleccion->Insertar_tiposeleccion();
return $rpta;
}

function CActualizar_tiposeleccion(){
$entiposeleccion=new Clase_tiposeleccion();
$entiposeleccion->setTipoSeleccionId(validar($_POST["TipoSeleccionId_"]));
$entiposeleccion->setTipoSeleccion(validar($_POST["TipoSeleccion_"]));
$rpta=$entiposeleccion->Actualizar_tiposeleccion();
return $rpta;
}

function CEliminar_tiposeleccion(){
$entiposeleccion=new Clase_tiposeleccion();
$entiposeleccion->setTipoSeleccionId($_GET["id"]);
$rpta=$entiposeleccion->Eliminar_tiposeleccion();
return $rpta;
}

function CRecuperar_tiposeleccion(){
$entiposeleccion=new Clase_tiposeleccion();
$entiposeleccion->setTipoSeleccionId($_GET["id"]);
$rpta=$entiposeleccion->Recuperar_tiposeleccion();
return $rpta;
}

function CListar_tiposeleccion(){
$entiposeleccion=new Clase_tiposeleccion();
$rpta=$entiposeleccion->Listar_tiposeleccion();
return $rpta;
}

function CListadoSimple_tiposeleccion(){
$entiposeleccion=new Clase_tiposeleccion();
$rpta=$entiposeleccion->ListadoSimple_tiposeleccion();
return $rpta;
}

function CBuscar_tiposeleccion($id){
$entiposeleccion=new Clase_tiposeleccion();
$entiposeleccion->setTipoSeleccionId($id);
$rpta=$entiposeleccion->Buscar_tiposeleccion();
return $rpta;}
?>