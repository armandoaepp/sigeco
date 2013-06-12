<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_taceo{
//Constructor
public function Clase_taceo(){}
//Atributos
private $TaceoId;
private $TaceoFraganciaAroma;
private $TaceoSaborResidual;
private $TaceoAcidez;
private $TaceoCuerpo;
private $TaceoBalance;
private $TaceoDulsor;
private $TaceoUniformidad;
private $TaceoTazaLimpia;
private $TaceoPuntajeCatador;
private $TaceoDefectos;
private $TaceoNumeroTazas;
private $TaceoNotas;
private $TaceoCatadopor;
private $AcopioId;
//Propiedades
public function setTaceoId($TaceoId_){ $this->TaceoId=$TaceoId_;}
public function getTaceoId(){ return $this->TaceoId;}
public function setTaceoFraganciaAroma($TaceoFraganciaAroma_){ $this->TaceoFraganciaAroma=$TaceoFraganciaAroma_;}
public function getTaceoFraganciaAroma(){ return $this->TaceoFraganciaAroma;}
public function setTaceoSaborResidual($TaceoSaborResidual_){ $this->TaceoSaborResidual=$TaceoSaborResidual_;}
public function getTaceoSaborResidual(){ return $this->TaceoSaborResidual;}
public function setTaceoAcidez($TaceoAcidez_){ $this->TaceoAcidez=$TaceoAcidez_;}
public function getTaceoAcidez(){ return $this->TaceoAcidez;}
public function setTaceoCuerpo($TaceoCuerpo_){ $this->TaceoCuerpo=$TaceoCuerpo_;}
public function getTaceoCuerpo(){ return $this->TaceoCuerpo;}
public function setTaceoBalance($TaceoBalance_){ $this->TaceoBalance=$TaceoBalance_;}
public function getTaceoBalance(){ return $this->TaceoBalance;}
public function setTaceoDulsor($TaceoDulsor_){ $this->TaceoDulsor=$TaceoDulsor_;}
public function getTaceoDulsor(){ return $this->TaceoDulsor;}
public function setTaceoUniformidad($TaceoUniformidad_){ $this->TaceoUniformidad=$TaceoUniformidad_;}
public function getTaceoUniformidad(){ return $this->TaceoUniformidad;}
public function setTaceoTazaLimpia($TaceoTazaLimpia_){ $this->TaceoTazaLimpia=$TaceoTazaLimpia_;}
public function getTaceoTazaLimpia(){ return $this->TaceoTazaLimpia;}
public function setTaceoPuntajeCatador($TaceoPuntajeCatador_){ $this->TaceoPuntajeCatador=$TaceoPuntajeCatador_;}
public function getTaceoPuntajeCatador(){ return $this->TaceoPuntajeCatador;}
public function setTaceoDefectos($TaceoDefectos_){ $this->TaceoDefectos=$TaceoDefectos_;}
public function getTaceoDefectos(){ return $this->TaceoDefectos;}
public function setTaceoNumeroTazas($TaceoNumeroTazas_){ $this->TaceoNumeroTazas=$TaceoNumeroTazas_;}
public function getTaceoNumeroTazas(){ return $this->TaceoNumeroTazas;}
public function setTaceoNotas($TaceoNotas_){ $this->TaceoNotas=$TaceoNotas_;}
public function getTaceoNotas(){ return $this->TaceoNotas;}
public function setTaceoCatadopor($TaceoCatadopor_){ $this->TaceoCatadopor=$TaceoCatadopor_;}
public function getTaceoCatadopor(){ return $this->TaceoCatadopor;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_taceo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
/*
$consulta="Insert into taceo values('$this->TaceoId','$this->TaceoFraganciaAroma','$this->TaceoSaborResidual','$this->TaceoAcidez','$this->TaceoCuerpo','$this->TaceoBalance','$this->TaceoDulsor','$this->TaceoUniformidad','$this->TaceoTazaLimpia','$this->TaceoPuntajeCatador','$this->TaceoDefectos','$this->TaceoNumeroTazas','$this->TaceoNotas','$this->TaceoCatadopor','$this->AcopioId')";
$rpta=$con->MetodoRegistrar($consulta);
*/
	$consulta=" CALL sp_TaceoModalidad('$this->TaceoId','$this->TaceoFraganciaAroma','$this->TaceoSaborResidual','$this->TaceoAcidez','$this->TaceoCuerpo','$this->TaceoBalance','$this->TaceoDulsor','$this->TaceoUniformidad','$this->TaceoTazaLimpia','$this->TaceoPuntajeCatador','$this->TaceoDefectos','$this->TaceoNumeroTazas','$this->TaceoNotas','$this->TaceoCatadopor','$this->AcopioId')";
		//echo "Registrar  : $consulta";
		$rpta=$con->MetodoReg_Output($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_taceo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select taceo.TaceoId As 'TaceoId',taceo.TaceoFraganciaAroma As 'TaceoFraganciaAroma',taceo.TaceoSaborResidual As 'TaceoSaborResidual',taceo.TaceoAcidez As 'TaceoAcidez',taceo.TaceoCuerpo As 'TaceoCuerpo',taceo.TaceoBalance As 'TaceoBalance',taceo.TaceoDulsor As 'TaceoDulsor',taceo.TaceoUniformidad As 'TaceoUniformidad',taceo.TaceoTazaLimpia As 'TaceoTazaLimpia',taceo.TaceoPuntajeCatador As 'TaceoPuntajeCatador',taceo.TaceoDefectos As 'TaceoDefectos',taceo.TaceoNumeroTazas As 'TaceoNumeroTazas',taceo.TaceoNotas As 'TaceoNotas',taceo.TaceoCatadopor As 'TaceoCatadopor',taceo.AcopioId As 'AcopioId' from taceo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_taceo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from taceo where TaceoId='$this->TaceoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_taceo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from taceo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_taceo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update taceo set Estado='E' where TaceoId='$this->TaceoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_taceo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update taceo set estado='A' where TaceoId='$this->TaceoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_taceo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update taceo set TaceoFraganciaAroma='$this->TaceoFraganciaAroma',TaceoSaborResidual='$this->TaceoSaborResidual',TaceoAcidez='$this->TaceoAcidez',TaceoCuerpo='$this->TaceoCuerpo',TaceoBalance='$this->TaceoBalance',TaceoDulsor='$this->TaceoDulsor',TaceoUniformidad='$this->TaceoUniformidad',TaceoTazaLimpia='$this->TaceoTazaLimpia',TaceoPuntajeCatador='$this->TaceoPuntajeCatador',TaceoDefectos='$this->TaceoDefectos',TaceoNumeroTazas='$this->TaceoNumeroTazas',TaceoNotas='$this->TaceoNotas',TaceoCatadopor='$this->TaceoCatadopor',AcopioId='$this->AcopioId' where TaceoId='$this->TaceoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Listar Taceo Por Acopio 
public function ListarAcopio_taceo(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from taceo where AcopioId='$this->AcopioId'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}

}
?>