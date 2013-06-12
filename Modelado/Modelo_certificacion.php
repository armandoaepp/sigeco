<?php 

class Clase_certificacion{
//Constructor
public function Clase_certificacion(){}
//Atributos
	private $CertificacionId;
	private $CertificacionStatus;
	private $CertificacionEmitido;
	private $CertificacionFechaEmision;
	private $CertificacionFechaVenci;
	private $CertificacionNumero;
	private $CertificacionNota;
	private $TipoCertificacionId;
	private $ParcelaId;
//Propiedades
	public function setCertificacionId($CertificacionId_){ $this->CertificacionId=$CertificacionId_;}
	public function getCertificacionId(){ return $this->CertificacionId;}
	public function setCertificacionStatus($CertificacionStatus_){ $this->CertificacionStatus=$CertificacionStatus_;}
	public function getCertificacionStatus(){ return $this->CertificacionStatus;}
	public function setCertificacionEmitido($CertificacionEmitido_){ $this->CertificacionEmitido=$CertificacionEmitido_;}
	public function getCertificacionEmitido(){ return $this->CertificacionEmitido;}
	public function setCertificacionFechaEmision($CertificacionFechaEmision_){ $this->CertificacionFechaEmision=$CertificacionFechaEmision_;}
	public function getCertificacionFechaEmision(){ return $this->CertificacionFechaEmision;}
	public function setCertificacionFechaVenci($CertificacionFechaVenci_){ $this->CertificacionFechaVenci=$CertificacionFechaVenci_;}
	public function getCertificacionFechaVenci(){ return $this->CertificacionFechaVenci;}
	public function setCertificacionNumero($CertificacionNumero_){ $this->CertificacionNumero=$CertificacionNumero_;}
	public function getCertificacionNumero(){ return $this->CertificacionNumero;}
	public function setCertificacionNota($CertificacionNota_){ $this->CertificacionNota=$CertificacionNota_;}
	public function getCertificacionNota(){ return $this->CertificacionNota;}
	public function setTipoCertificacionId($TipoCertificacionId_){ $this->TipoCertificacionId=$TipoCertificacionId_;}
	public function getTipoCertificacionId(){ return $this->TipoCertificacionId;}
	
	public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
	public function getParcelaId(){ return $this->ParcelaId;}
//Métodos
//Método Insertar
public function Insertar_certificacion(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Insert into certificacion values('$this->CertificacionId','$this->CertificacionStatus','$this->CertificacionEmitido','$this->CertificacionFechaEmision','$this->CertificacionFechaVenci','$this->CertificacionNumero','$this->CertificacionNota','$this->TipoCertificacionId','A')";
	$rpta=$con->MetodoReg_Output_ID($consulta);
	//echo "consulta: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function Listar_certificacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta=" Select certificacion.CertificacionId As 'CertificacionId', certificacion.CertificacionStatus As 'Status', certificacion.CertificacionEmitido As 'Emitido',certificacion.CertificacionFechaEmision As 'Fecha Emision', certificacion.CertificacionFechaVenci As 'Fecha Vencimiento',certificacion.CertificacionNumero As 'Numero', certificacion.CertificacionNota As 'Nota',certificacion.TipoCertificacionId As 'TipoCertificacionId' from certificacion where CertificacionEstado='A' ";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_certificacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from certificacion where CertificacionId='$this->CertificacionId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_certificacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from certificacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_certificacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificacion set CertificacionEstado='E' where CertificacionId='$this->CertificacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_certificacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificacion set estado='A' where CertificacionId='$this->CertificacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_certificacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificacion set CertificacionStatus='$this->CertificacionStatus',CertificacionEmitido='$this->CertificacionEmitido',CertificacionFechaEmision='$this->CertificacionFechaEmision',CertificacionFechaVenci='$this->CertificacionFechaVenci',CertificacionNumero='$this->CertificacionNumero',CertificacionNota='$this->CertificacionNota',TipoCertificacionId='$this->TipoCertificacionId' where CertificacionId='$this->CertificacionId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_certificacion_xParcela(){
	$rpta=array();
	try{
	include_once 'conexion.php';
		$con=new Conexion();
		// DATE_FORMAT(f.FamiliarFechaNac,'%d/%m/%Y') As 'Fecha Nac'
	/*	$consulta=" Select c.CertificacionId ,  tc.TipoCertificacion, c.CertificacionStatus As 'Status', c.CertificacionEmitido As 'Emitido',c.CertificacionFechaEmision As 'Fecha Emision',  c.CertificacionFechaVenci As 'Fecha Vencimiento',c.CertificacionNumero As 'Numero',
c.CertificacionNota As 'Nota'  FROM tipocertificacion tc INNER JOIN certificacion c ON tc.TipoCertificacionId=c.TipoCertificacionId  INNER JOIN certificacionparcela cp ON cp.CertificacionId=c.CertificacionId
INNER JOIN parcela p ON p.ParcelaId=cp.ParcelaId WHERE CertificacionEstado='A' and p.ParcelaId='$this->ParcelaId' order by 1 desc";
*/
		$consulta=" Select c.CertificacionId ,  tc.TipoCertificacion, c.CertificacionStatus As 'Status', c.CertificacionEmitido As 'Emitido', DATE_FORMAT(c.CertificacionFechaEmision,'%d/%m/%Y')  As 'Fecha Emision', DATE_FORMAT(c.CertificacionFechaVenci ,'%d/%m/%Y')  As 'Fecha Vencimiento',c.CertificacionNumero As 'Numero',
c.CertificacionNota As 'Nota'  FROM tipocertificacion tc INNER JOIN certificacion c ON tc.TipoCertificacionId=c.TipoCertificacionId  INNER JOIN certificacionparcela cp ON cp.CertificacionId=c.CertificacionId
INNER JOIN parcela p ON p.ParcelaId=cp.ParcelaId WHERE CertificacionEstado='A' and p.ParcelaId='$this->ParcelaId' order by 1 desc";
	//echo "consulta:: $consulta";
		$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}

}
?>