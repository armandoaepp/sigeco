<?php 
class Clase_personal{
//Constructor
public function Clase_personal(){}
//Atributos
private $PersonalId;
private $PersonalFechaIngreso;
private $PersonalDni;
private $PersonalApellido;
private $PersonalNombre;
private $PersonalSexo;
private $PersonalFechaNac;
private $PersonalEmail;
private $PersonalDireccion;
private $PersonalTelefono;
private $PersonalEstado;
//Propiedades
public function setPersonalId($PersonalId_){ $this->PersonalId=$PersonalId_;}
public function getPersonalId(){ return $this->PersonalId;}
public function setPersonalFechaIngreso($PersonalFechaIngreso_){ $this->PersonalFechaIngreso=$PersonalFechaIngreso_;}
public function getPersonalFechaIngreso(){ return $this->PersonalFechaIngreso;}
public function setPersonalDni($PersonalDni_){ $this->PersonalDni=$PersonalDni_;}
public function getPersonalDni(){ return $this->PersonalDni;}
public function setPersonalApellido($PersonalApellido_){ $this->PersonalApellido=$PersonalApellido_;}
public function getPersonalApellido(){ return $this->PersonalApellido;}
public function setPersonalNombre($PersonalNombre_){ $this->PersonalNombre=$PersonalNombre_;}
public function getPersonalNombre(){ return $this->PersonalNombre;}
public function setPersonalSexo($PersonalSexo_){ $this->PersonalSexo=$PersonalSexo_;}
public function getPersonalSexo(){ return $this->PersonalSexo;}
public function setPersonalFechaNac($PersonalFechaNac_){ $this->PersonalFechaNac=$PersonalFechaNac_;}
public function getPersonalFechaNac(){ return $this->PersonalFechaNac;}
public function setPersonalEmail($PersonalEmail_){ $this->PersonalEmail=$PersonalEmail_;}
public function getPersonalEmail(){ return $this->PersonalEmail;}
public function setPersonalDireccion($PersonalDireccion_){ $this->PersonalDireccion=$PersonalDireccion_;}
public function getPersonalDireccion(){ return $this->PersonalDireccion;}
public function setPersonalTelefono($PersonalTelefono_){ $this->PersonalTelefono=$PersonalTelefono_;}
public function getPersonalTelefono(){ return $this->PersonalTelefono;}
public function setPersonalEstado($PersonalEstado_){ $this->PersonalEstado=$PersonalEstado_;}
public function getPersonalEstado(){ return $this->PersonalEstado;}
//Métodos
//Método Insertar
public function Insertar_personal(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into personal values('$this->PersonalId','$this->PersonalFechaIngreso','$this->PersonalDni','$this->PersonalApellido','$this->PersonalNombre','$this->PersonalSexo','$this->PersonalFechaNac','$this->PersonalEmail','$this->PersonalDireccion','$this->PersonalTelefono','A')";
$rpta=$con->MetodoRegistrar($consulta);
//echo "Consulta". $consulta;
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_personal(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select personal.PersonalId As 'Codigo',personal.PersonalFechaIngreso As 'Fecha Ingreso',personal.PersonalDni As 'DNI',
personal.PersonalApellido As 'Apellidos',personal.PersonalNombre As 'Nombres',personal.PersonalSexo As 'Sexo',
personal.PersonalFechaNac As 'Fecha Nac',personal.PersonalEmail As 'Email',personal.PersonalDireccion As 'Direccion',
personal.PersonalTelefono As 'Telefono',personal.PersonalEstado As 'Estado' from personal WHERE PersonalEstado='A' ";
$rpta=$con->Listar($consulta);
echo "consulta:: $consulta";
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_personal(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	//$consulta= "select * from personal where PersonalId='$this->PersonalId'";
	$consulta= "Select PersonalId ,DATE_FORMAT(PersonalFechaIngreso,'%d/%m/%Y') As PersonalFechaIngreso,personal.PersonalDni ,PersonalApellido ,
	PersonalNombre , PersonalSexo, 	DATE_FORMAT(PersonalFechaNac ,'%d/%m/%Y') AS PersonalFechaNac,PersonalEmail ,PersonalDireccion ,PersonalTelefono,PersonalEstado
	from personal where PersonalId='$this->PersonalId'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function ListadoSimple_personal(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from personal";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_personal(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Update personal set PersonalEstado='E' where PersonalId='$this->PersonalId'";
	$rpta=$con->MetodoRegistrar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Recuperar
public function Recuperar_personal(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update personal set estado='A' where PersonalId='$this->PersonalId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_personal(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Update personal set PersonalFechaIngreso='$this->PersonalFechaIngreso',PersonalDni='$this->PersonalDni',
	PersonalApellido='$this->PersonalApellido',PersonalNombre='$this->PersonalNombre',PersonalSexo='$this->PersonalSexo',
	PersonalFechaNac='$this->PersonalFechaNac',PersonalEmail='$this->PersonalEmail',PersonalDireccion='$this->PersonalDireccion',
	PersonalTelefono='$this->PersonalTelefono',PersonalEstado='$this->PersonalEstado' where PersonalId='$this->PersonalId'";
	$rpta=$con->MetodoRegistrar($consulta);
	echo "consulta: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}

//Método Listar con paramentos
public function Listar_personal_parametro($ordernar=-1,$buscar=""){
	$rpta=array();
	try{
		$parametros="";
		$buscarx="";
		if($buscar!=""){
			$buscarx=" AND PersonalApellido LIKE '".$buscar."%' or PersonalNombre LIKE '".$buscar."%' OR PersonalDni LIKE '".$buscar."%' ";
		}if($ordernar==-1){
			$ordernarx=" ORDER BY 1 DESC";
		}else{
			$arrayOrder=array("ASC","DESC");
			$AscDesc =rand(0,1);
			$ordernarx=" ORDER BY $ordernar ".$arrayOrder[$AscDesc];
			}
		$parametros=$buscarx." ".$ordernarx;
		
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Select personal.PersonalId As 'Codigo',DATE_FORMAT(personal.PersonalFechaIngreso,'%d/%m/%Y') As 'Fecha Ingreso',
personal.PersonalDni As 'DNI',	personal.PersonalApellido As 'Apellidos',personal.PersonalNombre As 'Nombres', 
CASE personal.PersonalSexo  WHEN 'M' THEN 'Masculino'   WHEN 'F' THEN 'Femenino' ELSE  ''   END  AS 'Sexo', 
	DATE_FORMAT(personal.PersonalFechaNac ,'%d/%m/%Y') AS'Fecha Nac',personal.PersonalEmail As 'Email',personal.PersonalDireccion As 'Direccion',
	personal.PersonalTelefono As 'Telefono' from personal WHERE PersonalEstado='A' ".$parametros;
	$rpta=$con->Listar($consulta);
	//echo "consulta:: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Buscar por DNI
public function Buscar_personal_xDNI(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= " SELECT PersonalId, CONCAT(PersonalNombre,' ',PersonalApellido) as Nombre 
		 FROM personal WHERE PersonalEstado='A' AND PersonalDni='$this->PersonalDni'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function Listar_Exportar_personal(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	
	$consulta="Select concat('P000',PersonalId) AS Codigo, personal.PersonalApellido As 'Apellidos',personal.PersonalNombre As 'Nombres',personal.PersonalDni As 'DNI', personal.PersonalFechaIngreso As 'Fecha Ingreso',
	personal.PersonalSexo As 'Sexo',personal.PersonalFechaNac As 'Fecha Nac',personal.PersonalEmail As 'Email',personal.PersonalDireccion As 'Direccion',
	personal.PersonalTelefono As 'Telefono' from personal WHERE PersonalEstado='A' ORDER BY 1,2 ";	
	$rpta=$con->Listar($consulta);
	//echo "consulta:: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>