<?php
include_once "../../Modelado/Modelo_proceso.php"; 
include_once "../validacion.php"; 
function CRegistrar_proceso(){
	$enproceso=new Clase_proceso();
		
	if (isset($_POST["ProcesoDespulpadora_"])) {
		$ProcesoDespulpadora_="SI";	
	} else {
		$ProcesoDespulpadora_="NO";
	}	
	if (isset($_POST["ProcesoTanqueTina_"])) {
		$ProcesoTanqueTina_="SI";
	} else {
		$ProcesoTanqueTina_="NO";
	}
	if (isset($_POST["ProcesoCompostera_"])) {
		$ProcesoCompostera_="SI";
	} else {
		$ProcesoCompostera_="NO";
	}
	if (isset($_POST["ProcesoPozoInorganico_"])) {
		$ProcesoPozoInorganico_="SI";
	} else {
		$ProcesoPozoInorganico_="NO";
	}
	if (isset($_POST["ProcesoPozoMiel_"])) {
		$ProcesoPozoMiel_="SI";
	} else {
		$ProcesoPozoMiel_="NO";
	}
		session_start();	// lllamos a la sesion 
		$UnidadProductivaId_=$_SESSION["UnidadProductivaId"];	
	
	//$enproceso->setProcesoId(validar($_POST["ProcesoId_"]));
		$enproceso->setProcesoDespulpadora(validar($ProcesoDespulpadora_));
		$enproceso->setProcesoTanqueTina(validar($ProcesoTanqueTina_));
		$enproceso->setProcesoCompostera(validar($ProcesoCompostera_));
	$enproceso->setProcesoTiempoRecoleccion(validar($_POST["ProcesoTiempoRecoleccion_"]));
	$enproceso->setProcesoTiempoFermentacion(validar($_POST["ProcesoTiempoFermentacion_"]));
	$enproceso->setProcesoTipoFermentacion(validar($_POST["ProcesoTipoFermentacion_"]));
	$enproceso->setProcesoNumeroLavado(validar($_POST["ProcesoNumeroLavado_"]));
	$enproceso->setProcesoTiempoSecado(validar($_POST["ProcesoTiempoSecado_"]));
	$enproceso->setProcesoDescripcion(validar($_POST["ProcesoDescripcion_"]));
	$enproceso->setTipoSeleccionId(validar($_POST["TipoSeleccionId_"]));
	$enproceso->setTipoSecadoId(validar($_POST["TipoSecadoId_"]));
	$enproceso->setProcesoPozoInorganico(validar($ProcesoPozoInorganico_));
		$enproceso->setProcesoPozoMiel(validar($ProcesoPozoMiel_));
		$enproceso->setUnidadProductivaId(validar($UnidadProductivaId_));
	$rpta=$enproceso->Insertar_proceso();
	return $rpta;
}

function CActualizar_proceso(){
	$enproceso=new Clase_proceso();
	$enproceso->setProcesoId(validar($_POST["ProcesoId_"]));	
		if (isset($_POST["ProcesoDespulpadora_"])) {
			$ProcesoDespulpadora_="SI";	
		} else {
			$ProcesoDespulpadora_="NO";
		}	
		if (isset($_POST["ProcesoTanqueTina_"])) {
			$ProcesoTanqueTina_="SI";
		} else {
			$ProcesoTanqueTina_="NO";
		}
		if (isset($_POST["ProcesoCompostera_"])) {
			$ProcesoCompostera_="SI";
		} else {
			$ProcesoCompostera_="NO";
		}
		if (isset($_POST["ProcesoPozoInorganico_"])) {
			$ProcesoPozoInorganico_="SI";
		} else {
			$ProcesoPozoInorganico_="NO";
		}
		if (isset($_POST["ProcesoPozoMiel_"])) {
			$ProcesoPozoMiel_="SI";
		} else {
			$ProcesoPozoMiel_="NO";
		}
			session_start();	// lllamos a la sesion 
			$UnidadProductivaId_=$_SESSION["UnidadProductivaId"];	
		
		//$enproceso->setProcesoId(validar($_POST["ProcesoId_"]));
			$enproceso->setProcesoDespulpadora(validar($ProcesoDespulpadora_));
			$enproceso->setProcesoTanqueTina(validar($ProcesoTanqueTina_));
			$enproceso->setProcesoCompostera(validar($ProcesoCompostera_));
		$enproceso->setProcesoTiempoRecoleccion(validar($_POST["ProcesoTiempoRecoleccion_"]));
		$enproceso->setProcesoTiempoFermentacion(validar($_POST["ProcesoTiempoFermentacion_"]));
		$enproceso->setProcesoTipoFermentacion(validar($_POST["ProcesoTipoFermentacion_"]));
		$enproceso->setProcesoNumeroLavado(validar($_POST["ProcesoNumeroLavado_"]));
		$enproceso->setProcesoTiempoSecado(validar($_POST["ProcesoTiempoSecado_"]));
		$enproceso->setProcesoDescripcion(validar($_POST["ProcesoDescripcion_"]));
		$enproceso->setTipoSeleccionId(validar($_POST["TipoSeleccionId_"]));
		$enproceso->setTipoSecadoId(validar($_POST["TipoSecadoId_"]));
		$enproceso->setProcesoPozoInorganico(validar($ProcesoPozoInorganico_));
			$enproceso->setProcesoPozoMiel(validar($ProcesoPozoMiel_));
			$enproceso->setUnidadProductivaId(validar($UnidadProductivaId_));
	
	$rpta=$enproceso->Actualizar_proceso();
	return $rpta;
}

function CEliminar_proceso(){
$enproceso=new Clase_proceso();
$enproceso->setProcesoId($_GET["id"]);
$rpta=$enproceso->Eliminar_proceso();
return $rpta;
}

function CRecuperar_proceso(){
$enproceso=new Clase_proceso();
$enproceso->setProcesoId($_GET["id"]);
$rpta=$enproceso->Recuperar_proceso();
return $rpta;
}

function CListar_proceso(){
$enproceso=new Clase_proceso();
$rpta=$enproceso->Listar_proceso();
return $rpta;
}

function CListadoSimple_proceso(){
$enproceso=new Clase_proceso();
$rpta=$enproceso->ListadoSimple_proceso();
return $rpta;
}

function CBuscar_proceso($id){
$enproceso=new Clase_proceso();
$enproceso->setProcesoId($id);
$rpta=$enproceso->Buscar_proceso();
return $rpta;}

function Buscar_proceso_xUnidadProductiva($idundiadproductiva){
	$enproceso=new Clase_proceso();
	$enproceso->setUnidadProductivaId($idundiadproductiva);
	$rpta=$enproceso->Buscar_proceso_xUnidadProductiva();
	return $rpta;
}


?>