<?php
include_once 'Modelo_productor.php';
class Clase_unidadproductiva  extends Clase_productor
{
    //Constructor
public function Clase_unidadproductiva() { }
    //Atributos
   //Atributos
	private $UnidadProductivaId;
	private $UnidadProductivaArea;
	private $UnidadProductivaComentario;
	private $ProductorId;
	private $UnidadProductivaEstado;
	//Propiedades
	public function setUnidadProductivaId($UnidadProductivaId_){ $this->UnidadProductivaId=$UnidadProductivaId_;}
	public function getUnidadProductivaId(){ return $this->UnidadProductivaId;}
	public function setUnidadProductivaArea($UnidadProductivaArea_){ $this->UnidadProductivaArea=$UnidadProductivaArea_;}
	public function getUnidadProductivaArea(){ return $this->UnidadProductivaArea;}
	public function setUnidadProductivaComentario($UnidadProductivaComentario_){ $this->UnidadProductivaComentario=$UnidadProductivaComentario_;}
	public function getUnidadProductivaComentario(){ return $this->UnidadProductivaComentario;}
	public function setProductorId($ProductorId_){ $this->ProductorId=$ProductorId_;}
	public function getProductorId(){ return $this->ProductorId;}
	public function setUnidadProductivaEstado($UnidadProductivaEstado_){ $this->UnidadProductivaEstado=$UnidadProductivaEstado_;}
	public function getUnidadProductivaEstado(){ return $this->UnidadProductivaEstado;}
//Métodos
//Método Insertar
public function Insertar_unidadproductiva()   {
	$rpta;
	try {
		include_once 'conexion.php';
		$con      = new Conexion();
		//$consulta = "Insert into unidadproductiva values('$this->UnidadProductivaId','$this->UnidadProductivaArea','$this->UnidadProductivaComentario','$this->ProductorId')";
		$consulta="Insert into unidadproductiva values('$this->UnidadProductivaId','$this->UnidadProductivaArea','$this->UnidadProductivaComentario','$this->ProductorId','$this->UnidadProductivaEstado')";
		$rpta     = $con->MetodoRegistrar($consulta);		
	}
	catch (exception $e) {
		$rpta = $e->getMessage();
	}
	return $rpta;
}
    //Método Listar Ordenados los datos por la primera Fila 
    public function Listar_unidadproductiva($ordenar=1) {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
          
	if($ordenar==-1){ 
		$ordenar=1;
		$tipoOrden="desc";
	}
	
	
	  $consulta = 'SELECT up.UnidadProductivaId ,up.ProductorId ,
CONCAT(ProductorApellidoPat," ",ProductorApellidoMat,", ",ProductorNombre) AS Productor ,
(SELECT COUNT(ParcelaId)   FROM parcela  INNER JOIN unidadproductiva ON parcela.UnidadProductivaId=unidadproductiva.UnidadProductivaId 
WHERE unidadproductiva.ProductorId= p.ProductorId AND unidadproductiva.UnidadProductivaId=up.UnidadProductivaId ) AS "Numero Parcelas",
IFNULL( (SELECT SUM(ParcelaArea) FROM parcela  INNER JOIN unidadproductiva ON parcela.UnidadProductivaId=unidadproductiva.UnidadProductivaId 
WHERE  unidadproductiva.UnidadProductivaId=up.UnidadProductivaId ),0) AS "Area Total"
FROM productor p INNER JOIN unidadproductiva up ON p.ProductorId=up.ProductorId  order by '.$ordenar.' '.$tipoOrden;
		
            $rpta     = $con->Listar($consulta);
		//echo "  consulta  :   $consulta ";
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Buscar por ID
    public function Buscar_unidadproductiva(){
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "SELECT * FROM unidadproductiva WHERE UnidadProductivaId='$this->UnidadProductivaId'";
						
            $rpta     = $con->Listar($consulta);
			
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }	
    //Método Listar
    public function ListadoSimple_unidadproductiva(){
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "select * from unidadproductiva";
            $rpta     = $con->Listar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Eliminar(Actualizar Estado)
    public function Eliminar_unidadproductiva() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update unidadproductiva set UnidadProductivaEstado='E' WHERE  UnidadProductivaId='$this->UnidadProductivaId'";
            $rpta     = $con->MetodoRegistrar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Recuperar
    public function Recuperar_unidadproductiva(){
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
            $consulta = "Update unidadproductiva set UnidadProductivaEstado='A' where UnidadProductivaId='$this->UnidadProductivaId'";
            $rpta     = $con->MetodoRegistrar($consulta);
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
    //Método Actualizar
    public function Actualizar_unidadproductiva() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
			$consulta = "Update unidadproductiva set UnidadProductivaArea='$this->UnidadProductivaArea',UnidadProductivaComentario='$this->UnidadProductivaComentario' where UnidadProductivaId='$this->UnidadProductivaId'";
            $rpta     = $con->MetodoRegistrar($consulta);
		//	echo "consulta : $consulta";
            
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
	
	//Método Buscar con paramentos buscar mas ordenar
    public function BuscarLike_unidadproductiva($ordernar=-1,$buscar="")    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
			
			$parametros="";
			$buscarx="";
		
		if($buscar!=""){ //
			$buscarx="  AND ProductorApellidoPat LIKE  '".$buscar."%'  OR ProductorApellidoMat LIKE  '".$buscar."%'  OR ProductorNombre LIKE  '".$buscar."%'
						OR CONCAT(ProductorApellidoPat,' ',ProductorApellidoMat,' ',ProductorNombre)  LIKE  '".$buscar."%' ";
		}if($ordernar==-1){
			$ordernarx=" ORDER BY 1 DESC";
		}else{
			$arrayOrder=array("ASC","DESC");
			$AscDesc =rand(0,1);
			$ordernarx=" ORDER BY $ordernar ".$arrayOrder[$AscDesc];
			}
		$parametros=$buscarx." ".$ordernarx;

		$consulta = 'SELECT up.UnidadProductivaId ,up.ProductorId ,
		CONCAT(ProductorApellidoPat," ",ProductorApellidoMat,", ",ProductorNombre) AS Productor ,
		(SELECT COUNT(ParcelaId)   FROM parcela  INNER JOIN unidadproductiva ON parcela.UnidadProductivaId=unidadproductiva.UnidadProductivaId 
		WHERE unidadproductiva.ProductorId= p.ProductorId AND unidadproductiva.UnidadProductivaId=up.UnidadProductivaId ) AS "Numero Parcelas",
		CONCAT(IFNULL((SELECT SUM(ParcelaArea) FROM parcela  INNER JOIN unidadproductiva ON parcela.UnidadProductivaId=unidadproductiva.UnidadProductivaId 
		WHERE  unidadproductiva.UnidadProductivaId=up.UnidadProductivaId ),0) , " ", "ha") AS "Area Total"
		FROM productor p INNER JOIN unidadproductiva up ON p.ProductorId=up.ProductorId  WHERE UnidadProductivaEstado=\'A\''.$parametros;
		
            $rpta= $con->Listar($consulta);
			//echo "consulta:: $consulta";
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }	

	
	 //Método Para Listar Datos Generales de Una Unidad Productiva
    public function DatosGenerales_unidadproductiva() {
        $rpta;
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
		  $consulta ='SELECT p.ProductorId, up.UnidadProductivaId,
			  CONCAT(ProductorApellidoPat," ",ProductorApellidoMat,", ",ProductorNombre) AS Productor ,
			  CONCAT(d.DistritoNombre," / ",pr.ProvinciaNombre," / ",dep.DepartamentoNombre) as Ubicacion,
			  CONCAT(t.TelefonoFijo," / ",t.TelefonoMovil) as Telefonos,
			  p.ProductorEmail ,
			  IFNULL((SELECT SUM(ParcelaArea) FROM parcela INNER JOIN unidadproductiva ON
			  	 parcela.UnidadProductivaId=unidadproductiva.UnidadProductivaId 
			  	 WHERE  unidadproductiva.UnidadProductivaId=up.UnidadProductivaId ),0) AS "Area Total"
			  FROM productor p INNER JOIN unidadproductiva up ON p.ProductorId=up.ProductorId 
			  INNER JOIN distrito d ON d.DistritoId=p.DistritoId 
			  INNER JOIN provincia pr ON d.ProvinciaId= pr.ProvinciaId
			  INNER JOIN departamento dep ON dep.DepartamentoId=pr.DepartamentoId
			  LEFT JOIN telefono t ON t.ProductorId=p.ProductorId  where UnidadProductivaId='.$this->UnidadProductivaId ;
			//echo " consulta: $consulta";
            $rpta     = $con->Listar($consulta);
           // echo "  consulta  :   $consulta ";
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }
	 //Método Extraer el Area Total de la Unidad productiva suma de cada una de la Parcelas
    public function AreaTotal_unidadproductiva() {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con      = new Conexion();
			$consulta = "SELECT IFNULL(SUM(ParcelaArea),1) AS AreaTotal FROM parcela  INNER JOIN unidadproductiva ON parcela.UnidadProductivaId=unidadproductiva.UnidadProductivaId WHERE  unidadproductiva.UnidadProductivaId='$this->UnidadProductivaId'";
		// echo "AreaTotal_unidadproductiva: $consulta ";
            $rpta     = $con->Listar($consulta);			
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }

  public function Buscar_unidadproductiva_ProductorDNI(){
	  $rpta = array();
	  try {
		  include_once 'conexion.php';
		  $con      = new Conexion();
		  $consulta = "SELECT up.UnidadProductivaId, CONCAT( ProductorApellidoPat,' ' , ProductorApellidoMat,' ' ,ProductorNombre) as 'ProdcutorNombre' FROM productor p  INNER JOIN unidadproductiva up ON up.ProductorId=p.ProductorId WHERE p.ProductorDni='".$this->getProductorDni()."'";
		  $rpta     = $con->Listar($consulta);
	  }
	  catch (exception $e) {
		  $rpta = $e->getMessage();
	  }
	  return $rpta;
  }	

}
?>