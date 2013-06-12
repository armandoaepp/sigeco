<?php
include_once "../../Modelado/Modelo_acopiocontrato.php"; 
include_once "../validacion.php"; 
function CRegistrar_acopiocontrato(){
$enacopiocontrato=new Clase_acopiocontrato();
$enacopiocontrato->setAcopioContratoId(validar($_POST["AcopioContratoId_"]));
$enacopiocontrato->setAcopioAsignado(validar($_POST["AcopioAsignado_"]));
$enacopiocontrato->setAcopioPorAsignar(validar($_POST["AcopioPorAsignar_"]));
$enacopiocontrato->setContratoRequerido(validar($_POST["ContratoRequerido_"]));
$enacopiocontrato->setContratoAsignado(validar($_POST["ContratoAsignado_"]));
$enacopiocontrato->setAcopioId(validar($_POST["AcopioId_"]));
$enacopiocontrato->setContratoId(validar($_POST["ContratoId_"]));
$rpta=$enacopiocontrato->Insertar_acopiocontrato();
return $rpta;
}

function CActualizar_acopiocontrato(){
$enacopiocontrato=new Clase_acopiocontrato();
$enacopiocontrato->setAcopioContratoId(validar($_POST["AcopioContratoId_"]));
$enacopiocontrato->setAcopioAsignado(validar($_POST["AcopioAsignado_"]));
$enacopiocontrato->setAcopioPorAsignar(validar($_POST["AcopioPorAsignar_"]));
$enacopiocontrato->setContratoRequerido(validar($_POST["ContratoRequerido_"]));
$enacopiocontrato->setContratoAsignado(validar($_POST["ContratoAsignado_"]));
$enacopiocontrato->setAcopioId(validar($_POST["AcopioId_"]));
$enacopiocontrato->setContratoId(validar($_POST["ContratoId_"]));
$rpta=$enacopiocontrato->Actualizar_acopiocontrato();
return $rpta;
}

function CEliminar_acopiocontrato(){
$enacopiocontrato=new Clase_acopiocontrato();
$enacopiocontrato->setAcopioContratoId($_GET["id"]);
$rpta=$enacopiocontrato->Eliminar_acopiocontrato();
return $rpta;
}

function CRecuperar_acopiocontrato(){
$enacopiocontrato=new Clase_acopiocontrato();
$enacopiocontrato->setAcopioContratoId($_GET["id"]);
$rpta=$enacopiocontrato->Recuperar_acopiocontrato();
return $rpta;
}

function CListar_acopiocontrato(){
$enacopiocontrato=new Clase_acopiocontrato();

		if(isset($_POST["CatacionDesde_"]))
			$enacopiocontrato->setContratoPuntajeDesde(validar($_POST["CatacionDesde_"]));
		if(isset($_POST["CatacionHasta_"]))
			$enacopiocontrato->setContratoPuntajeHasta(validar($_POST["CatacionHasta_"]));
		if(isset($_POST["FechaEmbarque_"]))
			$enacopiocontrato->setContratoFechaEmbarque(validar($_POST["FechaEmbarque_"]));
		if(isset($_POST["Status_"]))
			$enacopiocontrato->setContratoStatus(validar($_POST["Status_"]));
		if(isset($_POST["TipoContratoId_"]))
			$enacopiocontrato->setTipoContratoId(validar($_POST["TipoContratoId_"]));
	 
$rpta=$enacopiocontrato->Listar_acopiocontrato();
return $rpta;
}

function CListadoSimple_acopiocontrato(){
$enacopiocontrato=new Clase_acopiocontrato();
$rpta=$enacopiocontrato->ListadoSimple_acopiocontrato();
return $rpta;
}

function CBuscar_acopiocontrato($id){
$enacopiocontrato=new Clase_acopiocontrato();
$enacopiocontrato->setAcopioContratoId($id);
$rpta=$enacopiocontrato->Buscar_acopiocontrato();
return $rpta;}

function CListarLotes_acopiocontrato(){
	$enacopiocontrato=new Clase_acopiocontrato();
	//$enacopiocontrato->setAcopioContratoId($id);
	$rpta=$enacopiocontrato->ListarLotes_acopiocontrato();
return $rpta;
}

?>