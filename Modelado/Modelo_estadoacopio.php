<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_estadoacopio{
//Constructor
public function Clase_estadoacopio(){}
//Atributos
private $EstadoAcopioId;
private $EstadoAcopioEstimado;
private $EstadoAcopioAcopiado;
private $EstadoAcopioSaldo;
private $EstadoAcopioEstado;
private $UnidadProductivaId;
private $PeriodoId;
private $AcopioId;
//Propiedades
public function setEstadoAcopioId($EstadoAcopioId_){ $this->EstadoAcopioId=$EstadoAcopioId_;}
public function getEstadoAcopioId(){ return $this->EstadoAcopioId;}
public function setEstadoAcopioEstimado($EstadoAcopioEstimado_){ $this->EstadoAcopioEstimado=$EstadoAcopioEstimado_;}
public function getEstadoAcopioEstimado(){ return $this->EstadoAcopioEstimado;}
public function setEstadoAcopioAcopiado($EstadoAcopioAcopiado_){ $this->EstadoAcopioAcopiado=$EstadoAcopioAcopiado_;}
public function getEstadoAcopioAcopiado(){ return $this->EstadoAcopioAcopiado;}
public function setEstadoAcopioSaldo($EstadoAcopioSaldo_){ $this->EstadoAcopioSaldo=$EstadoAcopioSaldo_;}
public function getEstadoAcopioSaldo(){ return $this->EstadoAcopioSaldo;}
public function setEstadoAcopioEstado($EstadoAcopioEstado_){ $this->EstadoAcopioEstado=$EstadoAcopioEstado_;}
public function getEstadoAcopioEstado(){ return $this->EstadoAcopioEstado;}
public function setUnidadProductivaId($UnidadProductivaId_){ $this->UnidadProductivaId=$UnidadProductivaId_;}
public function getUnidadProductivaId(){ return $this->UnidadProductivaId;}
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}

public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_estadoacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into estadoacopio values('$this->EstadoAcopioId','$this->EstadoAcopioEstimado','$this->EstadoAcopioAcopiado','$this->EstadoAcopioSaldo','$this->EstadoAcopioEstado','$this->UnidadProductivaId','$this->PeriodoId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_estadoacopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select estadoacopio.EstadoAcopioId As 'EstadoAcopioId',estadoacopio.EstadoAcopioEstimado As 'EstadoAcopioEstimado',estadoacopio.EstadoAcopioAcopiado As 'EstadoAcopioAcopiado',estadoacopio.EstadoAcopioSaldo As 'EstadoAcopioSaldo',estadoacopio.EstadoAcopioEstado As 'EstadoAcopioEstado',estadoacopio.UnidadProductivaId As 'UnidadProductivaId',estadoacopio.PeriodoId As 'PeriodoId' from estadoacopio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_estadoacopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from estadoacopio where EstadoAcopioId='$this->EstadoAcopioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_estadoacopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from estadoacopio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_estadoacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update estadoacopio set Estado='E' where EstadoAcopioId='$this->EstadoAcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_estadoacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update estadoacopio set estado='A' where EstadoAcopioId='$this->EstadoAcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_estadoacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update estadoacopio set EstadoAcopioEstimado='$this->EstadoAcopioEstimado',EstadoAcopioAcopiado='$this->EstadoAcopioAcopiado',EstadoAcopioSaldo='$this->EstadoAcopioSaldo',EstadoAcopioEstado='$this->EstadoAcopioEstado',UnidadProductivaId='$this->UnidadProductivaId',PeriodoId='$this->PeriodoId' where EstadoAcopioId='$this->EstadoAcopioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Buscar por IDACOPIO
public function Buscar_AcopioId_estadoacopio(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "SELECT * FROM estadoacopio WHERE 
	EstadoAcopioId=(SELECT EstadoAcopioId FROM acopio WHERE AcopioId='$this->AcopioId')";
	//echo "$consulta";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}

}
?>