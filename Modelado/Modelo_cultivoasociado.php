<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_cultivoasociado{
//Constructor
public function Clase_cultivoasociado(){}
//Atributos
private $CultivoAsociadoId;
private $CultivoAsociadoNombre;
private $CultivoAsociadoNota;
private $ParcelaId;
//Propiedades
public function setCultivoAsociadoId($CultivoAsociadoId_){ $this->CultivoAsociadoId=$CultivoAsociadoId_;}
public function getCultivoAsociadoId(){ return $this->CultivoAsociadoId;}
public function setCultivoAsociadoNombre($CultivoAsociadoNombre_){ $this->CultivoAsociadoNombre=$CultivoAsociadoNombre_;}
public function getCultivoAsociadoNombre(){ return $this->CultivoAsociadoNombre;}
public function setCultivoAsociadoNota($CultivoAsociadoNota_){ $this->CultivoAsociadoNota=$CultivoAsociadoNota_;}
public function getCultivoAsociadoNota(){ return $this->CultivoAsociadoNota;}
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
//Métodos
//Método Insertar
public function Insertar_cultivoasociado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into cultivoasociado values('$this->CultivoAsociadoId','$this->CultivoAsociadoNombre','$this->CultivoAsociadoNota','$this->ParcelaId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_cultivoasociado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select cultivoasociado.CultivoAsociadoId As 'CultivoAsociadoId',cultivoasociado.CultivoAsociadoNombre As 'Nombre',cultivoasociado.CultivoAsociadoNota As 'Nota',cultivoasociado.ParcelaId As 'ParcelaId' from cultivoasociado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_cultivoasociado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from cultivoasociado where CultivoAsociadoId='$this->CultivoAsociadoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_cultivoasociado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from cultivoasociado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_cultivoasociado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="delete from cultivoasociado where CultivoAsociadoId='$this->CultivoAsociadoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_cultivoasociado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update cultivoasociado set estado='A' where CultivoAsociadoId='$this->CultivoAsociadoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_cultivoasociado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update cultivoasociado set CultivoAsociadoNombre='$this->CultivoAsociadoNombre',CultivoAsociadoNota='$this->CultivoAsociadoNota' where CultivoAsociadoId='$this->CultivoAsociadoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Listar Cultivos Asociado por ID de Parcerla
public function Listar_cultivoasociado_idParcela(){
$rpta=array();
try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Select cultivoasociado.CultivoAsociadoId As 'CultivoAsociadoId',cultivoasociado.CultivoAsociadoNombre As 'Productos',cultivoasociado.CultivoAsociadoNota As 'Nota' from cultivoasociado where cultivoasociado.ParcelaId='$this->ParcelaId'";
	$rpta=$con->Listar($consulta);
}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}


}
?>