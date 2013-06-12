<?php 
include_once("Modelo_contrato.php");
class Clase_acopiocontrato extends Clase_contrato {
//Constructor
public function Clase_acopiocontrato(){}
//Atributos
private $AcopioContratoId;
private $AcopioAsignado;
private $AcopioPorAsignar;
private $ContratoRequerido;
private $ContratoAsignado;
private $AcopioId;
private $ContratoId;
//Propiedades
public function setAcopioContratoId($AcopioContratoId_){ $this->AcopioContratoId=$AcopioContratoId_;}
public function getAcopioContratoId(){ return $this->AcopioContratoId;}
public function setAcopioAsignado($AcopioAsignado_){ $this->AcopioAsignado=$AcopioAsignado_;}
public function getAcopioAsignado(){ return $this->AcopioAsignado;}
public function setAcopioPorAsignar($AcopioPorAsignar_){ $this->AcopioPorAsignar=$AcopioPorAsignar_;}
public function getAcopioPorAsignar(){ return $this->AcopioPorAsignar;}
public function setContratoRequerido($ContratoRequerido_){ $this->ContratoRequerido=$ContratoRequerido_;}
public function getContratoRequerido(){ return $this->ContratoRequerido;}
public function setContratoAsignado($ContratoAsignado_){ $this->ContratoAsignado=$ContratoAsignado_;}
public function getContratoAsignado(){ return $this->ContratoAsignado;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
public function setContratoId($ContratoId_){ $this->ContratoId=$ContratoId_;}
public function getContratoId(){ return $this->ContratoId;}
//Métodos
//Método Insertar
public function Insertar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into acopiocontrato values('$this->AcopioContratoId','$this->AcopioAsignado','$this->AcopioPorAsignar','$this->ContratoRequerido','$this->ContratoAsignado','$this->AcopioId','$this->ContratoId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_acopiocontrato(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$parametro="";
	
	if($this->getTipoContratoId()!="")
	$parametro.=" AND  co.TipoContratoId='".$this->getTipoContratoId()."' ";
	if($this->getContratoPuntajeDesde()!="")
	$parametro.=" AND  co.ContratoPuntajeDesde>='".$this->getContratoPuntajeDesde()."' ";
	if($this->getContratoPuntajeHasta()!="")
	$parametro.=" AND  co.ContratoPuntajeHasta<='".$this->getContratoPuntajeHasta()."' ";
	if($this->getContratoFechaEmbarque()!="")
	$parametro.=" AND  co.ContratoFechaEmbarque LIKE '".$this->getContratoFechaEmbarque()."' ";
	if($this->getContratoStatus()!="")
	$parametro.=" AND  co.ContratoStatus LIKE '".$this->getContratoStatus()."' ";
	
	/*
	"
	 AND  co.TipoContratoId='1'
	 AND co.ContratoPuntajeDesde>=1
	 AND co.ContratoPuntajeHasta<=2 
	 AND ContratoFechaEmbarque LIKE ''
	 AND co.ContratoStatus LIKE '' 
	 ";
	*/
	
	$consulta="
			SELECT co.ContratoId, 
			 c.ClienteNombre ,
			 co.ContratoNumero,
			 CONCAT(co.ContratoPuntajeDesde,'-',ContratoPuntajeHasta) as 'PuntajeCat',
			 DATE_FORMAT(co.ContratoFechaEmbarque, '%d/%m/%Y')  AS ContratoFechaEmbarque,  
			 co.ContratoCantidadQuintales,
			 (co.ContratoCantidadSacos*co.ContratoKGxSaco)AS 'Kg Requeridos', 
			 IFNULL((SELECT SUM(AcopioAsignado) FROM acopiocontrato ac1 WHERE ac1.ContratoId=co.ContratoId),0) as 'Kg Asignados',
			 (IFNULL((co.ContratoCantidadSacos*co.ContratoKGxSaco),0)-IFNULL((SELECT SUM(AcopioAsignado) FROM acopiocontrato ac1 
			   WHERE ac1.ContratoId=co.ContratoId),0) )'Kg Faltan' 
		FROM contrato co INNER JOIN tipocontrato tc ON tc.TipoContratoId=co.TipoContratoId
		INNER JOIN cliente c ON c.ClienteId=co.ContratoId WHERE co.PeriodoId=(SELECT PeriodoId FROM periodo WHERE PeriodoEstado='A')" .$parametro;
		echo "$consulta";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Buscar por ID
public function Buscar_acopiocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from acopiocontrato where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_acopiocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from acopiocontrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopiocontrato set Estado='E' where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopiocontrato set estado='A' where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopiocontrato set AcopioAsignado='$this->AcopioAsignado',AcopioPorAsignar='$this->AcopioPorAsignar',ContratoRequerido='$this->ContratoRequerido',ContratoAsignado='$this->ContratoAsignado',AcopioId='$this->AcopioId',ContratoId='$this->ContratoId' where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Recuperar
public function ListarLotes_acopiocontrato(){
$rpta;
try{
	include_once 'conexion.php';
	$con=new Conexion();
 $consulta=" SELECT a.AcopioId,t.TaceoPuntajeCatador,a.AcopioQuintalesNetos, 
ROUND((AcopioQuintalesNetos/55.2),2) AS Quintales ,
IFNULL( (SELECT SUM(ac1.AcopioAsignado) FROM acopiocontrato ac1 WHERE ac1.AcopioId=a.AcopioId ) , 0) AS Asignado,
IFNULL( (SELECT SUM(ac1.AcopioPorAsignar) FROM acopiocontrato ac1 WHERE ac1.AcopioId=a.AcopioId ) , 0) AS PorAsignar
FROM acopio a INNER JOIN humedad h ON a.AcopioId=h.AcopioId
	INNER JOIN taceo t ON t.AcopioId=a.AcopioId 
	";
	$rpta=$con->Listar($consulta);
	echo "consulta  :::   $consulta   ::: </br>";
	echo " consulta cant: ". count($rpta["cuerpo"]) ;
}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}


}
?>