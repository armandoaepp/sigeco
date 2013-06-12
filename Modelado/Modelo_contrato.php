<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_contrato{
//Constructor
public function Clase_contrato(){}
//Atributos
private $ContratoId;
private $ContratoNumero;
private $ContratoCantidadSacos;
private $ContratoKGxSaco;
private $ContratoPuntajeDesde;
private $ContratoPuntajeHasta;
private $ContratoFecha;
private $ContratoFechaEmbarque;
private $ContratoStatus;
private $ContratoPosicion;
private $ContratoPrecioBolsa;
private $ContratoNumeroFactura;
private $ContratoValorFod;
private $ContratoPuertoEmbarque;
private $ContratoPuertoDestino;
private $ContratoHumedad;
private $ContratoCantidadQuintales;
private $ContratoToneladas;
private $ContratoNotas;
private $ContratoEstado;
private $ClienteId;
private $TipoContratoId;
private $PeriodoId;
//Propiedades
public function setContratoId($ContratoId_){ $this->ContratoId=$ContratoId_;}
public function getContratoId(){ return $this->ContratoId;}
public function setContratoNumero($ContratoNumero_){ $this->ContratoNumero=$ContratoNumero_;}
public function getContratoNumero(){ return $this->ContratoNumero;}
public function setContratoCantidadSacos($ContratoCantidadSacos_){ $this->ContratoCantidadSacos=$ContratoCantidadSacos_;}
public function getContratoCantidadSacos(){ return $this->ContratoCantidadSacos;}
public function setContratoKGxSaco($ContratoKGxSaco_){ $this->ContratoKGxSaco=$ContratoKGxSaco_;}
public function getContratoKGxSaco(){ return $this->ContratoKGxSaco;}
public function setContratoPuntajeDesde($ContratoPuntajeDesde_){ $this->ContratoPuntajeDesde=$ContratoPuntajeDesde_;}
public function getContratoPuntajeDesde(){ return $this->ContratoPuntajeDesde;}
public function setContratoPuntajeHasta($ContratoPuntajeHasta_){ $this->ContratoPuntajeHasta=$ContratoPuntajeHasta_;}
public function getContratoPuntajeHasta(){ return $this->ContratoPuntajeHasta;}
public function setContratoFecha($ContratoFecha_){ $this->ContratoFecha=$ContratoFecha_;}
public function getContratoFecha(){ return $this->ContratoFecha;}
public function setContratoFechaEmbarque($ContratoFechaEmbarque_){ $this->ContratoFechaEmbarque=$ContratoFechaEmbarque_;}
public function getContratoFechaEmbarque(){ return $this->ContratoFechaEmbarque;}
public function setContratoStatus($ContratoStatus_){ $this->ContratoStatus=$ContratoStatus_;}
public function getContratoStatus(){ return $this->ContratoStatus;}
public function setContratoPosicion($ContratoPosicion_){ $this->ContratoPosicion=$ContratoPosicion_;}
public function getContratoPosicion(){ return $this->ContratoPosicion;}
public function setContratoPrecioBolsa($ContratoPrecioBolsa_){ $this->ContratoPrecioBolsa=$ContratoPrecioBolsa_;}
public function getContratoPrecioBolsa(){ return $this->ContratoPrecioBolsa;}
public function setContratoNumeroFactura($ContratoNumeroFactura_){ $this->ContratoNumeroFactura=$ContratoNumeroFactura_;}
public function getContratoNumeroFactura(){ return $this->ContratoNumeroFactura;}
public function setContratoValorFod($ContratoValorFod_){ $this->ContratoValorFod=$ContratoValorFod_;}
public function getContratoValorFod(){ return $this->ContratoValorFod;}
public function setContratoPuertoEmbarque($ContratoPuertoEmbarque_){ $this->ContratoPuertoEmbarque=$ContratoPuertoEmbarque_;}
public function getContratoPuertoEmbarque(){ return $this->ContratoPuertoEmbarque;}
public function setContratoPuertoDestino($ContratoPuertoDestino_){ $this->ContratoPuertoDestino=$ContratoPuertoDestino_;}
public function getContratoPuertoDestino(){ return $this->ContratoPuertoDestino;}
public function setContratoHumedad($ContratoHumedad_){ $this->ContratoHumedad=$ContratoHumedad_;}
public function getContratoHumedad(){ return $this->ContratoHumedad;}
public function setContratoCantidadQuintales($ContratoCantidadQuintales_){ $this->ContratoCantidadQuintales=$ContratoCantidadQuintales_;}
public function getContratoCantidadQuintales(){ return $this->ContratoCantidadQuintales;}
public function setContratoToneladas($ContratoToneladas_){ $this->ContratoToneladas=$ContratoToneladas_;}
public function getContratoToneladas(){ return $this->ContratoToneladas;}
public function setContratoNotas($ContratoNotas_){ $this->ContratoNotas=$ContratoNotas_;}
public function getContratoNotas(){ return $this->ContratoNotas;}
public function setContratoEstado($ContratoEstado_){ $this->ContratoEstado=$ContratoEstado_;}
public function getContratoEstado(){ return $this->ContratoEstado;}
public function setClienteId($ClienteId_){ $this->ClienteId=$ClienteId_;}
public function getClienteId(){ return $this->ClienteId;}
public function setTipoContratoId($TipoContratoId_){ $this->TipoContratoId=$TipoContratoId_;}
public function getTipoContratoId(){ return $this->TipoContratoId;}
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}
//Métodos
//Método Insertar
public function Insertar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
	$consulta=" CALL sp_ContratoModalidad('$this->ContratoId','$this->ContratoNumero','$this->ContratoCantidadSacos','$this->ContratoKGxSaco','$this->ContratoPuntajeDesde','$this->ContratoPuntajeHasta','$this->ContratoFechaEmbarque','$this->ContratoStatus','$this->ContratoPosicion','$this->ContratoPrecioBolsa','$this->ContratoNumeroFactura','$this->ContratoValorFod','$this->ContratoPuertoEmbarque','$this->ContratoPuertoDestino','$this->ContratoHumedad','$this->ContratoNotas','$this->ClienteId','$this->TipoContratoId') ; ";
	//echo "Registrar: $consulta";
	$rpta=$con->MetodoReg_Output($consulta);
	
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_contrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select ContratoId As 'ContratoId',ContratoNumero As 'Numero',ContratoCantidadSacos As 'CantidadSacos',ContratoKGxSaco As 'KG x Saco',ContratoPuntajeDesde As 'Puntaje Desde',ContratoPuntajeHasta As 'Puntaje Hasta',ContratoFecha As 'Fecha',ContratoFechaEmbarque As 'Fecha Embarque',ContratoStatus As 'Status',ContratoPosicion As 'Posicion',ContratoPrecioBolsa As 'Precio Bolsa',ContratoNumeroFactura As 'NumeroFactura',ContratoValorFod As 'ValorFod',ContratoPuertoEmbarque As 'Puerto Embarque',ContratoPuertoDestino As 'Puerto Destino',ContratoHumedad As 'Humedad',ContratoCantidadQuintales As 'Cantidad Quintales',ContratoToneladas As 'Toneladas',ContratoNotas As 'Notas',ContratoEstado As 'Estado',ClienteId As 'ClienteId',TipoContratoId As 'TipoContratoId',PeriodoId As 'PeriodoId' from contrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_contrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from contrato where ContratoId='$this->ContratoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_contrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from contrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update contrato set ContratoEstado='E' where ContratoId='$this->ContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update contrato set estado='A' where ContratoId='$this->ContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();

	$consulta=" CALL sp_ContratoModalidad('$this->ContratoId','$this->ContratoNumero','$this->ContratoCantidadSacos','$this->ContratoKGxSaco','$this->ContratoPuntajeDesde','$this->ContratoPuntajeHasta','$this->ContratoFechaEmbarque','$this->ContratoStatus','$this->ContratoPosicion','$this->ContratoPrecioBolsa','$this->ContratoNumeroFactura','$this->ContratoValorFod','$this->ContratoPuertoEmbarque','$this->ContratoPuertoDestino','$this->ContratoHumedad','$this->ContratoNotas','$this->ClienteId','$this->TipoContratoId') ; ";
	//echo "Registrar: $consulta";
	$rpta=$con->MetodoReg_Output($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar con paramentos buscar mas ordenar
public function BuscarLike_contrato($ordernar=-1,$buscar="")    {
        $rpta = array();
        try {
            include_once 'conexion.php';
            $con= new Conexion();
			
			$parametros="";
			$buscarx="";
		
		if($buscar!=""){ 
			$buscarx="  AND ClienteNombre LIKE  '".$buscar."%'  OR ContratoNumero LIKE  '".$buscar."%'  ";
		}if($ordernar==-1){
			$ordernarx=" ORDER BY 1 DESC";
		}else{
			$arrayOrder=array("ASC","DESC");
			$AscDesc =rand(0,1);
			$ordernarx=" ORDER BY $ordernar ".$arrayOrder[$AscDesc];
			}
		$parametros=$buscarx." ".$ordernarx;

		$consulta = " SELECT ContratoId, ContratoNumero AS Codigo, ClienteNombre AS Cliente ,
		CONCAT(ContratoPuntajeDesde,' - ',ContratoPuntajeHasta) as 'Calificacion Catacion' ,
		 ContratoCantidadSacos AS Sacos ,ContratoKGxSaco AS 'Kg x Saco' ,
		 DATE_FORMAT(ContratoFechaEmbarque, '%d/%m/%y') AS 'Fecha Embarque' , ContratoCantidadQuintales AS Quintales
		 FROM contrato c INNER JOIN  cliente cl ON c.ClienteId=cl.ClienteId 
		 INNER JOIN tipocontrato tc ON tc.TipoContratoId=c.TipoContratoId WHERE ContratoEstado='I' 
		 AND PeriodoId=(Select PeriodoId FROM periodo WHERE PeriodoEstado='A') ".$parametros;
		  	
			
            $rpta= $con->Listar($consulta);
			
        }
        catch (exception $e) {
            $rpta = $e->getMessage();
        }
        return $rpta;
    }	

}
?>