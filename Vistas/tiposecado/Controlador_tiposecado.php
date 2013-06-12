<?php
include_once "../../Modelado/Modelo_tiposecado.php"; 
include_once "../validacion.php"; 
function CRegistrar_tiposecado(){
$entiposecado=new Clase_tiposecado();
$entiposecado->setTipoSecadoId(validar($_POST["TipoSecadoId_"]));
$entiposecado->setTipoSecado(validar($_POST["TipoSecado_"]));
$rpta=$entiposecado->Insertar_tiposecado();
return $rpta;
}

function CActualizar_tiposecado(){
$entiposecado=new Clase_tiposecado();
$entiposecado->setTipoSecadoId(validar($_POST["TipoSecadoId_"]));
$entiposecado->setTipoSecado(validar($_POST["TipoSecado_"]));
$rpta=$entiposecado->Actualizar_tiposecado();
return $rpta;
}

function CEliminar_tiposecado(){
$entiposecado=new Clase_tiposecado();
$entiposecado->setTipoSecadoId($_GET["id"]);
$rpta=$entiposecado->Eliminar_tiposecado();
return $rpta;
}

function CRecuperar_tiposecado(){
$entiposecado=new Clase_tiposecado();
$entiposecado->setTipoSecadoId($_GET["id"]);
$rpta=$entiposecado->Recuperar_tiposecado();
return $rpta;
}

function CListar_tiposecado(){
$entiposecado=new Clase_tiposecado();
$rpta=$entiposecado->Listar_tiposecado();
return $rpta;
}

function CListadoSimple_tiposecado(){
$entiposecado=new Clase_tiposecado();
$rpta=$entiposecado->ListadoSimple_tiposecado();
return $rpta;
}

function CBuscar_tiposecado($id){
$entiposecado=new Clase_tiposecado();
$entiposecado->setTipoSecadoId($id);
$rpta=$entiposecado->Buscar_tiposecado();
return $rpta;}
?>