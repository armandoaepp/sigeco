<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_contrato.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
  $rpta=CRegistrar_contrato();
  $contenido="Registrar_contrato.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_contrato();
  $rptamo=CBuscar_contrato($_GET["id"]);
  $ContratoId=$rptamo["cuerpo"][0]["ContratoId"];
  $ContratoNumero=$rptamo["cuerpo"][0]["ContratoNumero"];
  $ContratoCantidadSacos=$rptamo["cuerpo"][0]["ContratoCantidadSacos"];
  $ContratoKGxSaco=$rptamo["cuerpo"][0]["ContratoKGxSaco"];
  $ContratoPuntajeDesde=$rptamo["cuerpo"][0]["ContratoPuntajeDesde"];
  $ContratoPuntajeHasta=$rptamo["cuerpo"][0]["ContratoPuntajeHasta"];
  $ContratoFecha=$rptamo["cuerpo"][0]["ContratoFecha"];
  $ContratoFechaEmbarque=$rptamo["cuerpo"][0]["ContratoFechaEmbarque"];
  $ContratoStatus=$rptamo["cuerpo"][0]["ContratoStatus"];
  $ContratoPosicion=$rptamo["cuerpo"][0]["ContratoPosicion"];
  $ContratoPrecioBolsa=$rptamo["cuerpo"][0]["ContratoPrecioBolsa"];
  $ContratoNumeroFactura=$rptamo["cuerpo"][0]["ContratoNumeroFactura"];
  $ContratoValorFod=$rptamo["cuerpo"][0]["ContratoValorFod"];
  $ContratoPuertoEmbarque=$rptamo["cuerpo"][0]["ContratoPuertoEmbarque"];
  $ContratoPuertoDestino=$rptamo["cuerpo"][0]["ContratoPuertoDestino"];
  $ContratoHumedad=$rptamo["cuerpo"][0]["ContratoHumedad"];
  $ContratoCantidadQuintales=$rptamo["cuerpo"][0]["ContratoCantidadQuintales"];
  $ContratoToneladas=$rptamo["cuerpo"][0]["ContratoToneladas"];
  $ContratoNotas=$rptamo["cuerpo"][0]["ContratoNotas"];
  $ContratoEstado=$rptamo["cuerpo"][0]["ContratoEstado"];
  $ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
  $TipoContratoId=$rptamo["cuerpo"][0]["TipoContratoId"];
  $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
  $contenido="Actualizar_contrato.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_contrato();
  header("Location: ../contrato");
break;
case "Recuperar":
  $rpta=CRecuperar_contrato();
break;
case "Listar":
       $titulo="Listar contrato";
       $data=CListar_contrato();
       if(isset($_GET["pagina"])){
           $page=$_GET["pagina"];}
         else{$page=1;}
/*
      //para Ordenar Datos 
       if(isset($_GET["orden"])) {
          $orden=$_GET["orden"];
          }else{  $orden=-1;}// no ordenar po defecto
     //para Buscar Datos 
        if(isset($_POST["busca"])){ //viene del frm 
              $busca=$_POST["busca"];
         }else if(isset($_GET["busca"])){// viene de la pagina o del ordenar
              $busca=$_GET["busca"];
         }else{
         $busca=""; }
*/
      $Listar_contrato=$cix->ImprimeTableP("tablacontrato",$data,"?","?",10,$page,5,"tabla");
   // $Listar_contrato=$cix->ImprimeTablePOB("tablacontrato",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_contrato.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_contrato=CListadoSimple_contrato();
break;
case "Buscar":
 $rpta=CBuscar_contrato();
break;
case "Nuevo":
 $titulo= "Nuevo contrato";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_contrato.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_contrato($_GET["id"]);
 $ContratoId=$rptamo["cuerpo"][0]["ContratoId"];
 $ContratoNumero=$rptamo["cuerpo"][0]["ContratoNumero"];
 $ContratoCantidadSacos=$rptamo["cuerpo"][0]["ContratoCantidadSacos"];
 $ContratoKGxSaco=$rptamo["cuerpo"][0]["ContratoKGxSaco"];
 $ContratoPuntajeDesde=$rptamo["cuerpo"][0]["ContratoPuntajeDesde"];
 $ContratoPuntajeHasta=$rptamo["cuerpo"][0]["ContratoPuntajeHasta"];
 $ContratoFecha=$rptamo["cuerpo"][0]["ContratoFecha"];
 $ContratoFechaEmbarque=$rptamo["cuerpo"][0]["ContratoFechaEmbarque"];
 $ContratoStatus=$rptamo["cuerpo"][0]["ContratoStatus"];
 $ContratoPosicion=$rptamo["cuerpo"][0]["ContratoPosicion"];
 $ContratoPrecioBolsa=$rptamo["cuerpo"][0]["ContratoPrecioBolsa"];
 $ContratoNumeroFactura=$rptamo["cuerpo"][0]["ContratoNumeroFactura"];
 $ContratoValorFod=$rptamo["cuerpo"][0]["ContratoValorFod"];
 $ContratoPuertoEmbarque=$rptamo["cuerpo"][0]["ContratoPuertoEmbarque"];
 $ContratoPuertoDestino=$rptamo["cuerpo"][0]["ContratoPuertoDestino"];
 $ContratoHumedad=$rptamo["cuerpo"][0]["ContratoHumedad"];
 $ContratoCantidadQuintales=$rptamo["cuerpo"][0]["ContratoCantidadQuintales"];
 $ContratoToneladas=$rptamo["cuerpo"][0]["ContratoToneladas"];
 $ContratoNotas=$rptamo["cuerpo"][0]["ContratoNotas"];
 $ContratoEstado=$rptamo["cuerpo"][0]["ContratoEstado"];
 $ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
 $TipoContratoId=$rptamo["cuerpo"][0]["TipoContratoId"];
 $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
 $titulo= "Actualizar contrato";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_contrato.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>