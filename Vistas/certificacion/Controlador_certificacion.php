<?php
include_once "../../Modelado/Modelo_certificacion.php"; 
include_once "../../Modelado/Modelo_certificacionparcela.php"; 

include_once "../validacion.php"; 
include_once "../fecha.php";
function CRegistrar_certificacion(){
	$encertificacion=new Clase_certificacion();
	$CertificacionFechaEmision_=fechaFormatoBD($_POST["CertificacionFechaEmision_"]);
	$CertificacionFechaVenci_=fechaFormatoBD($_POST["CertificacionFechaVenci_"]);
	
	//$encertificacion->setCertificacionId(validar($_POST["CertificacionId_"]));
	$encertificacion->setCertificacionStatus(validar($_POST["CertificacionStatus_"]));
	$encertificacion->setCertificacionEmitido(validar($_POST["CertificacionEmitido_"]));
	$encertificacion->setCertificacionFechaEmision(validar($CertificacionFechaEmision_));
	$encertificacion->setCertificacionFechaVenci(validar($CertificacionFechaVenci_));
	$encertificacion->setCertificacionNumero(validar($_POST["CertificacionNumero_"]));
	$encertificacion->setCertificacionNota(validar($_POST["CertificacionNota_"]));
	$encertificacion->setTipoCertificacionId(validar($_POST["TipoCertificacionId_"]));
	$rpta=$encertificacion->Insertar_certificacion();
	
	// $rpta almacena el id autoincremen de Certidicacion
	$idCertificacion=$rpta;
	if($idCertificacion>0){
			session_start();
			$idparacela=$_SESSION["ParcelaId"];	
		$encertificacionparcela=new Clase_certificacionparcela();
		$encertificacionparcela->setParcelaId($idparacela);
		$encertificacionparcela->setCertificacionId($idCertificacion);
		$rpta=$encertificacionparcela->Insertar_certificacionparcela();
		
		}
	return $rpta;
}

function CActualizar_certificacion(){
	$encertificacion=new Clase_certificacion();
	$CertificacionFechaEmision_=fechaFormatoBD($_POST["CertificacionFechaEmision_"]);
	$CertificacionFechaVenci_=fechaFormatoBD($_POST["CertificacionFechaVenci_"]);
	
	$encertificacion->setCertificacionId(validar($_POST["CertificacionId_"]));
	$encertificacion->setCertificacionStatus(validar($_POST["CertificacionStatus_"]));
	$encertificacion->setCertificacionEmitido(validar($_POST["CertificacionEmitido_"]));
	$encertificacion->setCertificacionFechaEmision(validar($CertificacionFechaEmision_));
	$encertificacion->setCertificacionFechaVenci(validar($CertificacionFechaVenci_));
	$encertificacion->setCertificacionNumero(validar($_POST["CertificacionNumero_"]));
	$encertificacion->setCertificacionNota(validar($_POST["CertificacionNota_"]));
	$encertificacion->setTipoCertificacionId(validar($_POST["TipoCertificacionId_"]));
	
	/*$encertificacion->setCertificacionId(validar($_POST["CertificacionId_"]));
	$encertificacion->setCertificacionStatus(validar($_POST["CertificacionStatus_"]));
	$encertificacion->setCertificacionEmitido(validar($_POST["CertificacionEmitido_"]));
	$encertificacion->setCertificacionFechaEmision(validar($_POST["CertificacionFechaEmision_"]));
	$encertificacion->setCertificacionFechaVenci(validar($_POST["CertificacionFechaVenci_"]));
	$encertificacion->setCertificacionNumero(validar($_POST["CertificacionNumero_"]));
	$encertificacion->setCertificacionNota(validar($_POST["CertificacionNota_"]));
	$encertificacion->setTipoCertificacionId(validar($_POST["TipoCertificacionId_"]));*/
	$rpta=$encertificacion->Actualizar_certificacion();
return $rpta;
}

function CEliminar_certificacion(){
$encertificacion=new Clase_certificacion();
$encertificacion->setCertificacionId($_GET["id"]);
$rpta=$encertificacion->Eliminar_certificacion();
return $rpta;
}

function CRecuperar_certificacion(){
$encertificacion=new Clase_certificacion();
$encertificacion->setCertificacionId($_GET["id"]);
$rpta=$encertificacion->Recuperar_certificacion();
return $rpta;
}

function CListar_certificacion(){
$encertificacion=new Clase_certificacion();
$rpta=$encertificacion->Listar_certificacion();
return $rpta;
}

function CListadoSimple_certificacion(){
$encertificacion=new Clase_certificacion();
$rpta=$encertificacion->ListadoSimple_certificacion();
return $rpta;
}

function CBuscar_certificacion($id){
$encertificacion=new Clase_certificacion();
$encertificacion->setCertificacionId($id);
$rpta=$encertificacion->Buscar_certificacion();
return $rpta;}

function CListar_certificacion_xParcela($idparcela){
$encertificacion=new Clase_certificacion();
$encertificacion->setParcelaId($idparcela);
$rpta=$encertificacion->Listar_certificacion_xParcela();
return $rpta;}
?>