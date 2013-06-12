<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_labor{
//Constructor
public function Clase_labor(){}
//Atributos
private $LaborId;
private $TipoLaborId;
private $LaborFecha;
private $LaborJornalesFamiliar;
private $LaborJornalesContratado;
private $LaborCostoUnitarioJornal;
private $LaborArea;
private $LaborNota;
private $LaborTipo;
private $ParcelaId;
//Propiedades
public function setLaborId($LaborId_){ $this->LaborId=$LaborId_;}
public function getLaborId(){ return $this->LaborId;}
public function setTipoLaborId($TipoLaborId_){ $this->TipoLaborId=$TipoLaborId_;}
public function getTipoLaborId(){ return $this->TipoLaborId;}
public function setLaborFecha($LaborFecha_){ $this->LaborFecha=$LaborFecha_;}
public function getLaborFecha(){ return $this->LaborFecha;}
public function setLaborJornalesFamiliar($LaborJornalesFamiliar_){ $this->LaborJornalesFamiliar=$LaborJornalesFamiliar_;}
public function getLaborJornalesFamiliar(){ return $this->LaborJornalesFamiliar;}
public function setLaborJornalesContratado($LaborJornalesContratado_){ $this->LaborJornalesContratado=$LaborJornalesContratado_;}
public function getLaborJornalesContratado(){ return $this->LaborJornalesContratado;}
public function setLaborCostoUnitarioJornal($LaborCostoUnitarioJornal_){ $this->LaborCostoUnitarioJornal=$LaborCostoUnitarioJornal_;}
public function getLaborCostoUnitarioJornal(){ return $this->LaborCostoUnitarioJornal;}
public function setLaborArea($LaborArea_){ $this->LaborArea=$LaborArea_;}
public function getLaborArea(){ return $this->LaborArea;}
public function setLaborNota($LaborNota_){ $this->LaborNota=$LaborNota_;}
public function getLaborNota(){ return $this->LaborNota;}
public function setLaborTipo($LaborTipo_){ $this->LaborTipo=$LaborTipo_;}
public function getLaborTipo(){ return $this->LaborTipo;}
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
//Métodos
//Método Insertar
public function Insertar_labor(){
	$rpta;
	try{
		include_once 'conexion.php';
		$con=new Conexion();
		$consulta="Insert into labor values('$this->LaborId','$this->TipoLaborId','$this->LaborFecha','$this->LaborJornalesFamiliar','$this->LaborJornalesContratado','$this->LaborCostoUnitarioJornal','$this->LaborArea','$this->LaborNota','$this->LaborTipo','$this->ParcelaId')";
		$rpta=$con->MetodoRegistrar($consulta);
	
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function Listar_labor(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select labor.LaborId As 'LaborId',labor.TipoLaborId As 'Tipo de Labor',labor.LaborFecha As 'Fecha',labor.LaborJornalesFamiliar As 'Jornales Familiar',labor.LaborJornalesContratado As 'Jornales Contratado',labor.LaborCostoUnitarioJornal As 'Costo Unitario Jornal',labor.LaborArea As 'Area',labor.LaborNota As 'Nota',labor.LaborTipo As 'Tipo',labor.ParcelaId As 'ParcelaId' from labor";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_labor(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from labor where LaborId='$this->LaborId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_labor(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from labor";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_labor(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="delete from labor where LaborId='$this->LaborId'";
	$rpta=$con->MetodoRegistrar($consulta);
	//echo "consulta: $consulta <br>";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Recuperar
public function Recuperar_labor(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update labor set estado='A' where LaborId='$this->LaborId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_labor(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update labor set TipoLaborId='$this->TipoLaborId',LaborFecha='$this->LaborFecha',LaborJornalesFamiliar='$this->LaborJornalesFamiliar',LaborJornalesContratado='$this->LaborJornalesContratado',LaborCostoUnitarioJornal='$this->LaborCostoUnitarioJornal',LaborArea='$this->LaborArea',LaborNota='$this->LaborNota',LaborTipo='$this->LaborTipo',ParcelaId='$this->ParcelaId' where LaborId='$this->LaborId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar el detalle de las labores por parcela listoamo los 10 ultimos 
public function ListadoDetalle_labor(){
	$rpta=array();
	try{
		include_once 'conexion.php';
		$con=new Conexion();

		// sacando el ID del control fitosanitario 
		$consulta= " SELECT l.LaborId, l.LaborFecha , tl.TipoLabor , l.LaborTipo , concat( 'Jornales  Familiares: ' ,l.LaborJornalesFamiliar,' Contratados: ' ,l.LaborJornalesContratado , ' Precio Jornal: S/.', l.LaborCostoUnitarioJornal) as Trabajo ,
 l.LaborNota ,tl.TipoLaborId, cft.ControlFitosanitarioId 
 FROM labor l INNER JOIN tipolabor  tl  ON l.TipoLaborId=tl.TipoLaborId
LEFT JOIN controlfitosanitario cft ON cft.LaborId=l.LaborId
 WHERE  l.ParcelaId='$this->ParcelaId' order by 2 desc LIMIT 0 , 10 ";		 
		$rpta=$con->Listar($consulta);
		//echo "consulta:: $consulta";
	}catch(exception $e){
		 $rpta=$e->getMessage();
	}
	return $rpta;
}
}
?>