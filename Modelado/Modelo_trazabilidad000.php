<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_trazabilidad{
//Constructor
public function Clase_trazabilidad(){}
//Atributos
private $TrazabilidadId;
private $TrazabilidadParcela;
private $AcopioId;
//Propiedades
public function setTrazabilidadId($TrazabilidadId_){ $this->TrazabilidadId=$TrazabilidadId_;}
public function getTrazabilidadId(){ return $this->TrazabilidadId;}
public function setTrazabilidadParcela($TrazabilidadParcela_){ $this->TrazabilidadParcela=$TrazabilidadParcela_;}
public function getTrazabilidadParcela(){ return $this->TrazabilidadParcela;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into trazabilidad values('$this->TrazabilidadId','$this->TrazabilidadParcela','$this->AcopioId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_trazabilidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select trazabilidad.TrazabilidadId As 'TrazabilidadId',trazabilidad.TrazabilidadParcela As 'TrazabilidadParcela',trazabilidad.AcopioId As 'AcopioId' from trazabilidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_trazabilidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from trazabilidad where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_trazabilidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from trazabilidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trazabilidad set Estado='E' where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trazabilidad set estado='A' where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trazabilidad set TrazabilidadParcela='$this->TrazabilidadParcela',AcopioId='$this->AcopioId' where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ParcelaAcopio_trazabilidad(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "  SELECT DISTINCT pa.ParcelaId,  pa.ParcelaNombre 
	 FROM parcela pa INNER JOIN unidadproductiva up ON  up.UnidadProductivaId=pa.UnidadProductivaId
	INNER JOIN acopio a ON a.UnidadProductivaId=up.UnidadProductivaId WHERE  pa.ParcelaEstado='A' 
	 AND up.UnidadProductivaId=(SELECT UnidadProductivaId FROM acopio WHERE AcopioId='$this->AcopioId' ) ORDER BY 2 ";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
return $rpta;
}
}
?>