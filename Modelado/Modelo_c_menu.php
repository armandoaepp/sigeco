<?php 
class Clase_c_menu{
//Constructor
public function Clase_c_menu(){}
//Atributos
private $MenuId;
private $MenuNombre;
private $MenuUrl;
private $PadreMenuId;
private $ModuloId;
private $MenuEstado;
private $UsuarioId;
//Propiedades
public function setMenuId($MenuId_){ $this->MenuId=$MenuId_;}
public function getMenuId(){ return $this->MenuId;}
public function setMenuNombre($MenuNombre_){ $this->MenuNombre=$MenuNombre_;}
public function getMenuNombre(){ return $this->MenuNombre;}
public function setMenuUrl($MenuUrl_){ $this->MenuUrl=$MenuUrl_;}
public function getMenuUrl(){ return $this->MenuUrl;}
public function setPadreMenuId($PadreMenuId_){ $this->PadreMenuId=$PadreMenuId_;}
public function getPadreMenuId(){ return $this->PadreMenuId;}
public function setModuloId($ModuloId_){ $this->ModuloId=$ModuloId_;}
public function getModuloId(){ return $this->ModuloId;}
public function setMenuEstado($MenuEstado_){ $this->MenuEstado=$MenuEstado_;}
public function getMenuEstado(){ return $this->MenuEstado;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
//Métodos
//Método Insertar
public function Insertar_c_menu(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into c_menu values('$this->MenuId','$this->MenuNombre','$this->MenuUrl','$this->PadreMenuId','$this->ModuloId','$this->MenuEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_c_menu(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select c_menu.MenuId As 'MenuId',c_menu.MenuNombre As 'MenuNombre',c_menu.MenuUrl As 'MenuUrl',c_menu.PadreMenuId As 'PadreMenuId',c_menu.ModuloId As 'ModuloId',c_menu.MenuEstado As 'MenuEstado' from c_menu";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_c_menu(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_menu where MenuId='$this->MenuId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_c_menu(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_menu";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_c_menu(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_menu set estado='E' where MenuId='$this->MenuId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_c_menu(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_menu set estado='A' where MenuId='$this->MenuId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_c_menu(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_menu set MenuNombre='$this->MenuNombre',MenuUrl='$this->MenuUrl',PadreMenuId='$this->PadreMenuId',ModuloId='$this->ModuloId',MenuEstado='$this->MenuEstado' where MenuId='$this->MenuId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar el Nivel Cero Solo a lo Padre del Resto
public function Listar_menu_Padre(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta=" SELECT m.MenuId , m.MenuNombre, m.PadreMenuId FROM c_menu m WHERE PadreMenuId='0'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}

//Método Listar el Nivel 1 Solo 
public function Listar_menu_xIdPadre(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="select m1.MenuId ,m1.MenuNombre, m1.PadreMenuId FROM c_menu m INNER JOIN  c_menu m1 ON m.MenuId=m1.PadreMenuId 
		WHERE m1.PadreMenuId='$this->PadreMenuId'";
		//echo "consulta:: $consulta";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar Id de Menu  para cada usuario segun su permiso
public function Listar_MenuPermiso_xUsuario(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="SELECT  mtu.MenuId FROM c_permiso p INNER JOIN c_menutipousuario mtu  ON mtu.MenuTipoUsuarioId=p.MenuTipoUsuarioId 
	INNER JOIN c_menu m ON m.MenuId=mtu.MenuId WHERE  p.PermisoEstado='A' AND  p.UsuarioId='$this->UsuarioId'";
		//echo "consulta:: $consulta";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>