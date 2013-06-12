<?php
include_once "../../Modelado/Modelo_parceladetalle.php"; 
include_once "../../Modelado/Modelo_unidadproductivaproducto.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php";
function CRegistrar_parceladetalle(){
	
$enparceladetalle=new Clase_parceladetalle();
$ParcelaDetalleFechaSiembra=fechaFormatoBD($_POST["ParcelaDetalleFechaSiembra_"]);	
//$enparceladetalle->setParcelaDetalleId(validar($_POST["ParcelaDetalleId_"]));
//$enparceladetalle->setUnidadProductivaProductoId(validar($_POST["UnidadProductivaProductoId_"]));
	session_start();	// la sesion 	
	$idUnidadP=$_SESSION["UnidadProductivaId"];
	$ParcelaID=$_SESSION["ParcelaId"];
	
	$productoID=$_POST["ProductoId_"];		
	
	$enparceladetalle->setUnidadProductivaId($idUnidadP);
	$enparceladetalle->setProductoId($productoID);
		
	//$enparceladetalle->setUnidadProductivaProductoId(validar($UnidadProductivaProductoId));
	$enparceladetalle->setParcelaId(validar($ParcelaID));
	$enparceladetalle->setParcelaDetalleArea(validar($_POST["ParcelaDetalleArea_"]));
	$enparceladetalle->setParcelaDetalleFechaSiembra(validar($ParcelaDetalleFechaSiembra));
	$enparceladetalle->setDistanciaSurcos(validar($_POST["DistanciaSurcos_"]));
	$enparceladetalle->setDistanciaPlantas(validar($_POST["DistanciaPlantas_"]));
	$enparceladetalle->setTipoSiembra(validar($_POST["TipoSiembra_"]));
	$rpta=$enparceladetalle->Insertar_parceladetalle();
return $rpta;
}

function CActualizar_parceladetalle(){
	$enparceladetalle=new Clase_parceladetalle();
	
	$ParcelaDetalleFechaSiembra=fechaFormatoBD($_POST["ParcelaDetalleFechaSiembra_"]);
	
	//$enparceladetalle->setUnidadProductivaProductoId(validar($_POST["UnidadProductivaProductoId_"]));
	session_start();	// la sesion 	
	$idUnidadP=$_SESSION["UnidadProductivaId"];
	$ParcelaID=$_SESSION["ParcelaId"];
	//Para sacar Id De la unidad productiva producto
	$productoID=$_POST["ProductoId_"];	
	/*
	$enunidadproductivaproducto=new Clase_unidadproductivaproducto();
	$enunidadproductivaproducto->setUnidadProductivaId($idUnidadP);
	$enunidadproductivaproducto->setProductoId($productoID);
	$dataID=$enunidadproductivaproducto->Listar_unidadproductovaproductoId();
	$UnidadProductivaProductoId= $dataID["cuerpo"][0]["UnidadProductivaProductoId"];
		
	*/
	$enparceladetalle->setUnidadProductivaId($idUnidadP);
	$enparceladetalle->setProductoId($productoID);
	
	$enparceladetalle->setParcelaDetalleId(validar($_POST["ParcelaDetalleId_"]));
	$enparceladetalle->setUnidadProductivaProductoId(validar($UnidadProductivaProductoId));
	$enparceladetalle->setParcelaId(validar($ParcelaID));
	$enparceladetalle->setParcelaDetalleArea(validar($_POST["ParcelaDetalleArea_"]));
	$enparceladetalle->setParcelaDetalleFechaSiembra(validar($ParcelaDetalleFechaSiembra));
	$enparceladetalle->setDistanciaSurcos(validar($_POST["DistanciaSurcos_"]));
	$enparceladetalle->setDistanciaPlantas(validar($_POST["DistanciaPlantas_"]));
	$enparceladetalle->setTipoSiembra(validar($_POST["TipoSiembra_"]));
	$rpta=$enparceladetalle->Actualizar_parceladetalle();
return $rpta;
}

function CEliminar_parceladetalle(){
$enparceladetalle=new Clase_parceladetalle();
$enparceladetalle->setParcelaDetalleId($_GET["id"]);
$rpta=$enparceladetalle->Eliminar_parceladetalle();
return $rpta;
}

function CRecuperar_parceladetalle(){
$enparceladetalle=new Clase_parceladetalle();
$enparceladetalle->setParcelaDetalleId($_GET["id"]);
$rpta=$enparceladetalle->Recuperar_parceladetalle();
return $rpta;
}

function CListar_parceladetalle(){
$enparceladetalle=new Clase_parceladetalle();
$rpta=$enparceladetalle->Listar_parceladetalle();
return $rpta;
}

function CListadoSimple_parceladetalle(){
$enparceladetalle=new Clase_parceladetalle();
$rpta=$enparceladetalle->ListadoSimple_parceladetalle();
return $rpta;
}

function CBuscar_parceladetalle($id){
$enparceladetalle=new Clase_parceladetalle();
$enparceladetalle->setParcelaDetalleId($id);
$rpta=$enparceladetalle->Buscar_parceladetalle();
return $rpta;}
//Método Listar productos por unidad Prodcutiva para llenar el combo para detalle de parcela
function CListar_producto_Unidadproductiva($id){
$enunidadproductivaproducto=new Clase_unidadproductivaproducto();
$enunidadproductivaproducto->setUnidadProductivaId($id);
$rpta=$enunidadproductivaproducto-> Listar_producto_Unidadproductiva();
return $rpta;}
//Método sacar la unidadprodcutivaproducto por id de unidadprodductivaID productoID
function CListar_unidadproductovaproductoId($unidadprodductivaID,$productoID){
$enunidadproductivaproducto=new Clase_unidadproductivaproducto();
$enunidadproductivaproducto->setUnidadProductivaId($unidadprodductivaID);
$enunidadproductivaproducto->setProductoId($productoID);
$rpta=$enunidadproductivaproducto->Listar_unidadproductovaproductoId();
return $rpta;}
?>