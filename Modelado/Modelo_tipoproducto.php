<?php 
class Clase_tipoproducto{
//Constructor
public function Clase_tipoproducto(){}
//Atributos
private $TipoProductoId;
private $TipoProducto;
//Propiedades
public function setTipoProductoId($TipoProductoId_){ $this->TipoProductoId=$TipoProductoId_;}
public function getTipoProductoId(){ return $this->TipoProductoId;}
public function setTipoProducto($TipoProducto_){ $this->TipoProducto=$TipoProducto_;}
public function getTipoProducto(){ return $this->TipoProducto;}
//Métodos
//Método Insertar
public function Insertar_tipoproducto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tipoproducto values('$this->TipoProductoId','$this->TipoProducto')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tipoproducto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tipoproducto.TipoProductoId As 'TipoProductoId',tipoproducto.TipoProducto As 'Tipo Producto' from tipoproducto";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tipoproducto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipoproducto where TipoProductoId='$this->TipoProductoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tipoproducto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipoproducto order by TipoProducto";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tipoproducto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipoproducto set estado='E' where TipoProductoId='$this->TipoProductoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tipoproducto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipoproducto set estado='A' where TipoProductoId='$this->TipoProductoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tipoproducto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipoproducto set TipoProducto='$this->TipoProducto' where TipoProductoId='$this->TipoProductoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>