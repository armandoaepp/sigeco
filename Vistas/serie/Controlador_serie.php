<?php
include_once "../../Modelado/Modelo_serie.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php"; 
function CRegistrar_serie(){
	session_start();
	$idUser=$_SESSION["idUsuario"];
$enserie=new Clase_serie();
//$enserie->setSerieId(validar($_POST["SerieId_"]));
$enserie->setSerieNumero(validar($_POST["SerieNumero_"]));
$enserie->setSerieInicio(validar($_POST["SerieInicio_"]));
$enserie->setSerieFin(validar($_POST["SerieFin_"]));
// $enserie->setSerieFechaReg(validar($_POST["SerieFechaReg_"]));
$enserie->setSerieFechaReg(fechaActualBD());
$enserie->setSerieEstado(validar($_POST["SerieEstado_"]));
$enserie->setUsuarioId(validar($idUser));
//$enserie->setPeriodoId(validar($_POST["PeriodoId_"]));
$rpta=$enserie->Insertar_serie();
return $rpta;
}

function CActualizar_serie(){
$enserie=new Clase_serie();
$enserie->setSerieId(validar($_POST["SerieId_"]));
$enserie->setSerieNumero(validar($_POST["SerieNumero_"]));
$enserie->setSerieInicio(validar($_POST["SerieInicio_"]));
$enserie->setSerieFin(validar($_POST["SerieFin_"]));
$enserie->setSerieFechaReg(validar($_POST["SerieFechaReg_"]));
$enserie->setSerieEstado(validar($_POST["SerieEstado_"]));
$enserie->setUsuarioId(validar($_POST["UsuarioId_"]));
$enserie->setPeriodoId(validar($_POST["PeriodoId_"]));
$rpta=$enserie->Actualizar_serie();
return $rpta;
}

function CEliminar_serie(){
$enserie=new Clase_serie();
$enserie->setSerieId($_GET["id"]);
$rpta=$enserie->Eliminar_serie();
return $rpta;
}

function CRecuperar_serie(){
$enserie=new Clase_serie();
$enserie->setSerieId($_GET["id"]);
$rpta=$enserie->Recuperar_serie();
return $rpta;
}

function CListar_serie(){
$enserie=new Clase_serie();
$rpta=$enserie->Listar_serie();
return $rpta;
}

function CListadoSimple_serie(){
$enserie=new Clase_serie();
$rpta=$enserie->ListadoSimple_serie();
return $rpta;
}

function CBuscar_serie($id){
$enserie=new Clase_serie();
$enserie->setSerieId($id);
$rpta=$enserie->Buscar_serie();
return $rpta;}
?>