<?php 
class Clase_usuario{
//Constructor
public function Clase_usuario(){}
//Atributos
private $UsuarioId;
private $Usuario;
private $UsuarioPassword;
private $TipoUsuarioId;
private $PersonalId;
private $UsuarioEstado;

//Propiedades
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
public function setUsuario($Usuario_){ $this->Usuario=$Usuario_;}
public function getUsuario(){ return $this->Usuario;}
public function setUsuarioPassword($UsuarioPassword_){ $this->UsuarioPassword=$UsuarioPassword_;}
public function getUsuarioPassword(){ return $this->UsuarioPassword;}
public function setTipoUsuarioId($TipoUsuarioId_){ $this->TipoUsuarioId=$TipoUsuarioId_;}
public function getTipoUsuarioId(){ return $this->TipoUsuarioId;}
public function setPersonalId($PersonalId_){ $this->PersonalId=$PersonalId_;}
public function getPersonalId(){ return $this->PersonalId;}
public function setUsuarioEstado($UsuarioEstado_){ $this->UsuarioEstado=$UsuarioEstado_;}
public function getUsuarioEstado(){ return $this->UsuarioEstado;}
//Métodos
//Método Insertar
public function Insertar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
// $consulta="Insert into usuario values('$this->UsuarioId','$this->Usuario',MD5('$this->UsuarioPassword'),'$this->TipoUsuarioId','$this->PersonalId','$this->UsuarioEstado')";
$consulta="CALL sp_RegistrarUsuario('$this->Usuario','$this->UsuarioPassword','$this->TipoUsuarioId','$this->PersonalId')";
 $rpta=$con->MetodoReg_Output($consulta);
//echo "$consulta";
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_usuario(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	//$consulta="Select usuario.UsuarioId As 'codigo',usuario.Usuario As 'Usuario',usuario.UsuarioPassword As 'Password',usuario.TipoUsuarioId As 'TipoUsuarioId',usuario.PersonalId As 'PersonalId',usuario.UsuarioEstado As 'Estado' from usuario";
	$consulta="SELECT u.UsuarioId as Codigo,CONCAT(p.PersonalNombre,' ' ,p.PersonalApellido ) as Nombre,u.Usuario ,tu.TipoUsuario, u.UsuarioEstado as Estado FROM usuario u 
	INNER JOIN tipousuario tu ON tu.TipoUsuarioId=u.TipoUsuarioId INNER JOIN personal p ON p.PersonalId=u.PersonalId ORDER BY 2, 5 ";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Buscar por ID
public function Buscar_usuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from usuario where UsuarioId='$this->UsuarioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_usuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from usuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update usuario set UsuarioEstado='E' where UsuarioId='$this->UsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update usuario set UsuarioEstado='A' where UsuarioId='$this->UsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update usuario set Usuario='$this->Usuario',UsuarioPassword=MD5('$this->UsuarioPassword'),TipoUsuarioId='$this->TipoUsuarioId' where UsuarioId='$this->UsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
// Metodo para autentificar al Usuario

public function Autentificar_usuario(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="SELECT p.PersonalId as PersonalId , CONCAT(p.PersonalNombre, ' ' ,p.PersonalApellido) as NombrePersona , tp.TipoUsuarioId ,u.UsuarioId  FROM usuario u 
INNER JOIN tipousuario tp ON tp.TipoUsuarioId=u.TipoUsuarioId INNER JOIN personal p ON p.PersonalId=u.PersonalId WHERE u.UsuarioEstado='A'
 AND p.PersonalEstado='A'  AND u.Usuario='$this->Usuario' AND u.UsuarioPassword=MD5('$this->UsuarioPassword') AND tp.TipoUsuarioId='$this->TipoUsuarioId' ";
	$rpta=$con->Listar($consulta);
	//$cant = count($rpta["cuerpo"]);
          
	//echo "consulta ::(   $consulta  ):: $cant";
	}catch(exception $e){
	 $rpta=$e->getMessage();
	}
	return $rpta;
}

public function Buscar_Persona_xIdUsuario(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "SELECT CONCAT(p.PersonalNombre,' ' ,p.PersonalApellido) as Nombre  FROM personal p INNER JOIN usuario u ON u.PersonalId=p.PersonalId 
				WHERE u.UsuarioId='$this->UsuarioId'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>