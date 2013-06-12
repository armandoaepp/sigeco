<?php
include_once "../../Modelado/Modelo_georeferencia.php"; 
include_once "../validacion.php"; 
function CRegistrar_georeferencia(){
	$engeoreferencia=new Clase_georeferencia();
		session_start();
		$ParcelaId_=$_SESSION["ParcelaId"];	
		$engeoreferencia->setGeoReferenciaId(validar($_POST["GeoReferenciaId_"]));
		$engeoreferencia->setGeoReferenciaLatitud(validar($_POST["GeoReferenciaLatitud_"]));
		$engeoreferencia->setGeoReferenciaLongitud(validar($_POST["GeoReferenciaLongitud_"]));
		$engeoreferencia->setGeoReferenciaAltitud(validar($_POST["GeoReferenciaAltitud_"]));
		$engeoreferencia->setGeoReferenciaTipoGps(validar($_POST["GeoReferenciaTipoGps_"]));
		$engeoreferencia->setParcelaId(validar($ParcelaId_));
	$rpta=$engeoreferencia->Insertar_georeferencia();
return $rpta;
}

function CActualizar_georeferencia(){
$engeoreferencia=new Clase_georeferencia();
		session_start();
		$ParcelaId_=$_SESSION["ParcelaId"];	
		$engeoreferencia->setGeoReferenciaId(validar($_POST["GeoReferenciaId_"]));
		$engeoreferencia->setGeoReferenciaLatitud(validar($_POST["GeoReferenciaLatitud_"]));
		$engeoreferencia->setGeoReferenciaLongitud(validar($_POST["GeoReferenciaLongitud_"]));
		$engeoreferencia->setGeoReferenciaAltitud(validar($_POST["GeoReferenciaAltitud_"]));
		$engeoreferencia->setGeoReferenciaTipoGps(validar($_POST["GeoReferenciaTipoGps_"]));
		$engeoreferencia->setParcelaId(validar($ParcelaId_));
		
	/*if ($_POST["GeoReferenciaId_"]>0) {
		$rpta=$engeoreferencia->Actualizar_georeferencia();
		if($rpta==0){$rpta="Datos Actulizados Correctamente";}
		else {$rpta="Error al Actulizados Datos";	}	
	}else{
			$rpta=$engeoreferencia->Insertar_georeferencia();
			if($rpta==0){$rpta="Datos Actulizados Correctamente";}
			else {$rpta="Error al Actulizados Datos";	}			
	}*/
		$rpta=$engeoreferencia->Actualizar_georeferencia();
return $rpta;
}

function CEliminar_georeferencia(){
$engeoreferencia=new Clase_georeferencia();
$engeoreferencia->setGeoReferenciaId($_GET["id"]);
$rpta=$engeoreferencia->Eliminar_georeferencia();
return $rpta;
}

function CRecuperar_georeferencia(){
$engeoreferencia=new Clase_georeferencia();
$engeoreferencia->setGeoReferenciaId($_GET["id"]);
$rpta=$engeoreferencia->Recuperar_georeferencia();
return $rpta;
}

function CListar_georeferencia(){
$engeoreferencia=new Clase_georeferencia();
$rpta=$engeoreferencia->Listar_georeferencia();
return $rpta;
}

function CListadoSimple_georeferencia(){
$engeoreferencia=new Clase_georeferencia();
$rpta=$engeoreferencia->ListadoSimple_georeferencia();
return $rpta;
}

function CBuscar_georeferencia($id){
$engeoreferencia=new Clase_georeferencia();
$engeoreferencia->setGeoReferenciaId($id);
$rpta=$engeoreferencia->Buscar_georeferencia();
return $rpta;}

function CBuscar_georeferencia_xParcelaID($idParcela){
$engeoreferencia=new Clase_georeferencia();
$engeoreferencia->setParcelaId($idParcela);
$rpta=$engeoreferencia->Buscar_georeferencia_xParcelaID();
return $rpta;}
?>