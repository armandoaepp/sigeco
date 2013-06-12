<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_pais{
//Constructor
public function Clase_pais(){}
//Atributos
private $PaisId;
private $PaisNombre;
//Propiedades
public function setPaisId($PaisId_){ $this->PaisId=$PaisId_;}
public function getPaisId(){ return $this->PaisId;}
public function setPaisNombre($PaisNombre_){ $this->PaisNombre=$PaisNombre_;}
public function getPaisNombre(){ return $this->PaisNombre;}
//Métodos
//Método Insertar
public function Insertar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pais values('$this->PaisId','$this->PaisNombre')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_pais(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select pais.PaisId As 'PaisId',pais.PaisNombre As 'Nombre' from pais";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_pais(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from pais where PaisId='$this->PaisId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_pais(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select PaisId,PaisNombre from pais";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update pais set Estado='E' where PaisId='$this->PaisId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update pais set estado='A' where PaisId='$this->PaisId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update pais set PaisNombre='$this->PaisNombre' where PaisId='$this->PaisId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>