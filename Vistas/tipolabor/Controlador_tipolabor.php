<?php
include_once "../../Modelado/Modelo_tipolabor.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipolabor(){
$entipolabor=new Clase_tipolabor();
$entipolabor->setTipoLaborId(validar($_POST["TipoLaborId_"]));
$entipolabor->setTipoLabor(validar($_POST["TipoLabor_"]));
$rpta=$entipolabor->Insertar_tipolabor();
return $rpta;
}

function CActualizar_tipolabor(){
$entipolabor=new Clase_tipolabor();
$entipolabor->setTipoLaborId(validar($_POST["TipoLaborId_"]));
$entipolabor->setTipoLabor(validar($_POST["TipoLabor_"]));
$rpta=$entipolabor->Actualizar_tipolabor();
return $rpta;
}

function CEliminar_tipolabor(){
$entipolabor=new Clase_tipolabor();
$entipolabor->setTipoLaborId($_GET["id"]);
$rpta=$entipolabor->Eliminar_tipolabor();
return $rpta;
}

function CRecuperar_tipolabor(){
$entipolabor=new Clase_tipolabor();
$entipolabor->setTipoLaborId($_GET["id"]);
$rpta=$entipolabor->Recuperar_tipolabor();
return $rpta;
}

function CListar_tipolabor(){
$entipolabor=new Clase_tipolabor();
$rpta=$entipolabor->Listar_tipolabor();
return $rpta;
}

function CListadoSimple_tipolabor(){
	$entipolabor=new Clase_tipolabor();
	$rpta=$entipolabor->ListadoSimple_tipolabor();
	return $rpta;
}
//Método Listar los tipos de labor sin el control fitosanitario
function CListadoSimple_tipolabor_sinControl(){
	$entipolabor=new Clase_tipolabor();
	$rpta=$entipolabor->ListadoSimple_tipolabor_sinControl();
	return $rpta;
}

function CBuscar_tipolabor($id){
$entipolabor=new Clase_tipolabor();
$entipolabor->setTipoLaborId($id);
$rpta=$entipolabor->Buscar_tipolabor();
return $rpta;}
?>