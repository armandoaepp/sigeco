<?php 
/* Clase Generada desde Cix-PHP - Creado por M@HUS@MI */
class Clase_proceso{
//Constructor
public function Clase_proceso(){}
//Atributos
private $ProcesoId;
private $ProcesoDespulpadora;
private $ProcesoTanqueTina;
private $ProcesoCompostera;
private $ProcesoTiempoRecoleccion;
private $ProcesoTiempoFermentacion;
private $ProcesoTipoFermentacion;
private $ProcesoNumeroLavado;
private $ProcesoTipoSecado;
private $ProcesoTiempoSecado;
private $ProcesoDescripcion;
private $TipoSeleccionId;
private $TipoSecadoId;
private $ProcesoPozoInorganico;
private $ProcesoPozoMiel;
private $UnidadProductivaId;
/*
`ProcesoId` ,
`ProcesoDespulpadora` ,
`ProcesoTanqueTina` ,

`ProcesoCompostera` ,
`ProcesoTiempoRecoleccion` ,
`ProcesoTiempoFermentacion` 

`ProcesoTipoFermentacion` ,
`ProcesoNumeroLavado` ,
`ProcesoTiempoSecado` ,

`ProcesoDescripcion` ,
`TipoSeleccionId` ,
`TipoSecadoId` ,

`ProcesoPozoInorganico` ,
`ProcesoPozoMiel` ,
`UnidadProductivaId`


*/
//Propiedades
public function setProcesoId($ProcesoId_){ $this->ProcesoId=$ProcesoId_;}
public function getProcesoId(){ return $this->ProcesoId;}
public function setProcesoDespulpadora($ProcesoDespulpadora_){ $this->ProcesoDespulpadora=$ProcesoDespulpadora_;}
public function getProcesoDespulpadora(){ return $this->ProcesoDespulpadora;}
public function setProcesoTanqueTina($ProcesoTanqueTina_){ $this->ProcesoTanqueTina=$ProcesoTanqueTina_;}
public function getProcesoTanqueTina(){ return $this->ProcesoTanqueTina;}
public function setProcesoCompostera($ProcesoCompostera_){ $this->ProcesoCompostera=$ProcesoCompostera_;}
public function getProcesoCompostera(){ return $this->ProcesoCompostera;}
public function setProcesoTiempoRecoleccion($ProcesoTiempoRecoleccion_){ $this->ProcesoTiempoRecoleccion=$ProcesoTiempoRecoleccion_;}
public function getProcesoTiempoRecoleccion(){ return $this->ProcesoTiempoRecoleccion;}
public function setProcesoTiempoFermentacion($ProcesoTiempoFermentacion_){ $this->ProcesoTiempoFermentacion=$ProcesoTiempoFermentacion_;}
public function getProcesoTiempoFermentacion(){ return $this->ProcesoTiempoFermentacion;}
public function setProcesoTipoFermentacion($ProcesoTipoFermentacion_){ $this->ProcesoTipoFermentacion=$ProcesoTipoFermentacion_;}
public function getProcesoTipoFermentacion(){ return $this->ProcesoTipoFermentacion;}
public function setProcesoNumeroLavado($ProcesoNumeroLavado_){ $this->ProcesoNumeroLavado=$ProcesoNumeroLavado_;}
public function getProcesoNumeroLavado(){ return $this->ProcesoNumeroLavado;}
public function setProcesoTipoSecado($ProcesoTipoSecado_){ $this->ProcesoTipoSecado=$ProcesoTipoSecado_;}
public function getProcesoTipoSecado(){ return $this->ProcesoTipoSecado;}
public function setProcesoTiempoSecado($ProcesoTiempoSecado_){ $this->ProcesoTiempoSecado=$ProcesoTiempoSecado_;}
public function getProcesoTiempoSecado(){ return $this->ProcesoTiempoSecado;}
public function setProcesoDescripcion($ProcesoDescripcion_){ $this->ProcesoDescripcion=$ProcesoDescripcion_;}
public function getProcesoDescripcion(){ return $this->ProcesoDescripcion;}
public function setTipoSeleccionId($TipoSeleccionId_){ $this->TipoSeleccionId=$TipoSeleccionId_;}
public function getTipoSeleccionId(){ return $this->TipoSeleccionId;}
public function setTipoSecadoId($TipoSecadoId_){ $this->TipoSecadoId=$TipoSecadoId_;}
public function getTipoSecadoId(){ return $this->TipoSecadoId;}
public function setProcesoPozoInorganico($ProcesoPozoInorganico_){ $this->ProcesoPozoInorganico=$ProcesoPozoInorganico_;}
public function getProcesoPozoInorganico(){ return $this->ProcesoPozoInorganico;}
public function setProcesoPozoMiel($ProcesoPozoMiel_){ $this->ProcesoPozoMiel=$ProcesoPozoMiel_;}
public function getProcesoPozoMiel(){ return $this->ProcesoPozoMiel;}
public function setUnidadProductivaId($UnidadProductivaId_){ $this->UnidadProductivaId=$UnidadProductivaId_;}
public function getUnidadProductivaId(){ return $this->UnidadProductivaId;}
//Métodos
//Método Insertar
public function Insertar_proceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
/*
`ProcesoId` ,
`ProcesoDespulpadora` ,
`ProcesoTanqueTina` ,

`ProcesoCompostera` ,
`ProcesoTiempoRecoleccion` ,
`ProcesoTiempoFermentacion` ,

`ProcesoTipoFermentacion` ,
`ProcesoNumeroLavado` ,
`ProcesoTiempoSecado` ,

`ProcesoDescripcion` ,
`TipoSeleccionId` ,
`TipoSecadoId` ,
`ProcesoPozoInorganico` ,
`ProcesoPozoMiel` ,
`UnidadProductivaId`

*/
$consulta="Insert into proceso values(
'$this->ProcesoId','$this->ProcesoDespulpadora','$this->ProcesoTanqueTina',
'$this->ProcesoCompostera','$this->ProcesoTiempoRecoleccion','$this->ProcesoTiempoFermentacion',
'$this->ProcesoTipoFermentacion','$this->ProcesoNumeroLavado','$this->ProcesoTipoSecado',
'$this->ProcesoTiempoSecado','$this->ProcesoDescripcion','$this->TipoSeleccionId',
'$this->TipoSecadoId','$this->ProcesoPozoInorganico','$this->ProcesoPozoMiel',
'$this->UnidadProductivaId')";
echo "consulta:: $consulta";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_proceso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select proceso.ProcesoId As 'ProcesoId',proceso.ProcesoDespulpadora As 'ProcesoDespulpadora',proceso.ProcesoTanqueTina As 'ProcesoTanqueTina',proceso.ProcesoCompostera As 'ProcesoCompostera',proceso.ProcesoTiempoRecoleccion As 'ProcesoTiempoRecoleccion',proceso.ProcesoTiempoFermentacion As 'ProcesoTiempoFermentacion',proceso.ProcesoTipoFermentacion As 'ProcesoTipoFermentacion',proceso.ProcesoNumeroLavado As 'ProcesoNumeroLavado',proceso.ProcesoTipoSecado As 'ProcesoTipoSecado',proceso.ProcesoTiempoSecado As 'ProcesoTiempoSecado',proceso.ProcesoDescripcion As 'ProcesoDescripcion',proceso.TipoSeleccionId As 'TipoSeleccionId',proceso.TipoSecadoId As 'TipoSecadoId',proceso.ProcesoPozoInorganico As 'ProcesoPozoInorganico',proceso.ProcesoPozoMiel As 'ProcesoPozoMiel',proceso.UnidadProductivaId As 'UnidadProductivaId' from proceso";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_proceso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from proceso where ProcesoId='$this->ProcesoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_proceso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from proceso";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_proceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update proceso set estado='E' where ProcesoId='$this->ProcesoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_proceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update proceso set estado='A' where ProcesoId='$this->ProcesoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_proceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update proceso set ProcesoDespulpadora='$this->ProcesoDespulpadora',ProcesoTanqueTina='$this->ProcesoTanqueTina',ProcesoCompostera='$this->ProcesoCompostera',ProcesoTiempoRecoleccion='$this->ProcesoTiempoRecoleccion',ProcesoTiempoFermentacion='$this->ProcesoTiempoFermentacion',ProcesoTipoFermentacion='$this->ProcesoTipoFermentacion',ProcesoNumeroLavado='$this->ProcesoNumeroLavado',ProcesoTipoSecado='$this->ProcesoTipoSecado',ProcesoTiempoSecado='$this->ProcesoTiempoSecado',ProcesoDescripcion='$this->ProcesoDescripcion',TipoSeleccionId='$this->TipoSeleccionId',TipoSecadoId='$this->TipoSecadoId',ProcesoPozoInorganico='$this->ProcesoPozoInorganico',ProcesoPozoMiel='$this->ProcesoPozoMiel',UnidadProductivaId='$this->UnidadProductivaId' where ProcesoId='$this->ProcesoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>