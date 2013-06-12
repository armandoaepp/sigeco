<?php 
include_once("Modelo_parcela.php");
class Clase_analisisquimico extends Clase_parcela{
//Constructor
public function Clase_analisisquimico(){}
//Atributos
private $AnalisisQuimicoId;
private $AnalisisQuimicoFecha;
private $AnalisisQuimicoPh;
private $AnalisisQuimicoMateria;
private $AnalisisQuimicoCarbono;
private $AnalisisQuimicoNt;
private $AnalisisQuimicoN;
private $AnalisisQuimicoMo;
private $AnalisisQuimicoK;
private $AnalisisQuimicoCa;
private $AnalisisQuimicoMg;
private $AnalisisQuimicoNa;
private $AnalisisQuimicoAl;
private $AnalisisQuimicoH;
private $AnalisisQuimicoCIC;
private $AnalisisQuimicoP2;
private $AnalisisQuimicoP;
private $AnalisisQuimicoFe;
private $AnalisisQuimicoMn;
private $AnalisisQuimicoBoro;
private $AnalisisQuimicoZn;
private $AnalisisQuimicoAzufre;
private $AnalisisQuimicoCu;
private $AnalisisQuimicoAr;
private $AnalisisQuimicoA;
private $AnalisisQuimicoDescripcion;
//private $ParcelaId;
private $AnalisisQuimicoL;
//Propiedades
public function setAnalisisQuimicoId($AnalisisQuimicoId_){ $this->AnalisisQuimicoId=$AnalisisQuimicoId_;}
public function getAnalisisQuimicoId(){ return $this->AnalisisQuimicoId;}
public function setAnalisisQuimicoFecha($AnalisisQuimicoFecha_){ $this->AnalisisQuimicoFecha=$AnalisisQuimicoFecha_;}
public function getAnalisisQuimicoFecha(){ return $this->AnalisisQuimicoFecha;}
public function setAnalisisQuimicoPh($AnalisisQuimicoPh_){ $this->AnalisisQuimicoPh=$AnalisisQuimicoPh_;}
public function getAnalisisQuimicoPh(){ return $this->AnalisisQuimicoPh;}
public function setAnalisisQuimicoMateria($AnalisisQuimicoMateria_){ $this->AnalisisQuimicoMateria=$AnalisisQuimicoMateria_;}
public function getAnalisisQuimicoMateria(){ return $this->AnalisisQuimicoMateria;}
public function setAnalisisQuimicoCarbono($AnalisisQuimicoCarbono_){ $this->AnalisisQuimicoCarbono=$AnalisisQuimicoCarbono_;}
public function getAnalisisQuimicoCarbono(){ return $this->AnalisisQuimicoCarbono;}
public function setAnalisisQuimicoNt($AnalisisQuimicoNt_){ $this->AnalisisQuimicoNt=$AnalisisQuimicoNt_;}
public function getAnalisisQuimicoNt(){ return $this->AnalisisQuimicoNt;}
public function setAnalisisQuimicoN($AnalisisQuimicoN_){ $this->AnalisisQuimicoN=$AnalisisQuimicoN_;}
public function getAnalisisQuimicoN(){ return $this->AnalisisQuimicoN;}
public function setAnalisisQuimicoMo($AnalisisQuimicoMo_){ $this->AnalisisQuimicoMo=$AnalisisQuimicoMo_;}
public function getAnalisisQuimicoMo(){ return $this->AnalisisQuimicoMo;}
public function setAnalisisQuimicoK($AnalisisQuimicoK_){ $this->AnalisisQuimicoK=$AnalisisQuimicoK_;}
public function getAnalisisQuimicoK(){ return $this->AnalisisQuimicoK;}
public function setAnalisisQuimicoCa($AnalisisQuimicoCa_){ $this->AnalisisQuimicoCa=$AnalisisQuimicoCa_;}
public function getAnalisisQuimicoCa(){ return $this->AnalisisQuimicoCa;}
public function setAnalisisQuimicoMg($AnalisisQuimicoMg_){ $this->AnalisisQuimicoMg=$AnalisisQuimicoMg_;}
public function getAnalisisQuimicoMg(){ return $this->AnalisisQuimicoMg;}
public function setAnalisisQuimicoNa($AnalisisQuimicoNa_){ $this->AnalisisQuimicoNa=$AnalisisQuimicoNa_;}
public function getAnalisisQuimicoNa(){ return $this->AnalisisQuimicoNa;}
public function setAnalisisQuimicoAl($AnalisisQuimicoAl_){ $this->AnalisisQuimicoAl=$AnalisisQuimicoAl_;}
public function getAnalisisQuimicoAl(){ return $this->AnalisisQuimicoAl;}
public function setAnalisisQuimicoH($AnalisisQuimicoH_){ $this->AnalisisQuimicoH=$AnalisisQuimicoH_;}
public function getAnalisisQuimicoH(){ return $this->AnalisisQuimicoH;}
public function setAnalisisQuimicoCIC($AnalisisQuimicoCIC_){ $this->AnalisisQuimicoCIC=$AnalisisQuimicoCIC_;}
public function getAnalisisQuimicoCIC(){ return $this->AnalisisQuimicoCIC;}
public function setAnalisisQuimicoP2($AnalisisQuimicoP2_){ $this->AnalisisQuimicoP2=$AnalisisQuimicoP2_;}
public function getAnalisisQuimicoP2(){ return $this->AnalisisQuimicoP2;}
public function setAnalisisQuimicoP($AnalisisQuimicoP_){ $this->AnalisisQuimicoP=$AnalisisQuimicoP_;}
public function getAnalisisQuimicoP(){ return $this->AnalisisQuimicoP;}
public function setAnalisisQuimicoFe($AnalisisQuimicoFe_){ $this->AnalisisQuimicoFe=$AnalisisQuimicoFe_;}
public function getAnalisisQuimicoFe(){ return $this->AnalisisQuimicoFe;}
public function setAnalisisQuimicoMn($AnalisisQuimicoMn_){ $this->AnalisisQuimicoMn=$AnalisisQuimicoMn_;}
public function getAnalisisQuimicoMn(){ return $this->AnalisisQuimicoMn;}
public function setAnalisisQuimicoBoro($AnalisisQuimicoBoro_){ $this->AnalisisQuimicoBoro=$AnalisisQuimicoBoro_;}
public function getAnalisisQuimicoBoro(){ return $this->AnalisisQuimicoBoro;}
public function setAnalisisQuimicoZn($AnalisisQuimicoZn_){ $this->AnalisisQuimicoZn=$AnalisisQuimicoZn_;}
public function getAnalisisQuimicoZn(){ return $this->AnalisisQuimicoZn;}
public function setAnalisisQuimicoAzufre($AnalisisQuimicoAzufre_){ $this->AnalisisQuimicoAzufre=$AnalisisQuimicoAzufre_;}
public function getAnalisisQuimicoAzufre(){ return $this->AnalisisQuimicoAzufre;}
public function setAnalisisQuimicoCu($AnalisisQuimicoCu_){ $this->AnalisisQuimicoCu=$AnalisisQuimicoCu_;}
public function getAnalisisQuimicoCu(){ return $this->AnalisisQuimicoCu;}
public function setAnalisisQuimicoAr($AnalisisQuimicoAr_){ $this->AnalisisQuimicoAr=$AnalisisQuimicoAr_;}
public function getAnalisisQuimicoAr(){ return $this->AnalisisQuimicoAr;}
public function setAnalisisQuimicoA($AnalisisQuimicoA_){ $this->AnalisisQuimicoA=$AnalisisQuimicoA_;}
public function getAnalisisQuimicoA(){ return $this->AnalisisQuimicoA;}
public function setAnalisisQuimicoDescripcion($AnalisisQuimicoDescripcion_){ $this->AnalisisQuimicoDescripcion=$AnalisisQuimicoDescripcion_;}
public function getAnalisisQuimicoDescripcion(){ return $this->AnalisisQuimicoDescripcion;}

/*public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
*/
public function setAnalisisQuimicoL($AnalisisQuimicoL_){ $this->AnalisisQuimicoL=$AnalisisQuimicoL_;}
public function getAnalisisQuimicoL(){ return $this->AnalisisQuimicoL;}
//Métodos
//Método Insertar
	public function Insertar_analisisquimico(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Insert into analisisquimico values('$this->AnalisisQuimicoId','$this->AnalisisQuimicoFecha','$this->AnalisisQuimicoPh','$this->AnalisisQuimicoMateria','$this->AnalisisQuimicoCarbono','$this->AnalisisQuimicoNt','$this->AnalisisQuimicoN','$this->AnalisisQuimicoMo','$this->AnalisisQuimicoK','$this->AnalisisQuimicoCa','$this->AnalisisQuimicoMg','$this->AnalisisQuimicoNa','$this->AnalisisQuimicoAl','$this->AnalisisQuimicoH','$this->AnalisisQuimicoCIC','$this->AnalisisQuimicoP2','$this->AnalisisQuimicoP','$this->AnalisisQuimicoFe','$this->AnalisisQuimicoMn','$this->AnalisisQuimicoBoro','$this->AnalisisQuimicoZn','$this->AnalisisQuimicoAzufre','$this->AnalisisQuimicoCu','$this->AnalisisQuimicoAr','$this->AnalisisQuimicoA','$this->AnalisisQuimicoDescripcion','".$this->getParcelaId()."','$this->AnalisisQuimicoL')";
	$rpta=$con->MetodoRegistrar($consulta);
	
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
	public function Listar_analisisquimico(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Select analisisquimico.AnalisisQuimicoId As 'QuimicoId',analisisquimico.ParcelaId As 'Parcela',analisisquimico.AnalisisQuimicoFecha As ' Fecha',analisisquimico.AnalisisQuimicoPh As 'Ph',analisisquimico.AnalisisQuimicoMateria As ' Materia',analisisquimico.AnalisisQuimicoCarbono As 'Carbono',analisisquimico.AnalisisQuimicoNt As ' Nt',analisisquimico.AnalisisQuimicoN As 'N',analisisquimico.AnalisisQuimicoMo As 'Mo',analisisquimico.AnalisisQuimicoK As 'K',analisisquimico.AnalisisQuimicoCa As 'Ca',analisisquimico.AnalisisQuimicoMg As 'Mg',analisisquimico.AnalisisQuimicoNa As 'Na',analisisquimico.AnalisisQuimicoAl As 'Al',analisisquimico.AnalisisQuimicoH As 'H',analisisquimico.AnalisisQuimicoCIC As 'CIC',analisisquimico.AnalisisQuimicoP2 As 'P2',analisisquimico.AnalisisQuimicoP As 'P',analisisquimico.AnalisisQuimicoFe As 'Fe',analisisquimico.AnalisisQuimicoMn As 'Mn',analisisquimico.AnalisisQuimicoBoro As 'Boro',analisisquimico.AnalisisQuimicoZn As 'Zn',analisisquimico.AnalisisQuimicoAzufre As 'Azufre',analisisquimico.AnalisisQuimicoCu As 'Cu',analisisquimico.AnalisisQuimicoAr As 'QuimicoAr',analisisquimico.AnalisisQuimicoA As 'A',analisisquimico.AnalisisQuimicoDescripcion As 'Quimico Descripcion',analisisquimico.AnalisisQuimicoL As 'L' from analisisquimico";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Buscar por ID
	public function Buscar_analisisquimico(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from analisisquimico where AnalisisQuimicoId='$this->AnalisisQuimicoId'";
	//echo "consulta::: $consulta";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
	public function ListadoSimple_analisisquimico(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select * from analisisquimico";
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Eliminar(Actualizar Estado)
	public function Eliminar_analisisquimico(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="delete from analisisquimico where AnalisisQuimicoId='$this->AnalisisQuimicoId'";
	//echo "::  $consulta";
	$rpta=$con->MetodoRegistrar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Recuperar
public function Recuperar_analisisquimico(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update analisisquimico set estado='A' where AnalisisQuimicoId='$this->AnalisisQuimicoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
	public function Actualizar_analisisquimico(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Update analisisquimico set AnalisisQuimicoFecha='$this->AnalisisQuimicoFecha',AnalisisQuimicoPh='$this->AnalisisQuimicoPh',AnalisisQuimicoMateria='$this->AnalisisQuimicoMateria',AnalisisQuimicoCarbono='$this->AnalisisQuimicoCarbono',AnalisisQuimicoNt='$this->AnalisisQuimicoNt',AnalisisQuimicoN='$this->AnalisisQuimicoN',AnalisisQuimicoMo='$this->AnalisisQuimicoMo',AnalisisQuimicoK='$this->AnalisisQuimicoK',AnalisisQuimicoCa='$this->AnalisisQuimicoCa',AnalisisQuimicoMg='$this->AnalisisQuimicoMg',AnalisisQuimicoNa='$this->AnalisisQuimicoNa',AnalisisQuimicoAl='$this->AnalisisQuimicoAl',AnalisisQuimicoH='$this->AnalisisQuimicoH',AnalisisQuimicoCIC='$this->AnalisisQuimicoCIC',AnalisisQuimicoP2='$this->AnalisisQuimicoP2',AnalisisQuimicoP='$this->AnalisisQuimicoP',AnalisisQuimicoFe='$this->AnalisisQuimicoFe',AnalisisQuimicoMn='$this->AnalisisQuimicoMn',AnalisisQuimicoBoro='$this->AnalisisQuimicoBoro',AnalisisQuimicoZn='$this->AnalisisQuimicoZn',AnalisisQuimicoAzufre='$this->AnalisisQuimicoAzufre',AnalisisQuimicoCu='$this->AnalisisQuimicoCu',AnalisisQuimicoAr='$this->AnalisisQuimicoAr',AnalisisQuimicoA='$this->AnalisisQuimicoA',AnalisisQuimicoDescripcion='$this->AnalisisQuimicoDescripcion',ParcelaId='".$this->getParcelaId()."',AnalisisQuimicoL='$this->AnalisisQuimicoL' where AnalisisQuimicoId='$this->AnalisisQuimicoId'";
	$rpta=$con->MetodoRegistrar($consulta);
	
	//$rpta = $rpta ."  - sql :::  $consulta ";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar por unidad productiva
public function Lista_analisisquimico_xUnidadProductiva(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta= "select aq.*, p.ParcelaNombre from analisisquimico aq INNER JOIN parcela p ON  aq.ParcelaId=p.ParcelaId WHERE p.UnidadProductivaId='".$this->getUnidadProductivaId()."' order by 2,1 desc";
	
	
	$rpta=$con->Listar($consulta);
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
}
?>