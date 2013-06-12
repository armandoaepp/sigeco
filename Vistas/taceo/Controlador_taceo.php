<?php
include_once "../../Modelado/Modelo_taceo.php"; 
include_once "../validacion.php"; 
function CRegistrar_taceo(){
	$entaceo=new Clase_taceo();
	$entaceo->setTaceoId(validar($_POST["TaceoId_"]));
	$entaceo->setTaceoFraganciaAroma(validar($_POST["TaceoFraganciaAroma_"]));
	$entaceo->setTaceoSaborResidual(validar($_POST["TaceoSaborResidual_"]));
	$entaceo->setTaceoAcidez(validar($_POST["TaceoAcidez_"]));
	$entaceo->setTaceoCuerpo(validar($_POST["TaceoCuerpo_"]));
	$entaceo->setTaceoBalance(validar($_POST["TaceoBalance_"]));
	$entaceo->setTaceoDulsor(validar($_POST["TaceoDulsor_"]));
	$entaceo->setTaceoUniformidad(validar($_POST["TaceoUniformidad_"]));
	$entaceo->setTaceoTazaLimpia(validar($_POST["TaceoTazaLimpia_"]));
	$entaceo->setTaceoPuntajeCatador(validar($_POST["TaceoPuntajeCatador_"]));
	$entaceo->setTaceoDefectos(validar($_POST["TaceoDefectos_"]));
	$entaceo->setTaceoNumeroTazas(validar($_POST["TaceoNumeroTazas_"]));
	$entaceo->setTaceoNotas(validar($_POST["TaceoNotas_"]));
	$entaceo->setTaceoCatadopor(validar($_POST["TaceoCatadopor_"]));
	$entaceo->setAcopioId(validar($_POST["AcopioId_"]));
	$rpta=$entaceo->Insertar_taceo();
	return $rpta;
}

function CActualizar_taceo(){
$entaceo=new Clase_taceo();
$entaceo->setTaceoId(validar($_POST["TaceoId_"]));
$entaceo->setTaceoFraganciaAroma(validar($_POST["TaceoFraganciaAroma_"]));
$entaceo->setTaceoSaborResidual(validar($_POST["TaceoSaborResidual_"]));
$entaceo->setTaceoAcidez(validar($_POST["TaceoAcidez_"]));
$entaceo->setTaceoCuerpo(validar($_POST["TaceoCuerpo_"]));
$entaceo->setTaceoBalance(validar($_POST["TaceoBalance_"]));
$entaceo->setTaceoDulsor(validar($_POST["TaceoDulsor_"]));
$entaceo->setTaceoUniformidad(validar($_POST["TaceoUniformidad_"]));
$entaceo->setTaceoTazaLimpia(validar($_POST["TaceoTazaLimpia_"]));
$entaceo->setTaceoPuntajeCatador(validar($_POST["TaceoPuntajeCatador_"]));
$entaceo->setTaceoDefectos(validar($_POST["TaceoDefectos_"]));
$entaceo->setTaceoNumeroTazas(validar($_POST["TaceoNumeroTazas_"]));
$entaceo->setTaceoNotas(validar($_POST["TaceoNotas_"]));
$entaceo->setTaceoCatadopor(validar($_POST["TaceoCatadopor_"]));
$entaceo->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$entaceo->Actualizar_taceo();
return $rpta;
}

function CEliminar_taceo(){
$entaceo=new Clase_taceo();
$entaceo->setTaceoId($_GET["id"]);
$rpta=$entaceo->Eliminar_taceo();
return $rpta;
}

function CRecuperar_taceo(){
$entaceo=new Clase_taceo();
$entaceo->setTaceoId($_GET["id"]);
$rpta=$entaceo->Recuperar_taceo();
return $rpta;
}

function CListar_taceo(){
$entaceo=new Clase_taceo();
$rpta=$entaceo->Listar_taceo();
return $rpta;
}

function CListadoSimple_taceo(){
$entaceo=new Clase_taceo();
$rpta=$entaceo->ListadoSimple_taceo();
return $rpta;
}

function CBuscar_taceo($id){
$entaceo=new Clase_taceo();
$entaceo->setTaceoId($id);
$rpta=$entaceo->Buscar_taceo();
return $rpta;}

function CListarAcopio_taceo($idAcopio){
	$entaceo=new Clase_taceo();
	$entaceo->setAcopioId($idAcopio);
	$rpta=$entaceo->ListarAcopio_taceo();
	return $rpta;
}
?>