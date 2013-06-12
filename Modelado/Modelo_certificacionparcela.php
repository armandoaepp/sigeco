<?php 
class Clase_certificacionparcela{
//Constructor
public function Clase_certificacionparcela(){}
//Atributos
private $CertificacionParcelaId;
private $CertificacionId;
private $ParcelaId;
//Propiedades
public function setCertificacionParcelaId($CertificacionParcelaId_){ $this->CertificacionParcelaId=$CertificacionParcelaId_;}
public function getCertificacionParcelaId(){ return $this->CertificacionParcelaId;}
public function setCertificacionId($CertificacionId_){ $this->CertificacionId=$CertificacionId_;}
public function getCertificacionId(){ return $this->CertificacionId;}
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
//Métodos
//Método Insertar
public function Insertar_certificacionparcela(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Insert into certificacionparcela values('$this->CertificacionParcelaId','$this->CertificacionId','$this->ParcelaId')";
	//echo "consulta:::::::::::::: $consulta";
	$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_certificacionparcela(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select certificacionparcela.CertificacionParcelaId As 'CertificacionParcelaId',certificacionparcela.CertificacionId As 'CertificacionId',certificacionparcela.ParcelaId As 'ParcelaId' from certificacionparcela";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_certificacionparcela(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from certificacionparcela where CertificacionParcelaId='$this->CertificacionParcelaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_certificacionparcela(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from certificacionparcela";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_certificacionparcela(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificacionparcela set estado='E' where CertificacionParcelaId='$this->CertificacionParcelaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_certificacionparcela(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificacionparcela set estado='A' where CertificacionParcelaId='$this->CertificacionParcelaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_certificacionparcela(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificacionparcela set CertificacionId='$this->CertificacionId',ParcelaId='$this->ParcelaId' where CertificacionParcelaId='$this->CertificacionParcelaId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>