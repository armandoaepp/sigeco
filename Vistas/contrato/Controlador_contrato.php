<?php
include_once "../../Modelado/Modelo_contrato.php"; 
include_once "../validacion.php"; 
	function CRegistrar_contrato(){
	$encontrato=new Clase_contrato();
	//$encontrato->setContratoId(validar($_POST["ContratoId_"]));
	$encontrato->setContratoId(NULL);
	$encontrato->setContratoNumero(validar($_POST["ContratoNumero_"]));
	$encontrato->setContratoCantidadSacos(validar($_POST["ContratoCantidadSacos_"]));
	$encontrato->setContratoKGxSaco(validar($_POST["ContratoKGxSaco_"]));
	$encontrato->setContratoPuntajeDesde(validar($_POST["ContratoPuntajeDesde_"]));
	$encontrato->setContratoPuntajeHasta(validar($_POST["ContratoPuntajeHasta_"]));
	//$encontrato->setContratoFecha(validar($_POST["ContratoFecha_"]));
	$encontrato->setContratoFechaEmbarque(validar($_POST["ContratoFechaEmbarque_"]));
	$encontrato->setContratoStatus(validar($_POST["ContratoStatus_"]));
	$encontrato->setContratoPosicion(validar($_POST["ContratoPosicion_"]));
	$encontrato->setContratoPrecioBolsa(validar($_POST["ContratoPrecioBolsa_"]));
	$encontrato->setContratoNumeroFactura(validar($_POST["ContratoNumeroFactura_"]));
	$encontrato->setContratoValorFod(validar($_POST["ContratoValorFod_"]));
	$encontrato->setContratoPuertoEmbarque(validar($_POST["ContratoPuertoEmbarque_"]));
	$encontrato->setContratoPuertoDestino(validar($_POST["ContratoPuertoDestino_"]));
	$encontrato->setContratoHumedad(validar($_POST["ContratoHumedad_"]));
	$encontrato->setContratoCantidadQuintales(validar($_POST["ContratoCantidadQuintales_"]));
	$encontrato->setContratoToneladas(validar($_POST["ContratoToneladas_"]));
	$encontrato->setContratoNotas(validar($_POST["ContratoNotas_"]));
	//$encontrato->setContratoEstado(validar($_POST["ContratoEstado_"]));
	$encontrato->setClienteId(validar($_POST["ClienteId_"]));
	$encontrato->setTipoContratoId(validar($_POST["TipoContratoId_"]));
	//$encontrato->setPeriodoId(validar($_POST["PeriodoId_"]));
	$rpta=$encontrato->Insertar_contrato();
return $rpta;
}

function CActualizar_contrato(){
$encontrato=new Clase_contrato();
	$encontrato->setContratoId(validar($_POST["ContratoId_"]));
	$encontrato->setContratoNumero(validar($_POST["ContratoNumero_"]));
	$encontrato->setContratoCantidadSacos(validar($_POST["ContratoCantidadSacos_"]));
	$encontrato->setContratoKGxSaco(validar($_POST["ContratoKGxSaco_"]));
	$encontrato->setContratoPuntajeDesde(validar($_POST["ContratoPuntajeDesde_"]));
	$encontrato->setContratoPuntajeHasta(validar($_POST["ContratoPuntajeHasta_"]));
	//$encontrato->setContratoFecha(validar($_POST["ContratoFecha_"]));
	$encontrato->setContratoFechaEmbarque(validar($_POST["ContratoFechaEmbarque_"]));
	$encontrato->setContratoStatus(validar($_POST["ContratoStatus_"]));
	$encontrato->setContratoPosicion(validar($_POST["ContratoPosicion_"]));
	$encontrato->setContratoPrecioBolsa(validar($_POST["ContratoPrecioBolsa_"]));
	$encontrato->setContratoNumeroFactura(validar($_POST["ContratoNumeroFactura_"]));
	$encontrato->setContratoValorFod(validar($_POST["ContratoValorFod_"]));
	$encontrato->setContratoPuertoEmbarque(validar($_POST["ContratoPuertoEmbarque_"]));
	$encontrato->setContratoPuertoDestino(validar($_POST["ContratoPuertoDestino_"]));
	$encontrato->setContratoHumedad(validar($_POST["ContratoHumedad_"]));
	//$encontrato->setContratoCantidadQuintales(validar($_POST["ContratoCantidadQuintales_"]));
	//$encontrato->setContratoToneladas(validar($_POST["ContratoToneladas_"]));
	$encontrato->setContratoNotas(validar($_POST["ContratoNotas_"]));
	//$encontrato->setContratoEstado(validar($_POST["ContratoEstado_"]));
	$encontrato->setClienteId(validar($_POST["ClienteId_"]));
	$encontrato->setTipoContratoId(validar($_POST["TipoContratoId_"]));
	//$encontrato->setPeriodoId(validar($_POST["PeriodoId_"]));
$rpta=$encontrato->Actualizar_contrato();
return $rpta;
}

function CEliminar_contrato(){
$encontrato=new Clase_contrato();
$encontrato->setContratoId($_GET["id"]);
$rpta=$encontrato->Eliminar_contrato();
return $rpta;
}

function CRecuperar_contrato(){
$encontrato=new Clase_contrato();
$encontrato->setContratoId($_GET["id"]);
$rpta=$encontrato->Recuperar_contrato();
return $rpta;
}

function CListar_contrato(){
$encontrato=new Clase_contrato();
$rpta=$encontrato->Listar_contrato();
return $rpta;
}

function CListadoSimple_contrato(){
$encontrato=new Clase_contrato();
$rpta=$encontrato->ListadoSimple_contrato();
return $rpta;
}

function CBuscar_contrato($id){
$encontrato=new Clase_contrato();
$encontrato->setContratoId($id);
$rpta=$encontrato->Buscar_contrato();
return $rpta;}

function CBuscarLike_contrato($ordernar,$buscar){
	$encontrato=new Clase_contrato();
	$rpta=$encontrato->BuscarLike_contrato($ordernar,$buscar);
	return $rpta;
}


?>