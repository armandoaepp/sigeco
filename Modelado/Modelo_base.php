<?php 
class Clase_base{
//Constructor
public function Clase_base(){}
//Atributos
private $BaseId;
private $BaseNombre;
private $UnidadProductivaId;
//Propiedades
public function setBaseId($BaseId_){ $this->BaseId=$BaseId_;}
public function getBaseId(){ return $this->BaseId;}
public function setBaseNombre($BaseNombre_){ $this->BaseNombre=$BaseNombre_;}
public function getBaseNombre(){ return $this->BaseNombre;}
public function setUnidadProductivaId($UnidadProductivaId_) { $this->UnidadProductivaId = $UnidadProductivaId_;}
public function getUnidadProductivaId() {return $this->UnidadProductivaId;}
//Métodos
//Método Insertar
public function Insertar_base(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Insert into base values('$this->BaseId','$this->BaseNombre')";
	$rpta=$con->MetodoRegistrar($consulta);
	
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function Listar_base(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Select base.BaseId As 'BaseId',base.BaseNombre As 'Nombre' from base";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Buscar por ID
public function Buscar_base(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from base where BaseId='$this->BaseId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_base(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from base";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_base(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update base set estado='E' where BaseId='$this->BaseId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_base(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update base set estado='A' where BaseId='$this->BaseId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_base(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update base set BaseNombre='$this->BaseNombre' where BaseId='$this->BaseId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar bases de unidades porductiva por Productor
public function Listar_base_UnidadadProductivaxProrductor(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="SELECT DISTINCT b.BaseId, b.BaseNombre FROM base b INNER JOIN parcela p ON b.BaseId=p.BaseId
		INNER JOIN unidadproductiva up ON up.UnidadProductivaId = p.UnidadProductivaId WHERE up.UnidadProductivaId='$this->UnidadProductivaId' ORDER BY 2";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>