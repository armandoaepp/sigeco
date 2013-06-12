<?php
include_once "../../Modelado/Modelo_trazabilidad.php"; 
include_once "../validacion.php"; 
function CRegistrar_trazabilidad(){
	$entrazabilidad=new Clase_trazabilidad();
	session_start();
	$idAcopio=$_SESSION["idAcopio"];
	$lista=$_POST['chk'];
  if(count($lista)>0){	
	$entrazabilidad->setAcopioId($idAcopio);
	$entrazabilidad->Eliminar_AcopiId_trazabilidad();
  	foreach($lista as $indice => $valor){//    nombre del arreglo, indice de un valor especifico, el dato seleccionado
		$entrazabilidad->setParcelaId(validar($valor));
		$rpta=$entrazabilidad->Insertar_trazabilidad($idAcopio);
  	}	
  }else{
	  $rpta="Seleccione un Elemento Poder Eliminar" ;
	  }
	
return $rpta;
}

function CActualizar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId(validar($_POST["TrazabilidadId_"]));
$entrazabilidad->setParcelaId(validar($_POST["ParcelaId_"]));
$entrazabilidad->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$entrazabilidad->Actualizar_trazabilidad();
return $rpta;
}

function CEliminar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId($_GET["id"]);
$rpta=$entrazabilidad->Eliminar_trazabilidad();
return $rpta;
}

function CRecuperar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId($_GET["id"]);
$rpta=$entrazabilidad->Recuperar_trazabilidad();
return $rpta;
}

function CListar_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$rpta=$entrazabilidad->Listar_trazabilidad();
return $rpta;
}

function CListadoSimple_trazabilidad(){
$entrazabilidad=new Clase_trazabilidad();
$rpta=$entrazabilidad->ListadoSimple_trazabilidad();
return $rpta;
}

function CBuscar_trazabilidad($id){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setTrazabilidadId($id);
$rpta=$entrazabilidad->Buscar_trazabilidad();
return $rpta;}

function CParcelaAcopio_trazabilidad($idAcopio){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setAcopioId($idAcopio);
$rpta=$entrazabilidad->ParcelaAcopio_trazabilidad();
return $rpta;}

function CParcelaUnidadProductiva_trazabilidad($idAcopio){
$entrazabilidad=new Clase_trazabilidad();
$entrazabilidad->setAcopioId($idAcopio);
$rpta=$entrazabilidad->ParcelaUnidadProductiva_trazabilidad();
return $rpta;}
?>