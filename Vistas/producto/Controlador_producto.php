<?php
include_once "../../Modelado/Modelo_producto.php"; 
include_once "../../Modelado/Modelo_unidadproductivaproducto.php"; 
include_once "../../Modelado/Modelo_periodo.php"; 
include_once "../validacion.php"; 
function CRegistrar_producto(){
$enproducto=new Clase_producto();

  $listaAfloracion=$_POST['ProductoMesAfloracion_chk'];
	$MesAfloracion="";
	if(count($listaAfloracion)>0){
		foreach($listaAfloracion as $indice => $valor){	//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
		 $MesAfloracion.=$valor.", ";		
		}	
	}
  $listaCosecha=$_POST['ProductoMesCosecha_chk'];
	$MesCosecha="";
	if(count($listaCosecha)>0){
		foreach($listaCosecha as $indice => $valor){	//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
		 $MesCosecha.=$valor.", ";		
		}	
	}
	$enproducto->setProductoId(validar($_POST["ProductoId_"]));
	$enproducto->setProductoVariedad(validar($_POST["ProductoVariedad_"]));
	$enproducto->setProductoArea(validar($_POST["ProductoArea_"]));
	$enproducto->setProductoProduccionAnual(validar($_POST["ProductoProduccionAnual_"]));
	$enproducto->setProductoMesAfloracion(validar( $MesAfloracion));
	$enproducto->setProductoMesCosecha(validar( $MesCosecha));
	$enproducto->setProductoDescripcion(validar($_POST["ProductoDescripcion_"]));
	$enproducto->setTipoProductoId(validar($_POST["TipoProductoId_"]));
	
	// para sacar el perido activo
	$enperiodo=new Clase_periodo();
	$rptaPeriodo=$enperiodo->PeriodoActivo_periodo();
		$idperiodo=$rptaPeriodo["cuerpo"][0]["PeriodoId"];
	$enproducto->setPeriodoId($idperiodo);
	$enproducto->setProductoEstado(validar("A"));
	
	$idProducto=$enproducto->Insertar_producto();
	
 	//llamos a la sesion 
	if($idProducto!=0){
		session_start();	// la sesion 
		$idUnidadP=$_SESSION["UnidadProductivaId"];
		$enunidadprductivaproducto=new Clase_unidadproductivaproducto();
		$enunidadprductivaproducto->setProductoId($idProducto);
		$enunidadprductivaproducto->setUnidadProductivaId($idUnidadP);
		
		$rpta=$enunidadprductivaproducto->Insertar_unidadproductivaproducto();
	}else{$rpta="No se puede Registrar";}

return $rpta;
}

function CActualizar_producto(){

$enproducto=new Clase_producto();

  $listaAfloracion=$_POST['ProductoMesAfloracion_chk'];
	$MesAfloracion="";
	if(count($listaAfloracion)>0){
		foreach($listaAfloracion as $indice => $valor){	//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
		 $MesAfloracion.=$valor.", ";		
		}	
	}
  $listaCosecha=$_POST['ProductoMesCosecha_chk'];
	$MesCosecha="";
	if(count($listaCosecha)>0){
		foreach($listaCosecha as $indice => $valor){	//Nombre del arreglo, indice de un valor especifico, el dato seleccionado
		 $MesCosecha.=$valor.", ";		
		}	
	}
	//$idProducto=$_POST["ProductoId_"];
	$enproducto->setProductoId(validar($_POST["ProductoId_"]));
	$enproducto->setProductoVariedad(validar($_POST["ProductoVariedad_"]));
	$enproducto->setProductoArea(validar($_POST["ProductoArea_"]));
	$enproducto->setProductoProduccionAnual(validar($_POST["ProductoProduccionAnual_"]));
	$enproducto->setProductoMesAfloracion(validar( $MesAfloracion));
	$enproducto->setProductoMesCosecha(validar( $MesCosecha));
	$enproducto->setProductoDescripcion(validar($_POST["ProductoDescripcion_"]));
	$enproducto->setTipoProductoId(validar($_POST["TipoProductoId_"]));
	$rpta=$enproducto->Actualizar_producto();
return $rpta;
}

function CEliminar_producto(){
	session_start();	// la sesion 
	$idUnidadProducto=$_SESSION["UnidadProductivaId"];
	$enunidadprductivaproducto=new Clase_unidadproductivaproducto();
	$enunidadprductivaproducto->setProductoId($_GET["id"]);
	$enunidadprductivaproducto->setUnidadProductivaId($idUnidadProducto);
	$rpta=$enunidadprductivaproducto->Eliminar_unidadproductivaproducto();
	return $rpta;
}

function CRecuperar_producto(){
$enproducto=new Clase_producto();
$enproducto->setProductoId($_GET["id"]);
$rpta=$enproducto->Recuperar_producto();
return $rpta;
}

function CListar_producto(){
$enproducto=new Clase_producto();
$rpta=$enproducto->Listar_producto();
return $rpta;
}

function CListadoSimple_producto(){
$enproducto=new Clase_producto();
$rpta=$enproducto->ListadoSimple_producto();
return $rpta;
}

function CBuscar_producto($id){
$enproducto=new Clase_producto();
$enproducto->setProductoId($id);
$rpta=$enproducto->Buscar_producto();
return $rpta;}
//Método Listar productos por unidad Prodcutiva
function CListar_producto_xUP($idUnidadP){
$enunidadprductivaproducto=new Clase_unidadproductivaproducto();
$enunidadprductivaproducto->setUnidadProductivaId($idUnidadP);
$rpta=$enunidadprductivaproducto->Listar_producto_xUP();
return $rpta;
}
?>