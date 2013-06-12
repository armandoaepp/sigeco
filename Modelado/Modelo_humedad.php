<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_humedad{
//Constructor
public function Clase_humedad(){}
//Atributos
private $HumedadId;
private $HumedadLibreTara;
private $HumedadDescuentoHumedad;
private $HumedadKgNetos;
private $HumedadImporteBruto;
private $HumedadImporteDescuento;
private $HumedadImporteTotal;
private $AcopioId;
//Propiedades
public function setHumedadId($HumedadId_){ $this->HumedadId=$HumedadId_;}
public function getHumedadId(){ return $this->HumedadId;}
public function setHumedadLibreTara($HumedadLibreTara_){ $this->HumedadLibreTara=$HumedadLibreTara_;}
public function getHumedadLibreTara(){ return $this->HumedadLibreTara;}
public function setHumedadDescuentoHumedad($HumedadDescuentoHumedad_){ $this->HumedadDescuentoHumedad=$HumedadDescuentoHumedad_;}
public function getHumedadDescuentoHumedad(){ return $this->HumedadDescuentoHumedad;}
public function setHumedadKgNetos($HumedadKgNetos_){ $this->HumedadKgNetos=$HumedadKgNetos_;}
public function getHumedadKgNetos(){ return $this->HumedadKgNetos;}
public function setHumedadImporteBruto($HumedadImporteBruto_){ $this->HumedadImporteBruto=$HumedadImporteBruto_;}
public function getHumedadImporteBruto(){ return $this->HumedadImporteBruto;}
public function setHumedadImporteDescuento($HumedadImporteDescuento_){ $this->HumedadImporteDescuento=$HumedadImporteDescuento_;}
public function getHumedadImporteDescuento(){ return $this->HumedadImporteDescuento;}
public function setHumedadImporteTotal($HumedadImporteTotal_){ $this->HumedadImporteTotal=$HumedadImporteTotal_;}
public function getHumedadImporteTotal(){ return $this->HumedadImporteTotal;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_humedad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into humedad values('$this->HumedadId','$this->HumedadLibreTara','$this->HumedadDescuentoHumedad','$this->HumedadKgNetos','$this->HumedadImporteBruto','$this->HumedadImporteDescuento','$this->HumedadImporteTotal','$this->AcopioId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_humedad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select humedad.HumedadId As 'HumedadId',humedad.HumedadLibreTara As 'HumedadLibreTara',humedad.HumedadDescuentoHumedad As 'HumedadDescuentoHumedad',humedad.HumedadKgNetos As 'HumedadKgNetos',humedad.HumedadImporteBruto As 'HumedadImporteBruto',humedad.HumedadImporteDescuento As 'HumedadImporteDescuento',humedad.HumedadImporteTotal As 'HumedadImporteTotal',humedad.AcopioId As 'AcopioId' from humedad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_humedad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from humedad where HumedadId='$this->HumedadId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_humedad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from humedad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_humedad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update humedad set Estado='E' where HumedadId='$this->HumedadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_humedad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update humedad set estado='A' where HumedadId='$this->HumedadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_humedad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update humedad set HumedadLibreTara='$this->HumedadLibreTara',HumedadDescuentoHumedad='$this->HumedadDescuentoHumedad',HumedadKgNetos='$this->HumedadKgNetos',HumedadImporteBruto='$this->HumedadImporteBruto',HumedadImporteDescuento='$this->HumedadImporteDescuento',HumedadImporteTotal='$this->HumedadImporteTotal',AcopioId='$this->AcopioId' where HumedadId='$this->HumedadId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Buscar por ID de Acopio
public function Buscar_Acopio_humedad(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from humedad where AcopioId='$this->AcopioId'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>