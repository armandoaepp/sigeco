<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_rendimiento{
//Constructor
public function Clase_rendimiento(){}
//Atributos
private $RendimientoId;
private $RendimientoMuestra;
private $RendimientoCafePilado;
private $RendimientoCafeDescarte;
private $RendimientoCascara;
private $RendimientoExportable;
private $RendimientoTotal;
private $RendimientoPorcentaje;
private $AcopioId;
//Propiedades
public function setRendimientoId($RendimientoId_){ $this->RendimientoId=$RendimientoId_;}
public function getRendimientoId(){ return $this->RendimientoId;}
public function setRendimientoMuestra($RendimientoMuestra_){ $this->RendimientoMuestra=$RendimientoMuestra_;}
public function getRendimientoMuestra(){ return $this->RendimientoMuestra;}
public function setRendimientoCafePilado($RendimientoCafePilado_){ $this->RendimientoCafePilado=$RendimientoCafePilado_;}
public function getRendimientoCafePilado(){ return $this->RendimientoCafePilado;}
public function setRendimientoCafeDescarte($RendimientoCafeDescarte_){ $this->RendimientoCafeDescarte=$RendimientoCafeDescarte_;}
public function getRendimientoCafeDescarte(){ return $this->RendimientoCafeDescarte;}
public function setRendimientoCascara($RendimientoCascara_){ $this->RendimientoCascara=$RendimientoCascara_;}
public function getRendimientoCascara(){ return $this->RendimientoCascara;}
public function setRendimientoExportable($RendimientoExportable_){ $this->RendimientoExportable=$RendimientoExportable_;}
public function getRendimientoExportable(){ return $this->RendimientoExportable;}
public function setRendimientoTotal($RendimientoTotal_){ $this->RendimientoTotal=$RendimientoTotal_;}
public function getRendimientoTotal(){ return $this->RendimientoTotal;}
public function setRendimientoPorcentaje($RendimientoPorcentaje_){ $this->RendimientoPorcentaje=$RendimientoPorcentaje_;}
public function getRendimientoPorcentaje(){ return $this->RendimientoPorcentaje;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_rendimiento(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	/*
	$consulta="Insert into rendimiento values('$this->RendimientoId','$this->RendimientoMuestra','$this->RendimientoCafePilado','$this->RendimientoCafeDescarte','$this->RendimientoCascara','$this->RendimientoExportable','$this->RendimientoTotal','$this->RendimientoPorcentaje','$this->AcopioId')";
	$rpta=$con->MetodoRegistrar($consulta);
	*/
	
	$consulta=" CALL sp_RendimientoRegistrar('$this->RendimientoMuestra','$this->RendimientoCafePilado','$this->RendimientoCafeDescarte','$this->AcopioId') ; ";
	//echo "Registrar: $consulta";
	$rpta=$con->MetodoReg_Output($consulta);
	
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function Listar_rendimiento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select rendimiento.RendimientoId As 'RendimientoId',rendimiento.RendimientoMuestra As 'RendimientoMuestra',rendimiento.RendimientoCafePilado As 'RendimientoCafePilado',rendimiento.RendimientoCafeDescarte As 'RendimientoCafeDescarte',rendimiento.RendimientoCascara As 'RendimientoCascara',rendimiento.RendimientoExportable As 'RendimientoExportable',rendimiento.RendimientoTotal As 'RendimientoTotal',rendimiento.RendimientoPorcentaje As 'RendimientoPorcentaje',rendimiento.AcopioId As 'AcopioId' from rendimiento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_rendimiento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from rendimiento where RendimientoId='$this->RendimientoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_rendimiento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from rendimiento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_rendimiento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update rendimiento set Estado='E' where RendimientoId='$this->RendimientoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_rendimiento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update rendimiento set estado='A' where RendimientoId='$this->RendimientoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_rendimiento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
/*
$consulta="Update rendimiento set RendimientoMuestra='$this->RendimientoMuestra',RendimientoCafePilado='$this->RendimientoCafePilado',RendimientoCafeDescarte='$this->RendimientoCafeDescarte',RendimientoCascara='$this->RendimientoCascara',RendimientoExportable='$this->RendimientoExportable',RendimientoTotal='$this->RendimientoTotal',RendimientoPorcentaje='$this->RendimientoPorcentaje',AcopioId='$this->AcopioId' where RendimientoId='$this->RendimientoId'";
$rpta=$con->MetodoRegistrar($consulta);
*/
	$consulta=" CALL sp_RendimientoActualizar('$this->RendimientoId','$this->RendimientoMuestra','$this->RendimientoCafePilado','$this->RendimientoCafeDescarte','$this->AcopioId') ; ";
	//echo "Registrar: $consulta";
	$rpta=$con->MetodoReg_Output($consulta);
	
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID ACOPIO
public function Buscar_Acopio_rendimiento(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from rendimiento where AcopioId='$this->AcopioId'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>