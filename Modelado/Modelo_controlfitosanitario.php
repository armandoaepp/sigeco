<?php 
class Clase_controlfitosanitario{
//Constructor
public function Clase_controlfitosanitario  (){}
//Atributos
private $ControlFitosanitarioId;
private $ControlFitosanitarioDescripcion;
private $ControlFitosanitarioCantidad;
private $ControlFitosanitarioCostoUnitario;
private $ControlFitosanitarioJornalFamiliar;
private $ControlFitosanitarioJornalContratado;
private $ControlFitosanitarioCostoJornal;
private $LaborId;
private $ControlFitosanitarioFecha;
private $ParcelaId;
//Propiedades
public function setControlFitosanitarioId($ControlFitosanitarioId_){ $this->ControlFitosanitarioId=$ControlFitosanitarioId_;}
public function getControlFitosanitarioId(){ return $this->ControlFitosanitarioId;}
public function setControlFitosanitarioDescripcion($ControlFitosanitarioDescripcion_){ $this->ControlFitosanitarioDescripcion=$ControlFitosanitarioDescripcion_;}
public function getControlFitosanitarioDescripcion(){ return $this->ControlFitosanitarioDescripcion;}
public function setControlFitosanitarioCantidad($ControlFitosanitarioCantidad_){ $this->ControlFitosanitarioCantidad=$ControlFitosanitarioCantidad_;}
public function getControlFitosanitarioCantidad(){ return $this->ControlFitosanitarioCantidad;}
public function setControlFitosanitarioCostoUnitario($ControlFitosanitarioCostoUnitario_){ $this->ControlFitosanitarioCostoUnitario=$ControlFitosanitarioCostoUnitario_;}
public function getControlFitosanitarioCostoUnitario(){ return $this->ControlFitosanitarioCostoUnitario;}
public function setControlFitosanitarioJornalFamiliar($ControlFitosanitarioJornalFamiliar_){ $this->ControlFitosanitarioJornalFamiliar=$ControlFitosanitarioJornalFamiliar_;}
public function getControlFitosanitarioJornalFamiliar(){ return $this->ControlFitosanitarioJornalFamiliar;}
public function setControlFitosanitarioJornalContratado($ControlFitosanitarioJornalContratado_){ $this->ControlFitosanitarioJornalContratado=$ControlFitosanitarioJornalContratado_;}
public function getControlFitosanitarioJornalContratado(){ return $this->ControlFitosanitarioJornalContratado;}
public function setControlFitosanitarioCostoJornal($ControlFitosanitarioCostoJornal_){ $this->ControlFitosanitarioCostoJornal=$ControlFitosanitarioCostoJornal_;}
public function getControlFitosanitarioCostoJornal(){ return $this->ControlFitosanitarioCostoJornal;}
public function setLaborId($LaborId_){ $this->LaborId=$LaborId_;}
public function getLaborId(){ return $this->LaborId;}
public function setControlFitosanitarioFecha($ControlFitosanitarioFecha_){ $this->ControlFitosanitarioFecha=$ControlFitosanitarioFecha_;}
public function getControlFitosanitarioFecha(){ return $this->ControlFitosanitarioFecha;}
public function setParcelaId($ParcelaId){ $this->ParcelaId=$ParcelaId;}
public function getParcelaId(){ return $this->ParcelaId;}

//Métodos
//Método Insertar
public function Insertar_controlfitosanitario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into controlfitosanitario values('$this->ControlFitosanitarioId','$this->ControlFitosanitarioDescripcion','$this->ControlFitosanitarioCantidad','$this->ControlFitosanitarioCostoUnitario','$this->ControlFitosanitarioJornalFamiliar','$this->ControlFitosanitarioJornalContratado','$this->ControlFitosanitarioCostoJornal','$this->LaborId','$this->ControlFitosanitarioFecha')";
$rpta=$con->MetodoRegistrar($consulta);
echo "consulta:: $consulta";
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_controlfitosanitario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select controlfitosanitario.ControlFitosanitarioId As 'ControlFitosanitarioId',controlfitosanitario.ControlFitosanitarioDescripcion As 'ControlFitosanitarioDescripcion',controlfitosanitario.ControlFitosanitarioCantidad As 'ControlFitosanitarioCantidad',controlfitosanitario.ControlFitosanitarioCostoUnitario As 'ControlFitosanitarioCostoUnitario',controlfitosanitario.ControlFitosanitarioJornalFamiliar As 'ControlFitosanitarioJornalFamiliar',controlfitosanitario.ControlFitosanitarioJornalContratado As 'ControlFitosanitarioJornalContratado',controlfitosanitario.ControlFitosanitarioCostoJornal As 'ControlFitosanitarioCostoJornal',controlfitosanitario.LaborId As 'LaborId',controlfitosanitario.ControlFitosanitarioFecha As 'ControlFitosanitarioFecha' from controlfitosanitario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_controlfitosanitario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from controlfitosanitario where ControlFitosanitarioId='$this->ControlFitosanitarioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_controlfitosanitario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from controlfitosanitario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_controlfitosanitario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="delete from controlfitosanitario where ControlFitosanitarioId='$this->ControlFitosanitarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_controlfitosanitario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update controlfitosanitario set estado='A' where ControlFitosanitarioId='$this->ControlFitosanitarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_controlfitosanitario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update controlfitosanitario set ControlFitosanitarioDescripcion='$this->ControlFitosanitarioDescripcion',ControlFitosanitarioCantidad='$this->ControlFitosanitarioCantidad',ControlFitosanitarioCostoUnitario='$this->ControlFitosanitarioCostoUnitario',ControlFitosanitarioJornalFamiliar='$this->ControlFitosanitarioJornalFamiliar',ControlFitosanitarioJornalContratado='$this->ControlFitosanitarioJornalContratado',ControlFitosanitarioCostoJornal='$this->ControlFitosanitarioCostoJornal',LaborId='$this->LaborId',ControlFitosanitarioFecha='$this->ControlFitosanitarioFecha' where ControlFitosanitarioId='$this->ControlFitosanitarioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Buscar por ID x DE LABOR
public function Buscar_controlfitosanitario_xIdLabor(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from controlfitosanitario where LaborId='$this->LaborId'";
	$rpta=$con->Listar($consulta);
	//echo "consulta::: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Buscar por ID
public function Buscar_controlfitosanitario_xIdParcela(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
/*
$consulta= 'SELECT cfs.*,  CONCAT(tl.TipoLabor," / ",l.LaborTipo ," ( ",DATE_FORMAT(l.LaborFecha,"%d/%m/%Y")," )") as Labor FROM controlfitosanitario cfs INNER JOIN labor l ON cfs.LaborId=l.LaborId
	INNER JOIN tipolabor tl ON tl.TipoLaborId=l.TipoLaborId WHERE l.ParcelaId=\''.$this->ParcelaId.'\'';
*/
	$consulta= 'SELECT
 cfs.ControlFitosanitarioId,
 CONCAT(tl.TipoLabor," / ",l.LaborTipo ," ( ",DATE_FORMAT(l.LaborFecha,"%d/%m/%Y")," )") as Labor,
DATE_FORMAT(cfs.ControlFitosanitarioFecha ,"%d/%m/%Y") as "Fecha",
 cfs.ControlFitosanitarioDescripcion as "Descripcion" ,
	ControlFitosanitarioCantidad as "Cantidad",
	cfs.ControlFitosanitarioCostoUnitario as "Costo Unitario", 
concat("Familiar: " ,cfs.ControlFitosanitarioJornalFamiliar ," Contratados: ",	cfs.ControlFitosanitarioJornalContratado) as "Trabajo(Jornales)"	,
cfs.ControlFitosanitarioCostoJornal 	as "Costo Jornal" 	FROM controlfitosanitario cfs INNER JOIN labor l ON cfs.LaborId=l.LaborId
INNER JOIN tipolabor tl ON tl.TipoLaborId=l.TipoLaborId
WHERE l.ParcelaId=\''.$this->ParcelaId.'\' ORDER BY 3 DESC';

	//echo "Consulta control : ".$consulta;
	
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

}
?>