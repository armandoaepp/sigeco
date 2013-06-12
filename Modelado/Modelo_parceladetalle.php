<?php 
include_once("Modelo_unidadproductivaproducto.php");
class Clase_parceladetalle extends Clase_unidadproductivaproducto{
//Constructor
public function Clase_parceladetalle(){}
//Atributos
private $ParcelaDetalleId;
private $UnidadProductivaProductoId;
private $ParcelaId;
private $ParcelaDetalleArea;
private $ParcelaDetalleFechaSiembra;
private $DistanciaSurcos;
private $DistanciaPlantas;
private $TipoSiembra;
//Propiedades
public function setParcelaDetalleId($ParcelaDetalleId_){ $this->ParcelaDetalleId=$ParcelaDetalleId_;}
public function getParcelaDetalleId(){ return $this->ParcelaDetalleId;}
public function setUnidadProductivaProductoId($UnidadProductivaProductoId_){ $this->UnidadProductivaProductoId=$UnidadProductivaProductoId_;}
public function getUnidadProductivaProductoId(){ return $this->UnidadProductivaProductoId;}
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
public function setParcelaDetalleArea($ParcelaDetalleArea_){ $this->ParcelaDetalleArea=$ParcelaDetalleArea_;}
public function getParcelaDetalleArea(){ return $this->ParcelaDetalleArea;}
public function setParcelaDetalleFechaSiembra($ParcelaDetalleFechaSiembra_){ $this->ParcelaDetalleFechaSiembra=$ParcelaDetalleFechaSiembra_;}
public function getParcelaDetalleFechaSiembra(){ return $this->ParcelaDetalleFechaSiembra;}
public function setDistanciaSurcos($DistanciaSurcos_){ $this->DistanciaSurcos=$DistanciaSurcos_;}
public function getDistanciaSurcos(){ return $this->DistanciaSurcos;}
public function setDistanciaPlantas($DistanciaPlantas_){ $this->DistanciaPlantas=$DistanciaPlantas_;}
public function getDistanciaPlantas(){ return $this->DistanciaPlantas;}
public function setTipoSiembra($TipoSiembra_){ $this->TipoSiembra=$TipoSiembra_;}
public function getTipoSiembra(){ return $this->TipoSiembra;}
//Métodos
//Método Insertar
public function Insertar_parceladetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
/*
$consulta="Insert into parceladetalle values('$this->ParcelaDetalleId','$this->UnidadProductivaProductoId','$this->ParcelaId','$this->ParcelaDetalleArea','$this->ParcelaDetalleFechaSiembra','$this->DistanciaSurcos','$this->DistanciaPlantas','$this->TipoSiembra')";
$rpta=$con->MetodoRegistrar($consulta);
*/

$consulta="CALL sp_ParcelaDetalleRegistrar_ProductoPrincipal('$this->ParcelaDetalleArea','$this->ParcelaDetalleFechaSiembra','$this->DistanciaSurcos','$this->DistanciaPlantas','$this->TipoSiembra','$this->ParcelaId','".$this->getProductoId()."','".$this->getUnidadProductivaId()."')";
$rpta=$con->MetodoReg_Output($consulta);

echo "consulta: $consulta";
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_parceladetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select parceladetalle.ParcelaDetalleId As 'ParcelaDetalleId',parceladetalle.UnidadProductivaProductoId As 'UnidadProductivaProductoId',parceladetalle.ParcelaId As 'ParcelaId',parceladetalle.ParcelaDetalleArea As 'Area',parceladetalle.ParcelaDetalleFechaSiembra As 'Fecha de Siembra',parceladetalle.DistanciaSurcos As 'Distancia entre Surcos',parceladetalle.DistanciaPlantas As 'Distancia entre Plantas',parceladetalle.TipoSiembra As 'Tipo de Siembra' from parceladetalle";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_parceladetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
//$consulta= "select * from parceladetalle where ParcelaDetalleId='$this->ParcelaDetalleId'";
$consulta= "select pd.*,uppr.ProductoId from parceladetalle pd INNER JOIN unidadproductivaproducto uppr
 ON uppr.UnidadProductivaProductoId=pd.UnidadProductivaProductoId where ParcelaDetalleId='$this->ParcelaDetalleId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_parceladetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from parceladetalle";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_parceladetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="delete from parceladetalle  where ParcelaDetalleId='$this->ParcelaDetalleId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_parceladetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update parceladetalle set estado='A' where ParcelaDetalleId='$this->ParcelaDetalleId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_parceladetalle(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
/*
	$consulta="Update parceladetalle set UnidadProductivaProductoId='$this->UnidadProductivaProductoId',ParcelaId='$this->ParcelaId',ParcelaDetalleArea='$this->ParcelaDetalleArea',ParcelaDetalleFechaSiembra='$this->ParcelaDetalleFechaSiembra',DistanciaSurcos='$this->DistanciaSurcos',DistanciaPlantas='$this->DistanciaPlantas',TipoSiembra='$this->TipoSiembra' where ParcelaDetalleId='$this->ParcelaDetalleId'";
	$rpta=$con->MetodoRegistrar($consulta);
*/
	$consulta="CALL sp_ParcelaDetalleActualizar_ProductoPrincipal('$this->ParcelaDetalleId','$this->ParcelaDetalleArea','$this->ParcelaDetalleFechaSiembra','$this->DistanciaSurcos','$this->DistanciaPlantas','$this->TipoSiembra','$this->ParcelaId','".$this->getProductoId()."','".$this->getUnidadProductivaId()."')";
	$rpta=$con->MetodoReg_Output($consulta);
	//echo "$consulta";

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>