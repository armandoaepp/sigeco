<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_contrato.php";
include_once "../cixajax.php";
$cix=new CixAJAX();
include_once "../fecha.php";

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
   echo $rpta ; 
break;
case "Actualizar":
  $rpta=CActualizar_contrato();
  echo $rpta;
break;
case "Eliminar":
  $rpta=CEliminar_contrato();
// if($rpta==0)$rpta="Registro Eliminado Correctamente";
	echo $rpta;
break;
case "Recuperar":
  $rpta=CRecuperar_contrato();
break;
case "Listar":
       $titulo="Listar contrato";     
       if(isset($_GET["pagina"])){
           $page=$_GET["pagina"];}
         else{$page=1;}
      //para Ordenar Datos 
       if(isset($_GET["orden"])) {
          $orden=$_GET["orden"];
          }else{  $orden=-1;}// no ordenar po defecto
     //para Buscar Datos 
        if(isset($_POST["busca"])){ //viene del frm 
              $busca=$_POST["busca"];
         }else if(isset($_GET["busca"])){// viene de la pagina o del ordenar
              $busca=$_GET["busca"];
         }else{ $busca=""; }
     $data=CBuscarLike_contrato($orden,$busca);	
     $Listar_contrato=$cix->ImprimeTablePOB("tablacontrato",$data,"","Eliminar",20,$page,10,$orden,$busca,"tabla","contrato_detalle.php");
     echo $Listar_contrato;
	
break;
case "Listarsimple":
 $Listarsimple_contrato=CListadoSimple_contrato();
break;
case "Buscar":
 $rpta=CBuscar_contrato();
break;
case "Nuevo":
 $ContratoFechaEmbarque= date('Y-m-d');
 $accionf="";
 $contenido="Registrar_contrato.php";
 include_once($contenido);
break;
case "Mactualizar":
 $rptamo=CBuscar_contrato($_GET["id"]);
 $accionf="";
 $ContratoId=$rptamo["cuerpo"][0]["ContratoId"];
 $ContratoNumero=$rptamo["cuerpo"][0]["ContratoNumero"];
 $ContratoCantidadSacos=$rptamo["cuerpo"][0]["ContratoCantidadSacos"];
 $ContratoKGxSaco=$rptamo["cuerpo"][0]["ContratoKGxSaco"];
 $ContratoPuntajeDesde=$rptamo["cuerpo"][0]["ContratoPuntajeDesde"];
 $ContratoPuntajeHasta=$rptamo["cuerpo"][0]["ContratoPuntajeHasta"];
 $ContratoFecha=fechaFormatoPeru($rptamo["cuerpo"][0]["ContratoFecha"]);
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
 //$PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
// $titulo= "Actualizar contrato";
 //$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_contrato.php";
 include_once($contenido);
break;
}
ob_flush();
?>