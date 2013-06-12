<?php 
class Clase_c_permiso{
//Constructor
public function Clase_c_permiso(){}
//Atributos
private $PermisoId;
private $FechaCreacion;
private $UsuarioId;
private $MenuTipoUsuarioId;
private $MenuId;
private $PermisoEstado;
//Propiedades
public function setPermisoId($PermisoId_){ $this->PermisoId=$PermisoId_;}
public function getPermisoId(){ return $this->PermisoId;}
public function setFechaCreacion($FechaCreacion_){ $this->FechaCreacion=$FechaCreacion_;}
public function getFechaCreacion(){ return $this->FechaCreacion;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
public function setMenuTipoUsuarioId($MenuTipoUsuarioId_){ $this->MenuTipoUsuarioId=$MenuTipoUsuarioId_;}
public function getMenuTipoUsuarioId(){ return $this->MenuTipoUsuarioId;}
public function setMenuId($MenuId_){ $this->MenuId=$MenuId_;}
public function getMenuId(){ return $this->MenuId;}
public function setPermisoEstado($PermisoEstado_){ $this->PermisoEstado=$PermisoEstado_;}
public function getPermisoEstado(){ return $this->PermisoEstado;}
//Métodos
//Método Insertar
public function Insertar_c_permiso(){
$rpta;
try{
include_once 'conexion.php';
	$con=new Conexion();
	// $consulta="Insert into c_permiso values('$this->PermisoId','$this->FechaCreacion','$this->UsuarioId','$this->MenuTipoUsuarioId')";
	//$consulta="CALL sp_RegistrarPermisoUsuario('$this->UsuarioId','$this->MenuId')";
	$consulta="CALL sp_Registrar_Activar_PermisoUsuario('$this->UsuarioId','$this->MenuId')";	
	$rpta=$con->MetodoReg_Output($consulta);
	//echo "consulta: $consulta";
	
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function Listar_c_permiso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select c_permiso.PermisoId As 'PermisoId',c_permiso.FechaCreacion As 'FechaCreacion',c_permiso.UsuarioId As 'UsuarioId',c_permiso.MenuTipoUsuarioId As 'MenuTipoUsuarioId' from c_permiso";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_c_permiso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_permiso where PermisoId='$this->PermisoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_c_permiso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_permiso";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_c_permiso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_permiso set estado='E' where PermisoId='$this->PermisoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_c_permiso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_permiso set estado='A' where PermisoId='$this->PermisoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_c_permiso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_permiso set FechaCreacion='$this->FechaCreacion',UsuarioId='$this->UsuarioId',MenuTipoUsuarioId='$this->MenuTipoUsuarioId' where PermisoId='$this->PermisoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Eliminar(Actualizar Estado)
public function Desactivar_c_permisos(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="UPDATE c_permiso SET PermisoEstado='E' WHERE UsuarioId='$this->UsuarioId'";
	$rpta=$con->MetodoRegistrar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>