<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_tiposeleccion{
//Constructor
public function Clase_tiposeleccion(){}
//Atributos
private $TipoSeleccionId;
private $TipoSeleccion;
//Propiedades
public function setTipoSeleccionId($TipoSeleccionId_){ $this->TipoSeleccionId=$TipoSeleccionId_;}
public function getTipoSeleccionId(){ return $this->TipoSeleccionId;}
public function setTipoSeleccion($TipoSeleccion_){ $this->TipoSeleccion=$TipoSeleccion_;}
public function getTipoSeleccion(){ return $this->TipoSeleccion;}
//Métodos
//Método Insertar
public function Insertar_tiposeleccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tiposeleccion values('$this->TipoSeleccionId','$this->TipoSeleccion')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tiposeleccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tiposeleccion.TipoSeleccionId As 'TipoSeleccionId',tiposeleccion.TipoSeleccion As 'Tipo de Selección' from tiposeleccion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tiposeleccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tiposeleccion where TipoSeleccionId='$this->TipoSeleccionId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tiposeleccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tiposeleccion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tiposeleccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tiposeleccion set estado='E' where TipoSeleccionId='$this->TipoSeleccionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tiposeleccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tiposeleccion set estado='A' where TipoSeleccionId='$this->TipoSeleccionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tiposeleccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tiposeleccion set TipoSeleccion='$this->TipoSeleccion' where TipoSeleccionId='$this->TipoSeleccionId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>