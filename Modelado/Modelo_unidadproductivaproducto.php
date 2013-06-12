<?php 
class Clase_unidadproductivaproducto{
//Constructor
public function Clase_unidadproductivaproducto(){}
	//Atributos
	private $UnidadProductivaProductoId;
	private $ProductoId;
	private $UnidadProductivaId;
	//Propiedades
	public function setUnidadProductivaProductoId($UnidadProductivaProductoId_){ $this->UnidadProductivaProductoId=$UnidadProductivaProductoId_;}
	public function getUnidadProductivaProductoId(){ return $this->UnidadProductivaProductoId;}
	public function setProductoId($ProductoId_){ $this->ProductoId=$ProductoId_;}
	public function getProductoId(){ return $this->ProductoId;}
	public function setUnidadProductivaId($UnidadProductivaId_){ $this->UnidadProductivaId=$UnidadProductivaId_;}
	public function getUnidadProductivaId(){ return $this->UnidadProductivaId;}
		
	//Atributos unidad Productiva 
    private $UnidadProductivaArea;
    private $UnidadProductivaComentario;
    //Propiedades
    public function setUnidadProductivaArea($UnidadProductivaArea_){ $this->UnidadProductivaArea = $UnidadProductivaArea_; }
    public function getUnidadProductivaArea(){ return $this->UnidadProductivaArea;}
    public function setUnidadProductivaComentario($UnidadProductivaComentario_){ $this->UnidadProductivaComentario = $UnidadProductivaComentario_; }
    public function getUnidadProductivaComentario(){  return $this->UnidadProductivaComentario;}
  
	//Atributos de producto
	private $ProductoVariedad;
	private $ProductoArea;
	private $ProductoProduccionAnual;
	private $ProductoMesAfloracion;
	private $ProductoMesCosecha;
	private $ProductoDescripcion;
	private $TipoProductoId;
	private $PeriodoId;
	private $ProductoEstado;
	//Propiedades	
	public function setProductoVariedad($ProductoVariedad_){ $this->ProductoVariedad=$ProductoVariedad_;}
	public function getProductoVariedad(){ return $this->ProductoVariedad;}
	public function setProductoArea($ProductoArea_){ $this->ProductoArea=$ProductoArea_;}
	public function getProductoArea(){ return $this->ProductoArea;}
	public function setProductoProduccionAnual($ProductoProduccionAnual_){ $this->ProductoProduccionAnual=$ProductoProduccionAnual_;}
	public function getProductoProduccionAnual(){ return $this->ProductoProduccionAnual;}
	public function setProductoMesAfloracion($ProductoMesAfloracion_){ $this->ProductoMesAfloracion=$ProductoMesAfloracion_;}
	public function getProductoMesAfloracion(){ return $this->ProductoMesAfloracion;}
	public function setProductoMesCosecha($ProductoMesCosecha_){ $this->ProductoMesCosecha=$ProductoMesCosecha_;}
	public function getProductoMesCosecha(){ return $this->ProductoMesCosecha;}
	public function setProductoDescripcion($ProductoDescripcion_){ $this->ProductoDescripcion=$ProductoDescripcion_;}
	public function getProductoDescripcion(){ return $this->ProductoDescripcion;}
	public function setTipoProductoId($TipoProductoId_){ $this->TipoProductoId=$TipoProductoId_;}
	public function getTipoProductoId(){ return $this->TipoProductoId;}
	public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
	public function getPeriodoId(){ return $this->PeriodoId;}
	public function setProductoEstado($ProductoEstado_){ $this->ProductoEstado=$ProductoEstado_;}
	public function getProductoEstado(){ return $this->ProductoEstado;}

//Métodos
//Método Insertar
public function Insertar_unidadproductivaproducto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into unidadproductivaproducto values('$this->UnidadProductivaProductoId','$this->ProductoId','$this->UnidadProductivaId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(con procedimiento almacenado +  el producto)
public function Eliminar_unidadproductivaproducto(){
	$rpta;
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta="CALL sp_EliminarProducto('$this->ProductoId','$this->UnidadProductivaId')";
	$rpta=$con->MetodoReg_Output($consulta);
	//echo " consulta:: $consulta";
	}catch(exception $e){
	 $rpta=$e->getMessage();}
	return $rpta;
}
//Método Actualizar
public function Actualizar_unidadproductivaproducto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update unidadproductivaproducto set ProductoId='$this->ProductoId',UnidadProductivaId='$this->UnidadProductivaId' where UnidadProductivaProductoId='$this->UnidadProductivaProductoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Listar productos por unidad Prodcutiva
public function Listar_producto_xUP(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	/*
	$consulta="SELECT p.ProductoId,tp.TipoProductoId ,tp.TipoProducto as 'Tipo de Producto',p.ProductoVariedad as Variedad,p.ProductoArea as Area,p.ProductoProduccionAnual as 'Produccion Anual',p.ProductoMesAfloracion as 'Mes de Afloracion',p.ProductoMesCosecha 'Mes de Cosecha', p.ProductoDescripcion 'Nota' FROM producto p INNER JOIN tipoproducto tp ON p.TipoProductoId=tp.TipoProductoId INNER JOIN unidadproductivaproducto upp ON upp.ProductoId=p.ProductoId INNER JOIN unidadproductiva up ON up.UnidadProductivaId=upp.UnidadProductivaId WHERE p.ProductoEstado='A' AND p.PeriodoId='$this->PeriodoId' AND up.UnidadProductivaId='$this->UnidadProductivaId'";
	$rpta=$con->Listar($consulta);
*/	
		$consulta="CALL sp_Producto_Periodo_Listar('$this->UnidadProductivaId');";
	$rpta=$con->Listar($consulta);
	
	//echo "$consulta";
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método Listar productos por unidad Prodcutiva para llenar el combo para detalle de parcela
public function Listar_producto_Unidadproductiva(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta='SELECT upp.ProductoId,CONCAT(tp.TipoProducto," (", p.ProductoVariedad,") ") as "Producto" FROM producto p INNER JOIN tipoproducto tp ON tp.TipoProductoId=p.TipoProductoId  INNER JOIN unidadproductivaproducto upp ON upp.ProductoId=p.ProductoId  INNER JOIN unidadproductiva up ON up.UnidadProductivaId=upp.UnidadProductivaId WHERE p.PeriodoId=(SELECT PeriodoId FROM periodo WHERE PeriodoEstado="A")  AND up.UnidadProductivaId=\''.$this->UnidadProductivaId.'\'';
	$rpta=$con->Listar($consulta);
	//echo "$consulta";
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}

//Método DI de la unidad Prodcutiva Producto
public function Listar_unidadproductovaproductoId(){
	$rpta=array();
	try{
	include_once 'conexion.php';
	$con=new Conexion();
	$consulta=" SELECT UnidadProductivaProductoId FROM unidadproductivaproducto  WHERE ProductoId='$this->ProductoId' AND	UnidadProductivaId='$this->UnidadProductivaId' ";
	//echo "Listar_unidadproductovaproductoId consulta: $consulta";
	$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>