<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_trazabilidad{
//Constructor
public function Clase_trazabilidad(){}
//Atributos
private $TrazabilidadId;
private $ParcelaId;
private $AcopioId;
private $TrazabilidadEstado;
//Propiedades
public function setTrazabilidadId($TrazabilidadId_){ $this->TrazabilidadId=$TrazabilidadId_;}
public function getTrazabilidadId(){ return $this->TrazabilidadId;}
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
public function setTrazabilidadEstado($TrazabilidadEstado_){ $this->AcopioId=$TrazabilidadEstado_;}
public function getTrazabilidadEstado(){ return $this->TrazabilidadEstado;}
//Métodos
//Método Insertar
public function Insertar_trazabilidad(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	/*$consulta="Insert into trazabilidad values('$this->TrazabilidadId','$this->ParcelaId','$this->AcopioId','$this->TrazabilidadEstado')";
	$rpta=$con->MetodoRegistrar($consulta);*/
	
	$consulta=" CALL sp_TrazabilidadModalidad('$this->ParcelaId','$this->AcopioId')";
	//echo "Registrar  : $consulta";
	$rpta=$con->MetodoReg_Output($consulta);
	
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
$consulta="Select trazabilidad.TrazabilidadId As 'TrazabilidadId',trazabilidad.ParcelaId As 'ParcelaId',trazabilidad.AcopioId As 'AcopioId' from trazabilidad";
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
$consulta="Update trazabilidad set TrazabilidadEstado='E' where TrazabilidadId='$this->TrazabilidadId'";
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
$consulta="Update trazabilidad set ParcelaId='$this->ParcelaId',AcopioId='$this->AcopioId' where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar trazabilidad por acopio
public function ParcelaAcopio_trazabilidad(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	/*$consulta="SELECT DISTINCT pa.ParcelaId,  pa.ParcelaNombre , 0  AS TrazabilidadId
	FROM parcela pa INNER JOIN unidadproductiva up ON  up.UnidadProductivaId=pa.UnidadProductivaId
	INNER JOIN acopio a ON a.UnidadProductivaId=up.UnidadProductivaId WHERE  pa.ParcelaEstado='A' 
	AND up.UnidadProductivaId=(SELECT UnidadProductivaId FROM acopio WHERE AcopioId='$this->AcopioId' ) 
	AND pa.ParcelaId IN (SELECT ParcelaId FROM trazabilidad WHERE AcopioId='$this->AcopioId') AND TrazabilidadEstado='A'
	ORDER BY 2 ";*/
	
	$consulta=" SELECT  pa.ParcelaId,  pa.ParcelaNombre , 0  AS TrazabilidadId FROM trazabilidad t 
		INNER JOIN  parcela pa ON pa.ParcelaId=t.ParcelaId 
		INNER JOIN acopio a ON a.AcopioId=t.AcopioId
		WHERE  pa.ParcelaEstado='A' AND t.TrazabilidadEstado='A'
			AND pa.UnidadProductivaId=(SELECT UnidadProductivaId FROM acopio WHERE AcopioId='$this->AcopioId' ) 
			AND a.AcopioId='$this->AcopioId' ;" ;
	$rpta=$con->Listar($consulta);
	// echo "consulta: $consulta - cant: ".count($rpta["cuerpo"])."</br>";
	}catch(exception $e){
	 $rpta=$e->getMessage();	 }
	 return $rpta;
}
//Método Listar parcelas de unidades productiva por acopio 
public function ParcelaUnidadProductiva_trazabilidad(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "  SELECT DISTINCT pa.ParcelaId,  pa.ParcelaNombre,
	IFNULL((SELECT TrazabilidadId FROM trazabilidad WHERE ParcelaId=pa.ParcelaId AND TrazabilidadEstado='A' AND  AcopioId='$this->AcopioId' ),0 ) AS TrazabilidadId 
	 FROM parcela pa INNER JOIN unidadproductiva up ON  up.UnidadProductivaId=pa.UnidadProductivaId
	INNER JOIN acopio a ON a.UnidadProductivaId=up.UnidadProductivaId WHERE  pa.ParcelaEstado='A' 
	 AND up.UnidadProductivaId=(SELECT UnidadProductivaId FROM acopio WHERE AcopioId='$this->AcopioId' ) ORDER BY 2 ";
	$rpta=$con->Listar($consulta);
	 //echo "consulta: $consulta ";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_AcopiId_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trazabilidad set TrazabilidadEstado='E' where AcopioId='$this->AcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>