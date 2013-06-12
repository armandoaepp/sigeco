<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_georeferencia{
//Constructor
public function Clase_georeferencia(){}
//Atributos
private $GeoReferenciaId;
private $GeoReferenciaLatitud;
private $GeoReferenciaLongitud;
private $GeoReferenciaAltitud;
private $GeoReferenciaTipoGps;
private $ParcelaId;
//Propiedades
public function setGeoReferenciaId($GeoReferenciaId_){ $this->GeoReferenciaId=$GeoReferenciaId_;}
public function getGeoReferenciaId(){ return $this->GeoReferenciaId;}
public function setGeoReferenciaLatitud($GeoReferenciaLatitud_){ $this->GeoReferenciaLatitud=$GeoReferenciaLatitud_;}
public function getGeoReferenciaLatitud(){ return $this->GeoReferenciaLatitud;}
public function setGeoReferenciaLongitud($GeoReferenciaLongitud_){ $this->GeoReferenciaLongitud=$GeoReferenciaLongitud_;}
public function getGeoReferenciaLongitud(){ return $this->GeoReferenciaLongitud;}
public function setGeoReferenciaAltitud($GeoReferenciaAltitud_){ $this->GeoReferenciaAltitud=$GeoReferenciaAltitud_;}
public function getGeoReferenciaAltitud(){ return $this->GeoReferenciaAltitud;}
public function setGeoReferenciaTipoGps($GeoReferenciaTipoGps_){ $this->GeoReferenciaTipoGps=$GeoReferenciaTipoGps_;}
public function getGeoReferenciaTipoGps(){ return $this->GeoReferenciaTipoGps;}
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
//Métodos
//Método Insertar
public function Insertar_georeferencia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into georeferencia values('$this->GeoReferenciaId','$this->GeoReferenciaLatitud','$this->GeoReferenciaLongitud','$this->GeoReferenciaAltitud','$this->GeoReferenciaTipoGps','$this->ParcelaId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_georeferencia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select georeferencia.GeoReferenciaId As 'GeoReferenciaId',georeferencia.GeoReferenciaLatitud As 'Latitud',georeferencia.GeoReferenciaLongitud As 'Longitud',georeferencia.GeoReferenciaAltitud As 'Altitud',georeferencia.GeoReferenciaTipoGps As 'Tipo de Gps',georeferencia.ParcelaId As 'ParcelaId' from georeferencia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_georeferencia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from georeferencia where GeoReferenciaId='$this->GeoReferenciaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_georeferencia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from georeferencia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_georeferencia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update georeferencia set estado='E' where GeoReferenciaId='$this->GeoReferenciaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_georeferencia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update georeferencia set estado='A' where GeoReferenciaId='$this->GeoReferenciaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_georeferencia(){
$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Update georeferencia set GeoReferenciaLatitud='$this->GeoReferenciaLatitud',GeoReferenciaLongitud='$this->GeoReferenciaLongitud',GeoReferenciaAltitud='$this->GeoReferenciaAltitud',GeoReferenciaTipoGps='$this->GeoReferenciaTipoGps',ParcelaId='$this->ParcelaId' where GeoReferenciaId='$this->GeoReferenciaId'";
	$rpta=$con->MetodoRegistrar($consulta);
	//echo "consulta::: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}

//Método Buscar por ID d  parcela
public function Buscar_georeferencia_xParcelaID(){
	$rpta=array();
	try{
		include_once 'conexion.php';
		$con=new Conexion();
		$consulta= "select * from georeferencia where ParcelaId='$this->ParcelaId'";
		$rpta=$con->Listar($consulta);
		//echo "consulta:::: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>