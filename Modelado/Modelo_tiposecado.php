<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_tiposecado{
//Constructor
public function Clase_tiposecado(){}
//Atributos
private $TipoSecadoId;
private $TipoSecado;
//Propiedades
public function setTipoSecadoId($TipoSecadoId_){ $this->TipoSecadoId=$TipoSecadoId_;}
public function getTipoSecadoId(){ return $this->TipoSecadoId;}
public function setTipoSecado($TipoSecado_){ $this->TipoSecado=$TipoSecado_;}
public function getTipoSecado(){ return $this->TipoSecado;}
//Métodos
//Método Insertar
public function Insertar_tiposecado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tiposecado values('$this->TipoSecadoId','$this->TipoSecado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tiposecado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tiposecado.TipoSecadoId As 'TipoSecadoId',tiposecado.TipoSecado As 'Tipo de Secado' from tiposecado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tiposecado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tiposecado where TipoSecadoId='$this->TipoSecadoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tiposecado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tiposecado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tiposecado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tiposecado set estado='E' where TipoSecadoId='$this->TipoSecadoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tiposecado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tiposecado set estado='A' where TipoSecadoId='$this->TipoSecadoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tiposecado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tiposecado set TipoSecado='$this->TipoSecado' where TipoSecadoId='$this->TipoSecadoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>