<?php 

class Clase_parcela{
//Constructor
public function Clase_parcela(){}
//Atributos
private $ParcelaId;
private $ParcelaNombre;
private $ParcelaArea;
private $UnidadProductivaId;
private $BaseId;
private $DistritoId;
private $ParcelaCaserio;
private $ParcelaEstado;
//Propiedades
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
public function setParcelaNombre($ParcelaNombre_){ $this->ParcelaNombre=$ParcelaNombre_;}
public function getParcelaNombre(){ return $this->ParcelaNombre;}
public function setParcelaArea($ParcelaArea_){ $this->ParcelaArea=$ParcelaArea_;}
public function getParcelaArea(){ return $this->ParcelaArea;}
public function setUnidadProductivaId($UnidadProductivaId_){ $this->UnidadProductivaId=$UnidadProductivaId_;}
public function getUnidadProductivaId(){ return $this->UnidadProductivaId;}
public function setBaseId($BaseId_){ $this->BaseId=$BaseId_;}
public function getBaseId(){ return $this->BaseId;}
public function setDistritoId($DistritoId_){ $this->DistritoId=$DistritoId_;}
public function getDistritoId(){ return $this->DistritoId;}
public function setParcelaCaserio($ParcelaCaserio_){ $this->ParcelaCaserio=$ParcelaCaserio_;}
public function getParcelaCaserio(){ return $this->ParcelaCaserio;}
public function setParcelaEstado($ParcelaEstado_){ $this->ParcelaEstado=$ParcelaEstado_;}
public function getParcelaEstado(){ return $this->ParcelaEstado;}
//Métodos
//Método Insertar
public function Insertar_parcela(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into parcela values('$this->ParcelaId','$this->ParcelaNombre','$this->ParcelaArea','$this->UnidadProductivaId','$this->BaseId','$this->DistritoId','$this->ParcelaCaserio','$this->ParcelaEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_parcela(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select parcela.ParcelaId As 'ParcelaId',parcela.ParcelaNombre As 'Nombre',parcela.ParcelaArea As 'Area',parcela.UnidadProductivaId As 'UnidadProductivaId',parcela.BaseId As 'BaseId',parcela.DistritoId As 'DistritoId',parcela.ParcelaCaserio As 'Caserio',parcela.ParcelaEstado As 'Estado' from parcela";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_parcela(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	//$consulta= "select * from parcela where ParcelaId='$this->ParcelaId'";
	$consulta=" SELECT p.*,pr.ProvinciaId , dp.DepartamentoId from parcela p
INNER JOIN distrito d ON d.DistritoId=p.DistritoId
INNER JOIN provincia pr ON pr.ProvinciaId=d.ProvinciaId
INNER JOIN departamento dp ON dp.DepartamentoId=pr.DepartamentoId
 WHERE ParcelaId='$this->ParcelaId' ";
	$rpta=$con->Listar($consulta);
	//echo "consulta::: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Listar
public function ListadoSimple_parcela(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from parcela";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_parcela(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="UPDATE parcela SET ParcelaEstado = 'E' WHERE ParcelaId ='$this->ParcelaId'";
	//$consulta="delete from parcela where ParcelaId='$this->ParcelaId'";
	$rpta=$con->MetodoRegistrar($consulta);	
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Recuperar
public function Recuperar_parcela(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update parcela set estado='A' where ParcelaId='$this->ParcelaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_parcela(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="Update parcela set ParcelaNombre='$this->ParcelaNombre',ParcelaArea='$this->ParcelaArea',UnidadProductivaId='$this->UnidadProductivaId',BaseId='$this->BaseId',DistritoId='$this->DistritoId',ParcelaCaserio='$this->ParcelaCaserio',ParcelaEstado='$this->ParcelaEstado' where ParcelaId='$this->ParcelaId'";
	$rpta=$con->MetodoRegistrar($consulta);
	//echo "consulta:: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método para listar Los Datos de la parcelas
 public function ListarParcela()    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
			/*
		 $consulta = "SELECT pa.ParcelaId, pa.ParcelaNombre,pa.ParcelaArea FROM parcela pa LEFT JOIN parceladetalle pad ON pa.ParcelaId=pad.ParcelaId LEFT JOIN unidadproductivaproducto upp ON pad.UnidadProductivaProductoId=upp.UnidadProductivaProductoId WHERE   upp.UnidadProductivaId='$this->UnidadProductivaId'";	
		 */
		  $consulta = "SELECT pa.ParcelaId, pa.ParcelaNombre,CONCAT(pa.ParcelaArea,' ' , 'ha') FROM parcela pa WHERE  pa.ParcelaEstado='A' AND pa.UnidadProductivaId='$this->UnidadProductivaId' ORDER BY 2 ";	
		 // echo "consulta: $consulta";			
            $rpta     = $con->Listar($consulta);			
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
//Método para listar Los Datos de los  productos para una parcela */
 public function Listar_parcela_productos()    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con= new Conexion();
	/*	 $consulta = ' SELECT DISTINCT p.ProductoId,CONCAT(tp.TipoProducto," (", p.ProductoVariedad,") ") as "Producto" , pad.ParcelaDetalleArea AS "Area Sembrada"  FROM producto p INNER JOIN tipoproducto tp ON tp.TipoProductoId=p.TipoProductoId INNER JOIN unidadproductivaproducto upp ON upp.ProductoId=p.ProductoId INNER JOIN parceladetalle pad ON pad.UnidadProductivaProductoId=upp.UnidadProductivaProductoId INNER JOIN parcela pa  ON pa.ParcelaId=pad.ParcelaId WHERE   pa.ParcelaId='.$this->ParcelaId.' AND upp.UnidadProductivaId='.$this->UnidadProductivaId;	*/
		 
		  $consulta = ' SELECT DISTINCT pad.ParcelaDetalleId,CONCAT(tp.TipoProducto," (", p.ProductoVariedad,") ") as "Producto" ,
		  CONCAT(pad.ParcelaDetalleArea, " " ,"ha") AS "Area Sembrada"  FROM producto p INNER JOIN tipoproducto tp ON tp.TipoProductoId=p.TipoProductoId INNER JOIN unidadproductivaproducto upp ON upp.ProductoId=p.ProductoId INNER JOIN parceladetalle pad ON pad.UnidadProductivaProductoId=upp.UnidadProductivaProductoId INNER JOIN parcela pa  ON pa.ParcelaId=pad.ParcelaId 
		  WHERE PeriodoId=(SELECT PeriodoId FROM periodo WHERE PeriodoEstado="A")  AND ProductoEstado="A" AND
		    pa.ParcelaId='.$this->ParcelaId.' AND upp.UnidadProductivaId='.$this->UnidadProductivaId;	
	//echo "Listar_parcela_productos consulta: $consulta <br/>";				
            $rpta     = $con->Listar($consulta);			
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }	
	//Método para listar Los Datos de la georeferenciacion de la parcela */
 public function Listar_parcela_georeferencia()    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
		 $consulta = " SELECT g.GeoReferenciaId FROM georeferencia g WHERE g.ParcelaId='$this->ParcelaId'";					
       // echo "consulta :: $consulta";
		    $rpta     = $con->Listar($consulta);	
				
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }	
		//Método para listar Los Datos Generales  de una la parcela */
 public function Listar_datosGenerales_parcela()    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
		 $consulta = 'SELECT pa.ParcelaNombre as "Parcela"	,pa.ParcelaArea as "Area Total" ,b.BaseNombre AS "Base", CONCAT( d.DistritoNombre," / ", pr.ProvinciaNombre, " / ",dep.DepartamentoNombre )AS "Ubicacion" FROM parcela pa INNER JOIN base b ON b.BaseId=pa.BaseId
		  INNER JOIN distrito d ON d.DistritoId=pa.DistritoId INNER JOIN provincia pr ON pr.ProvinciaId=d.ProvinciaId 
		  INNER JOIN departamento dep ON dep.DepartamentoId=pr.DepartamentoId 
		  WHERE pa.ParcelaId='.$this->ParcelaId;					
            $rpta     = $con->Listar($consulta);			
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
// Listar las Parcelas por Unidad Productiva Generalmente cuando queremos llenar en un combo
public function Listar_Parcela_xUnidadProductiva()    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
		 $consulta = "SELECT ParcelaId, ParcelaNombre FROM parcela WHERE UnidadProductivaId='$this->UnidadProductivaId'";					
            $rpta     = $con->Listar($consulta);			
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }		
}
?>