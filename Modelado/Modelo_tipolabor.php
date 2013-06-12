<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_tipolabor{
//Constructor
public function Clase_tipolabor(){}
//Atributos
private $TipoLaborId;
private $TipoLabor;
//Propiedades
public function setTipoLaborId($TipoLaborId_){ $this->TipoLaborId=$TipoLaborId_;}
public function getTipoLaborId(){ return $this->TipoLaborId;}
public function setTipoLabor($TipoLabor_){ $this->TipoLabor=$TipoLabor_;}
public function getTipoLabor(){ return $this->TipoLabor;}
//Métodos
//Método Insertar
public function Insertar_tipolabor(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tipolabor values('$this->TipoLaborId','$this->TipoLabor')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tipolabor(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tipolabor.TipoLaborId As 'TipoLaborId',tipolabor.TipoLabor As 'Tipo Labor' from tipolabor";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tipolabor(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipolabor where TipoLaborId='$this->TipoLaborId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tipolabor(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipolabor";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tipolabor(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipolabor set estado='E' where TipoLaborId='$this->TipoLaborId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tipolabor(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipolabor set estado='A' where TipoLaborId='$this->TipoLaborId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tipolabor(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipolabor set TipoLabor='$this->TipoLabor' where TipoLaborId='$this->TipoLaborId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}


//Método Listar los tipos de labor sin el control fitosanitario
public function ListadoSimple_tipolabor_sinControl(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from tipolabor where TipoLaborId<>6";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>