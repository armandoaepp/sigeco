<?php 
class Clase_tipousuario{
//Constructor
public function Clase_tipousuario(){}
//Atributos
private $TipoUsuarioId;
private $TipoUsuario;
private $TipoUsuarioEstado;
//Propiedades
public function setTipoUsuarioId($TipoUsuarioId_){ $this->TipoUsuarioId=$TipoUsuarioId_;}
public function getTipoUsuarioId(){ return $this->TipoUsuarioId;}
public function setTipoUsuario($TipoUsuario_){ $this->TipoUsuario=$TipoUsuario_;}
public function getTipoUsuario(){ return $this->TipoUsuario;}
public function setTipoUsuarioEstado($TipoUsuarioEstado_){ $this->TipoUsuarioEstado=$TipoUsuarioEstado_;}
public function getTipoUsuarioEstado(){ return $this->TipoUsuarioEstado;}
//Métodos
//Método Insertar
public function Insertar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tipousuario values('$this->TipoUsuarioId','$this->TipoUsuario','A')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tipousuario.TipoUsuarioId As 'Codigo',tipousuario.TipoUsuario As 'Usuario',tipousuario.TipoUsuarioEstado As 'Estado' from tipousuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipousuario where TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipousuario where TipoUsuarioEstado='A'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipousuario set estado='E' where TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipousuario set estado='A' where TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipousuario set TipoUsuario='$this->TipoUsuario',TipoUsuarioEstado='$this->TipoUsuarioEstado' where TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>