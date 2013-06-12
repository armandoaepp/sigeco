<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_educacion{
//Constructor
public function Clase_educacion(){}
//Atributos
private $EducacionId;
private $EducacionNivel;
//Propiedades
public function setEducacionId($EducacionId_){ $this->EducacionId=$EducacionId_;}
public function getEducacionId(){ return $this->EducacionId;}
public function setEducacionNivel($EducacionNivel_){ $this->EducacionNivel=$EducacionNivel_;}
public function getEducacionNivel(){ return $this->EducacionNivel;}
//Métodos
//Método Insertar
public function Insertar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into educacion values('$this->EducacionId','$this->EducacionNivel')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_educacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select educacion.EducacionId As 'Codigo',educacion.EducacionNivel As 'Nivel' from educacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_educacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from educacion where EducacionId='$this->EducacionId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_educacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from educacion order by 2";
$rpta=$con->Listar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update educacion set estado='E' where EducacionId='$this->EducacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update educacion set estado='A' where EducacionId='$this->EducacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update educacion set EducacionNivel='$this->EducacionNivel' where EducacionId='$this->EducacionId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>