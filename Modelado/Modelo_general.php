<?php 
class Clase_general{
//Constructor
public function Clase_general(){}
//Atributos
private $DistritoId;
private $EducacionNivel;
//Propiedades
public function setDistritoId($DistritoId_){ $this->DistritoId=$DistritoId_;}
public function getDistritoId(){ return $this->DistritoId;}
public function setEducacionNivel($EducacionNivel_){ $this->EducacionNivel=$EducacionNivel_;}
public function getEducacionNivel(){ return $this->EducacionNivel;}
//Métodos
//Método Listar_Ids_Distrito para listar los ids de pais deparamento provincia distrito generalmente cuando se kieren seleccionar combos se consulta atraves del id de distrito 
public function Listar_Ids_Distrito(){
	$rpta=array();
	try{
		include_once 'conexion.php';
		$con=new Conexion();
		$consulta="SELECT p.PaisId,d.DepartamentoId,pr.ProvinciaId,di.DistritoId  FROM pais p INNER JOIN departamento d ON p.PaisId=d.PaisId INNER JOIN provincia pr ON d.DepartamentoId=pr.DepartamentoId  INNER JOIN distrito di ON pr.ProvinciaId=di.ProvinciaId WHERE di.DistritoId='$this->DistritoId'";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 	$rpta=$e->getMessage();
	}
	return $rpta;
}
//Método Buscar por ID
public function Buscar_educacion(){
$rpta=array();
	try{
		include_once 'conexion.php';
		$con=new Conexion();
		$consulta= "select * from educacion where DistritoId='$this->DistritoId'";
		$rpta=$con->Listar($consulta);
	}catch(exception $e){
		$rpta=$e->getMessage();
	}
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
}
?>