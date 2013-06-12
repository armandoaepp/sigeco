<?php 
class Clase_c_menutipousuario{
//Constructor
public function Clase_c_menutipousuario(){}
//Atributos
private $MenuTipoUsuarioId;
private $MenuId;
private $TipoUsuarioId;
private $UsuarioId;
private $PadreMenuId;
//Propiedades
public function setMenuTipoUsuarioId($MenuTipoUsuarioId_){ $this->MenuTipoUsuarioId=$MenuTipoUsuarioId_;}
public function getMenuTipoUsuarioId(){ return $this->MenuTipoUsuarioId;}
public function setMenuId($MenuId_){ $this->MenuId=$MenuId_;}
public function getMenuId(){ return $this->MenuId;}
public function setTipoUsuarioId($TipoUsuarioId_){ $this->TipoUsuarioId=$TipoUsuarioId_;}
public function getTipoUsuarioId(){ return $this->TipoUsuarioId;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
public function setPadreMenuId($PadreMenuId_){ $this->PadreMenuId=$PadreMenuId_;}
public function getPadreMenuId(){ return $this->PadreMenuId;}
//Métodos
//Método Insertar
public function Insertar_c_menutipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into c_menutipousuario values('$this->MenuTipoUsuarioId','$this->MenuId','$this->TipoUsuarioId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_c_menutipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select c_menutipousuario.MenuTipoUsuarioId As 'MenuTipoUsuarioId',c_menutipousuario.MenuId As 'MenuId',c_menutipousuario.TipoUsuarioId As 'TipoUsuarioId' from c_menutipousuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_c_menutipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_menutipousuario where MenuTipoUsuarioId='$this->MenuTipoUsuarioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_c_menutipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from c_menutipousuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_c_menutipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_menutipousuario set estado='E' where MenuTipoUsuarioId='$this->MenuTipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_c_menutipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_menutipousuario set estado='A' where MenuTipoUsuarioId='$this->MenuTipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_c_menutipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update c_menutipousuario set MenuId='$this->MenuId',TipoUsuarioId='$this->TipoUsuarioId' where MenuTipoUsuarioId='$this->MenuTipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar para Generear el Menu Por Perfil y usuario verificando los  permiso que tiene c/u de los usuarios
public function Listar_c_menutipousuario_GenerarPerfil(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
		 
		 	$consulta="SELECT m.MenuId, m.MenuNombre, m.PadreMenuId,
			CONCAT(md.ModuloNombre ,'/',m.MenuUrl) as URL from c_menu m INNER JOIN c_menutipousuario mtu ON m.MenuId=mtu.MenuId 
			INNER JOIN c_permiso p ON p.MenuTipoUsuarioId=mtu.MenuTipoUsuarioId
			INNER JOIN tipousuario tu ON tu.TipoUsuarioId=mtu.TipoUsuarioId
			INNER JOIN usuario u ON u.UsuarioId=p.UsuarioId
			LEFT JOIN c_modulo md ON md.ModuloId=m.ModuloId
			WHERE m.MenuEstado='A'  AND u.UsuarioEstado='A' AND p.PermisoEstado='A' AND tu.TipoUsuarioEstado='A' AND  m.PadreMenuId=0 AND
		 tu.TipoUsuarioId='$this->TipoUsuarioId' AND p.UsuarioId='$this->UsuarioId' ";
	$rpta=$con->Listar($consulta);
	//echo "consulta: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
public function Listar_c_menutipousuario_GenerarSubMenu_xPadre(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
		$consulta="SELECT m.MenuId, m.MenuNombre, m.PadreMenuId,
					m.MenuUrl as URL from c_menu m 	INNER JOIN c_menutipousuario mtu ON m.MenuId=mtu.MenuId 
					INNER JOIN c_permiso p ON p.MenuTipoUsuarioId=mtu.MenuTipoUsuarioId INNER JOIN usuario u ON u.UsuarioId=p.UsuarioId
					WHERE m.MenuEstado='A'  AND u.UsuarioEstado='A'  AND p.	PermisoEstado='A' AND  m.PadreMenuId='$this->PadreMenuId' AND p.UsuarioId='$this->UsuarioId' ";
	$rpta=$con->Listar($consulta);
	//echo "consulta: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}


}
?>