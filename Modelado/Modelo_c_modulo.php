<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_c_modulo{
//Constructor
public function Clase_c_modulo(){}
//Atributos
private $ModuloId;
private $ModuloNombre;
private $ModuloNota;
//Propiedades
public function setModuloId($ModuloId_){ $this->ModuloId=$ModuloId_;}
public function getModuloId(){ return $this->ModuloId;}
public function setModuloNombre($ModuloNombre_){ $this->ModuloNombre=$ModuloNombre_;}
public function getModuloNombre(){ return $this->ModuloNombre;}
public function setModuloNota($ModuloNota_){ $this->ModuloNota=$ModuloNota_;}
public function getModuloNota(){ return $this->ModuloNota;}
//Métodos
//Método Insertar
public function Insertar_c_modulo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into c_modulo values('$this->ModuloId','$this->ModuloNombre','$this->ModuloNota')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_c_modulo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select c_modulo.ModuloId As 'ModuloId',c_modulo.ModuloNombre As 'ModuloNombre',c_modulo.ModuloNota As 'ModuloNota' from c_modulo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_c_modulo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_modulo where ModuloId='$this->ModuloId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_c_modulo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_modulo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_c_modulo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_modulo set estado='E' where ModuloId='$this->ModuloId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_c_modulo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_modulo set estado='A' where ModuloId='$this->ModuloId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_c_modulo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_modulo set ModuloNombre='$this->ModuloNombre',ModuloNota='$this->ModuloNota' where ModuloId='$this->ModuloId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>