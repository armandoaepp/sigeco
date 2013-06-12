<?php
include_once "../../Modelado/Modelo_cultivoasociado.php"; 
include_once "../validacion.php"; 
function CRegistrar_cultivoasociado(){
	session_start();
	$IdParcela=$_SESSION["ParcelaId"];
		
	$encultivoasociado=new Clase_cultivoasociado();
	$encultivoasociado->setCultivoAsociadoId(validar($_POST["CultivoAsociadoId_"]));
	$encultivoasociado->setCultivoAsociadoNombre(validar($_POST["CultivoAsociadoNombre_"]));
	$encultivoasociado->setCultivoAsociadoNota(validar($_POST["CultivoAsociadoNota_"]));
	$encultivoasociado->setParcelaId(validar($IdParcela));
	$rpta=$encultivoasociado->Insertar_cultivoasociado();
	return $rpta;
}

function CActualizar_cultivoasociado(){
	$encultivoasociado=new Clase_cultivoasociado();
	$encultivoasociado->setCultivoAsociadoId(validar($_POST["CultivoAsociadoId_"]));
	$encultivoasociado->setCultivoAsociadoNombre(validar($_POST["CultivoAsociadoNombre_"]));
	$encultivoasociado->setCultivoAsociadoNota(validar($_POST["CultivoAsociadoNota_"]));
	//$encultivoasociado->setParcelaId(validar($_POST["ParcelaId_"]));
	$rpta=$encultivoasociado->Actualizar_cultivoasociado();
	return $rpta;
}

function CEliminar_cultivoasociado(){
$encultivoasociado=new Clase_cultivoasociado();
$encultivoasociado->setCultivoAsociadoId($_GET["id"]);
$rpta=$encultivoasociado->Eliminar_cultivoasociado();
return $rpta;
}

function CRecuperar_cultivoasociado(){
$encultivoasociado=new Clase_cultivoasociado();
$encultivoasociado->setCultivoAsociadoId($_GET["id"]);
$rpta=$encultivoasociado->Recuperar_cultivoasociado();
return $rpta;
}

function CListar_cultivoasociado(){
$encultivoasociado=new Clase_cultivoasociado();
$rpta=$encultivoasociado->Listar_cultivoasociado();
return $rpta;
}

function CListadoSimple_cultivoasociado(){
$encultivoasociado=new Clase_cultivoasociado();
$rpta=$encultivoasociado->ListadoSimple_cultivoasociado();
return $rpta;
}

function CBuscar_cultivoasociado($id){
$encultivoasociado=new Clase_cultivoasociado();
$encultivoasociado->setCultivoAsociadoId($id);
$rpta=$encultivoasociado->Buscar_cultivoasociado();
return $rpta;}

//Método Listar Cultivos Asociado por ID de Parcerla
function CListar_cultivoasociado_idParcela($id){
	$encultivoasociado=new Clase_cultivoasociado();
	$encultivoasociado->setParcelaId($id);
	$rpta=$encultivoasociado->Listar_cultivoasociado_idParcela();
	return $rpta;
}
?>