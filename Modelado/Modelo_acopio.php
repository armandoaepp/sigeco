<?php 
class Clase_acopio{
//Constructor
public function Clase_acopio(){}
//Atributos
private $AcopioId;
private $AcopioFecha;
private $AcopioNSacos;
private $AcopioPesoBruto;
private $AcopioHumedadEntregada;
private $AcopioHumedadRequerida;
private $AcopioPrecioQuintal;
private $AcopioTara;
private $BaseId;
private $TipoCertificacionId;
private $AcopioQuintalesNetos;
private $AcopioStatus;
private $AcopioEstado;
private $UnidadProductivaId;
private $GuiaAcopioId;
private $PeriodoId;
private $GuiaAcopioNumero;
private $UsuarioId;
//Propiedades
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
public function setAcopioFecha($AcopioFecha_){ $this->AcopioFecha=$AcopioFecha_;}
public function getAcopioFecha(){ return $this->AcopioFecha;}
public function setAcopioNSacos($AcopioNSacos_){ $this->AcopioNSacos=$AcopioNSacos_;}
public function getAcopioNSacos(){ return $this->AcopioNSacos;}
public function setAcopioPesoBruto($AcopioPesoBruto_){ $this->AcopioPesoBruto=$AcopioPesoBruto_;}
public function getAcopioPesoBruto(){ return $this->AcopioPesoBruto;}
public function setAcopioHumedadEntregada($AcopioHumedadEntregada_){ $this->AcopioHumedadEntregada=$AcopioHumedadEntregada_;}
public function getAcopioHumedadEntregada(){ return $this->AcopioHumedadEntregada;}
public function setAcopioHumedadRequerida($AcopioHumedadRequerida_){ $this->AcopioHumedadRequerida=$AcopioHumedadRequerida_;}
public function getAcopioHumedadRequerida(){ return $this->AcopioHumedadRequerida;}
public function setAcopioPrecioQuintal($AcopioPrecioQuintal_){ $this->AcopioPrecioQuintal=$AcopioPrecioQuintal_;}
public function getAcopioPrecioQuintal(){ return $this->AcopioPrecioQuintal;}
public function setAcopioTara($AcopioTara_){ $this->AcopioTara=$AcopioTara_;}
public function getAcopioTara(){ return $this->AcopioTara;}
public function setBaseId($BaseId_){ $this->BaseId=$BaseId_;}
public function getBaseId(){ return $this->BaseId;}
public function setTipoCertificacionId($TipoCertificacionId_){ $this->TipoCertificacionId=$TipoCertificacionId_;}
public function getTipoCertificacionId(){ return $this->TipoCertificacionId;}
public function setAcopioQuintalesNetos($AcopioQuintalesNetos_){ $this->AcopioQuintalesNetos=$AcopioQuintalesNetos_;}
public function getAcopioQuintalesNetos(){ return $this->AcopioQuintalesNetos;}
public function setAcopioStatus($AcopioStatus_){ $this->AcopioStatus=$AcopioStatus_;}
public function getAcopioStatus(){ return $this->AcopioStatus;}
public function setAcopioEstado($AcopioEstado_){ $this->AcopioEstado=$AcopioEstado_;}
public function getAcopioEstado(){ return $this->AcopioEstado;}
public function setUnidadProductivaId($UnidadProductivaId_){ $this->UnidadProductivaId=$UnidadProductivaId_;}
public function getUnidadProductivaId(){ return $this->UnidadProductivaId;}
public function setGuiaAcopioId($GuiaAcopioId_){ $this->GuiaAcopioId=$GuiaAcopioId_;}
public function getGuiaAcopioId(){ return $this->GuiaAcopioId;}
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}

public function setGuiaAcopioNumero($GuiaAcopioNumero_){ $this->GuiaAcopioNumero=$GuiaAcopioNumero_;}
public function getGuiaAcopioNumero(){ return $this->GuiaAcopioNumero;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
//Métodos
//Método Insertar
public function Insertar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
/*
$consulta="Insert into acopio values('$this->AcopioId','$this->AcopioFecha','$this->AcopioNSacos','$this->AcopioPesoBruto','$this->AcopioHumedadEntregada','$this->AcopioHumedadRequerida','$this->AcopioPrecioQuintal','$this->AcopioTara','$this->BaseId','$this->TipoCertificacionId','$this->AcopioQuintalesNetos','$this->AcopioStatus','$this->AcopioEstado','$this->UnidadProductivaId','$this->GuiaAcopioId')";
$rpta=$con->MetodoRegistrar($consulta);
*/

$consulta=" CALL sp_AcopioRegistrar('$this->AcopioFecha','$this->AcopioNSacos','$this->AcopioPesoBruto','$this->AcopioHumedadEntregada','$this->AcopioHumedadRequerida','$this->AcopioPrecioQuintal','$this->AcopioTara','$this->BaseId','$this->TipoCertificacionId','$this->AcopioQuintalesNetos','$this->AcopioStatus','$this->UnidadProductivaId','$this->GuiaAcopioNumero','$this->UsuarioId')";
//echo "Registrar Acopio : $consulta";
$rpta=$con->MetodoReg_Output($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_acopio($ordernar=-1,$buscar=""){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
	$parametros="";
	$buscarx="";
		
		if($buscar!=""){ //
			$buscarx="  AND ProductorApellidoPat LIKE  '".$buscar."%'  OR ProductorApellidoMat LIKE  '".$buscar."%'  OR ProductorNombre LIKE  '".$buscar."%'	OR CONCAT(ProductorApellidoPat,' ',ProductorApellidoMat,' ',ProductorNombre)  LIKE  '".$buscar."%' OR ga.GuiaAcopioNumero LIKE '".$buscar."%' ";
		}if($ordernar==-1){
			$ordernarx=" ORDER BY AcopioFecha DESC ,Productor ASC ";
		}else{
			$arrayOrder=array("ASC","DESC");
			$AscDesc =rand(0,1);
			$ordernarx=" ORDER BY $ordernar ".$arrayOrder[$AscDesc];
			}
		$parametros=$buscarx." ".$ordernarx;

$consulta="SELECT 
a.AcopioId,
DATE_FORMAT(a.AcopioFecha,'%d-%m-%Y') AS Fecha, p.ProductorDni AS DNI,
CONCAT(p.ProductorApellidoPat,' ', p.ProductorApellidoMat ,' ' , p.ProductorNombre) AS Productor ,
ga.GuiaAcopioNumero AS NGA ,
 a.AcopioStatus as Tipo,
 a.AcopioNSacos as 'Sacos',
 a.AcopioQuintalesNetos AS 'kg Netos',
  a.AcopioHumedadEntregada AS 'Humedad', 
IFNULL(r.RendimientoPorcentaje,0) AS Rendimiento,
a.AcopioPrecioQuintal 'Precio QQ',
IFNULL((SELECT HumedadImporteTotal FROM humedad h WHERE h.AcopioId=a.AcopioId) ,0)AS Importe ,
IFNULL((SELECT TaceoPuntajeCatador FROM taceo  WHERE AcopioId=a.AcopioId) ,0)AS 'Calificacion Catacion' ,
(SELECT IF(EstadoAcopioSaldo>100,'<img src=\"../images/icon_verde.png"."\" />',
	IF(EstadoAcopioSaldo>0,'<img src=\"../images/icon_ambar.png"."\" />',
 '<img src=\"../images/icon_rojo.png"."\" />'))
 FROM estadoacopio ea INNER JOIN acopio ac ON ac.EstadoAcopioId=ea.EstadoAcopioId 
	WHERE ac.AcopioId=a.AcopioId) AS Estado

FROM acopio a INNER JOIN unidadproductiva up ON up.UnidadProductivaId=a.UnidadProductivaId
INNER JOIN productor p ON p.ProductorId=up.ProductorId 
INNER JOIN guiaacopio ga  ON ga.GuiaAcopioId=a.GuiaAcopioId
LEFT JOIN rendimiento r ON r.AcopioId=a.AcopioId  WHERE a.PeriodoId=(SELECT PeriodoId FROM periodo WHERE PeriodoEstado='A') AND up.UnidadProductivaEstado='A'  ". $parametros . " LIMIT 0 , 100";

$rpta=$con->Listar($consulta);
// echo "$consulta";
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_acopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from acopio where AcopioId='$this->AcopioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_acopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from acopio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopio set estado='E' where AcopioId='$this->AcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopio set estado='A' where AcopioId='$this->AcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
/*
$consulta="Update acopio set AcopioFecha='$this->AcopioFecha',AcopioNSacos='$this->AcopioNSacos',AcopioPesoBruto='$this->AcopioPesoBruto',AcopioHumedadEntregada='$this->AcopioHumedadEntregada',AcopioHumedadRequerida='$this->AcopioHumedadRequerida',AcopioPrecioQuintal='$this->AcopioPrecioQuintal',AcopioTara='$this->AcopioTara',BaseId='$this->BaseId',TipoCertificacionId='$this->TipoCertificacionId',AcopioQuintalesNetos='$this->AcopioQuintalesNetos',AcopioStatus='$this->AcopioStatus',AcopioEstado='$this->AcopioEstado',UnidadProductivaId='$this->UnidadProductivaId',GuiaAcopioId='$this->GuiaAcopioId' where AcopioId='$this->AcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
*/
$consulta=" CALL sp_AcopioActualizar('$this->AcopioId','$this->AcopioNSacos','$this->AcopioPesoBruto','$this->AcopioHumedadEntregada','$this->AcopioHumedadRequerida','$this->AcopioPrecioQuintal','$this->AcopioTara','$this->BaseId','$this->TipoCertificacionId','$this->AcopioStatus','$this->UnidadProductivaId','$this->UsuarioId')";
//echo "Registrar Acopio : $consulta";
$rpta=$con->MetodoReg_Output($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método 
public function SerieNumero_GuiaAcopio(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "SELECT MIN(gs.GuiaSerieNumero) 	AS  GuiaSerieNumero FROM guiaserie gs INNER JOIN serie s ON s.SerieId=gs.SerieId 
		INNER JOIN periodo p ON p.PeriodoId=s.PeriodoId	WHERE gs.GuiaSerieEstado='A' AND s.SerieEstado='A' AND p.PeriodoEstado='A' ;";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
public function Productor_UnidadProductiva_Acopio(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= " SELECT p.ProductorId,CONCAT(p.ProductorApellidoPat,' ', p.ProductorApellidoMat ,' ' , p.ProductorNombre) AS Productor ,
				up.UnidadProductivaId FROM productor p INNER JOIN unidadproductiva up ON up.ProductorId=p.ProductorId 
				WHERE UnidadProductivaEstado='A' AND UnidadProductivaId='$this->UnidadProductivaId' ;";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>