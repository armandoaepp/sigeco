<?php
include_once "../../Modelado/Modelo_parcela.php"; 
include_once "../validacion.php"; 
function CRegistrar_parcela(){	
$enparcela=new Clase_parcela();
	session_start();	// lllamos a la sesion 	
	$idUnidadP=$_SESSION["UnidadProductivaId"];	
    
//$enparcela->setParcelaId(validar($_POST["ParcelaId_"]));
$enparcela->setParcelaNombre(validar($_POST["ParcelaNombre_"]));
$enparcela->setParcelaArea(validar($_POST["ParcelaArea_"]));
$enparcela->setUnidadProductivaId(validar($idUnidadP));
//$enparcela->setCertificacionId(validar($_POST["CertificacionId_"]));
$enparcela->setBaseId(validar($_POST["BaseId_"]));
$enparcela->setDistritoId(validar($_POST["DistritoId_"]));
$enparcela->setParcelaCaserio(validar($_POST["ParcelaCaserio_"]));
$enparcela->setParcelaEstado("A");
$rpta=$enparcela->Insertar_parcela();
return $rpta;
}

function CActualizar_parcela(){
$enparcela=new Clase_parcela();
	session_start();	// lllamos a la sesion 	
	$idUnidadP=$_SESSION["UnidadProductivaId"];	
    
$enparcela->setParcelaId(validar($_POST["ParcelaId_"]));
$enparcela->setParcelaNombre(validar($_POST["ParcelaNombre_"]));
$enparcela->setParcelaArea(validar($_POST["ParcelaArea_"]));
$enparcela->setUnidadProductivaId(validar($idUnidadP));
//$enparcela->setCertificacionId(validar($_POST["CertificacionId_"]));
$enparcela->setBaseId(validar($_POST["BaseId_"]));
$enparcela->setDistritoId(validar($_POST["DistritoId_"]));
$enparcela->setParcelaCaserio(validar($_POST["ParcelaCaserio_"]));
$enparcela->setParcelaEstado("A");

/*$enparcela->setParcelaId(validar($_POST["ParcelaId_"]));
$enparcela->setParcelaNombre(validar($_POST["ParcelaNombre_"]));
$enparcela->setParcelaArea(validar($_POST["ParcelaArea_"]));
$enparcela->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
//$enparcela->setCertificacionId(validar($_POST["CertificacionId_"]));
$enparcela->setBaseId(validar($_POST["BaseId_"]));
$enparcela->setDistritoId(validar($_POST["DistritoId_"]));
$enparcela->setParcelaCaserio(validar($_POST["ParcelaCaserio_"]));*/

$rpta=$enparcela->Actualizar_parcela();
return $rpta;
}

function CRecuperar_parcela(){
$enparcela=new Clase_parcela();
$enparcela->setParcelaId($_GET["id"]);
$rpta=$enparcela->Recuperar_parcela();
return $rpta;
}

function CListar_parcela(){
$enparcela=new Clase_parcela();
$rpta=$enparcela->Listar_parcela();
return $rpta;
}

function CListadoSimple_parcela(){
$enparcela=new Clase_parcela();
$rpta=$enparcela->ListadoSimple_parcela();
return $rpta;
}

function CBuscar_parcela($id){
$enparcela=new Clase_parcela();
$enparcela->setParcelaId($id);
$rpta=$enparcela->Buscar_parcela();
return $rpta;}

function CEliminar_parcela(){
	$enparcela=new Clase_parcela();
	$enparcela->setParcelaId($_GET["id"]);
	$rpta=$enparcela->Eliminar_parcela();
	return $rpta;
}
//==== Eliminar en Serie 
function CEliminarSerie_parcela() {
   $enparcela=new Clase_parcela();
	$lista=$_POST['chk'];
  if(count($lista)>0){
  foreach($lista as $indice => $valor){//    nombre del arreglo, indice de un valor especifico, el dato seleccionado  	
    $enparcela->setParcelaId($valor);
    $rpta = $enparcela->Eliminar_parcela();   
  }
  }else{
	  $rpta="Seleccione un Elemento Poder Eliminar" ;
	  }
    
    return $rpta;
}
// ====== 
function CListarParcela($unidadproductivaId){
	$enparcela=new Clase_parcela();
	$enparcela->setUnidadProductivaId($unidadproductivaId);
	$rpta=$enparcela->ListarParcela();
	return $rpta;
}
function CListar_parcela_productos($unidadproductivaId,$idParcela){
	$enparcela=new Clase_parcela();
	$enparcela->setUnidadProductivaId($unidadproductivaId);
	$enparcela->setParcelaId($idParcela);
	$rpta=$enparcela->Listar_parcela_productos();
	return $rpta;
}
function CListar_parcela_georeferencia($idParcela){
	$enparcela=new Clase_parcela();
	$enparcela->setParcelaId($idParcela);
	$rpta=$enparcela->Listar_parcela_georeferencia();
	return $rpta;
}

function CListar_datosGenerales_parcela($idParcela){
	$enparcela=new Clase_parcela();
	$enparcela->setParcelaId($idParcela);
	$rpta=$enparcela->Listar_datosGenerales_parcela();
	return $rpta;
}
function CListar_Parcela_xUnidadProductiva($IdUnidadProductiva){
	$enparcela=new Clase_parcela();
	$enparcela->setUnidadProductivaId($IdUnidadProductiva);
	$rpta=$enparcela->Listar_Parcela_xUnidadProductiva();
	return $rpta;
}


?>