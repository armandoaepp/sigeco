<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_tipocertificacion{
//Constructor
public function Clase_tipocertificacion(){}
//Atributos
private $TipoCertificacionId;
private $TipoCertificacion;
//Propiedades
public function setTipoCertificacionId($TipoCertificacionId_){ $this->TipoCertificacionId=$TipoCertificacionId_;}
public function getTipoCertificacionId(){ return $this->TipoCertificacionId;}
public function setTipoCertificacion($TipoCertificacion_){ $this->TipoCertificacion=$TipoCertificacion_;}
public function getTipoCertificacion(){ return $this->TipoCertificacion;}
//Métodos
//Método Insertar
public function Insertar_tipocertificacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tipocertificacion values('$this->TipoCertificacionId','$this->TipoCertificacion')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tipocertificacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tipocertificacion.TipoCertificacionId As 'TipoCertificacionId',tipocertificacion.TipoCertificacion As 'Tipo Certificacion' from tipocertificacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tipocertificacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipocertificacion where TipoCertificacionId='$this->TipoCertificacionId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tipocertificacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipocertificacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tipocertificacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipocertificacion set estado='E' where TipoCertificacionId='$this->TipoCertificacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tipocertificacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipocertificacion set estado='A' where TipoCertificacionId='$this->TipoCertificacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tipocertificacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipocertificacion set TipoCertificacion='$this->TipoCertificacion' where TipoCertificacionId='$this->TipoCertificacionId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>