<?php
include_once "../../Modelado/Modelo_certificadocalidad.php"; 
include_once "../validacion.php"; 
function CRegistrar_certificadocalidad(){
	$encertificadocalidad=new Clase_certificadocalidad();
	$encertificadocalidad->setCertificadoCalidadId(validar($_POST["CertificadoCalidadId_"]));
	$encertificadocalidad->setCertificadoCalidadVariedadTipica(validar($_POST["CertificadoCalidadVariedadTipica_"]));
	$encertificadocalidad->setCertificadoCalidadVariedadCaturra(validar($_POST["CertificadoCalidadVariedadCaturra_"]));
	$encertificadocalidad->setCertificadoCalidadVariedadBourbon(validar($_POST["CertificadoCalidadVariedadBourbon_"]));
	$encertificadocalidad->setCertificadoCalidadVariedadCatimoro(validar($_POST["CertificadoCalidadVariedadCatimoro_"]));
	$encertificadocalidad->setCertificadoCalidadTipoSecadoAlSol(validar($_POST["CertificadoCalidadTipoSecadoAlSol_"]));
	$encertificadocalidad->setCertificadoCalidadTipoSecadoMecanico(validar($_POST["CertificadoCalidadTipoSecadoMecanico_"]));
	$encertificadocalidad->setCertificadoCalidadAltitud(validar($_POST["CertificadoCalidadAltitud_"]));
	$encertificadocalidad->setCertificadoCalidadBajoSombra(validar($_POST["CertificadoCalidadBajoSombra_"]));
	//$encertificadocalidad->setCertificadoCalidadVariedadTotal(validar($_POST["CertificadoCalidadVariedadTotal_"]));
	//$encertificadocalidad->setCertificadoCalidadTipoSecadoTotal(validar($_POST["CertificadoCalidadTipoSecadoTotal_"]));
	$encertificadocalidad->setAcopioId(validar($_POST["AcopioId_"]));
	$rpta=$encertificadocalidad->Insertar_certificadocalidad();
return $rpta;
}

function CActualizar_certificadocalidad(){
$encertificadocalidad=new Clase_certificadocalidad();
$encertificadocalidad->setCertificadoCalidadId(validar($_POST["CertificadoCalidadId_"]));
$encertificadocalidad->setCertificadoCalidadVariedadTipica(validar($_POST["CertificadoCalidadVariedadTipica_"]));
$encertificadocalidad->setCertificadoCalidadVariedadCaturra(validar($_POST["CertificadoCalidadVariedadCaturra_"]));
$encertificadocalidad->setCertificadoCalidadVariedadBourbon(validar($_POST["CertificadoCalidadVariedadBourbon_"]));
$encertificadocalidad->setCertificadoCalidadVariedadCatimoro(validar($_POST["CertificadoCalidadVariedadCatimoro_"]));
$encertificadocalidad->setCertificadoCalidadTipoSecadoAlSol(validar($_POST["CertificadoCalidadTipoSecadoAlSol_"]));
$encertificadocalidad->setCertificadoCalidadTipoSecadoMecanico(validar($_POST["CertificadoCalidadTipoSecadoMecanico_"]));
$encertificadocalidad->setCertificadoCalidadAltitud(validar($_POST["CertificadoCalidadAltitud_"]));
$encertificadocalidad->setCertificadoCalidadBajoSombra(validar($_POST["CertificadoCalidadBajoSombra_"]));
$encertificadocalidad->setCertificadoCalidadVariedadTotal(validar($_POST["CertificadoCalidadVariedadTotal_"]));
$encertificadocalidad->setCertificadoCalidadTipoSecadoTotal(validar($_POST["CertificadoCalidadTipoSecadoTotal_"]));
$encertificadocalidad->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$encertificadocalidad->Actualizar_certificadocalidad();
return $rpta;
}

function CEliminar_certificadocalidad(){
$encertificadocalidad=new Clase_certificadocalidad();
$encertificadocalidad->setCertificadoCalidadId($_GET["id"]);
$rpta=$encertificadocalidad->Eliminar_certificadocalidad();
return $rpta;
}

function CRecuperar_certificadocalidad(){
$encertificadocalidad=new Clase_certificadocalidad();
$encertificadocalidad->setCertificadoCalidadId($_GET["id"]);
$rpta=$encertificadocalidad->Recuperar_certificadocalidad();
return $rpta;
}

function CListar_certificadocalidad(){
$encertificadocalidad=new Clase_certificadocalidad();
$rpta=$encertificadocalidad->Listar_certificadocalidad();
return $rpta;
}

function CListadoSimple_certificadocalidad(){
$encertificadocalidad=new Clase_certificadocalidad();
$rpta=$encertificadocalidad->ListadoSimple_certificadocalidad();
return $rpta;
}

function CBuscar_certificadocalidad($id){
$encertificadocalidad=new Clase_certificadocalidad();
$encertificadocalidad->setCertificadoCalidadId($id);
$rpta=$encertificadocalidad->Buscar_certificadocalidad();
return $rpta;}

function CListarAcopio_certificadocalidad($idAcopio){
$encertificadocalidad=new Clase_certificadocalidad();
$encertificadocalidad->setAcopioId($idAcopio);
$rpta=$encertificadocalidad->ListarAcopio_certificadocalidad();
return $rpta;
}
?>