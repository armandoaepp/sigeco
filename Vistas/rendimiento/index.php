<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_rendimiento.php"; 
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
  $rpta=CRegistrar_rendimiento();
  $contenido="Registrar_rendimiento.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_rendimiento();
  $rptamo=CBuscar_rendimiento($_GET["id"]);
  $RendimientoId=$rptamo["cuerpo"][0]["RendimientoId"];
  $RendimientoMuestra=$rptamo["cuerpo"][0]["RendimientoMuestra"];
  $RendimientoCafePilado=$rptamo["cuerpo"][0]["RendimientoCafePilado"];
  $RendimientoCafeDescarte=$rptamo["cuerpo"][0]["RendimientoCafeDescarte"];
  $RendimientoCascara=$rptamo["cuerpo"][0]["RendimientoCascara"];
  $RendimientoExportable=$rptamo["cuerpo"][0]["RendimientoExportable"];
  $RendimientoTotal=$rptamo["cuerpo"][0]["RendimientoTotal"];
  $RendimientoPorcentaje=$rptamo["cuerpo"][0]["RendimientoPorcentaje"];
  $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
  $contenido="Actualizar_rendimiento.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_rendimiento();
  header("Location: ../rendimiento");
break;
case "Recuperar":
  $rpta=CRecuperar_rendimiento();
break;
case "Listar":
       $titulo="Listar rendimiento";
       $data=CListar_rendimiento();
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
      $Listar_rendimiento=$cix->ImprimeTableP("tablarendimiento",$data,"?","?",10,$page,5,"tabla");
   // $Listar_rendimiento=$cix->ImprimeTablePOB("tablarendimiento",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_rendimiento.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_rendimiento=CListadoSimple_rendimiento();
break;
case "Buscar":
 $rpta=CBuscar_rendimiento();
break;
case "Nuevo":
 $titulo= "Nuevo rendimiento";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_rendimiento.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_rendimiento($_GET["id"]);
 $RendimientoId=$rptamo["cuerpo"][0]["RendimientoId"];
 $RendimientoMuestra=$rptamo["cuerpo"][0]["RendimientoMuestra"];
 $RendimientoCafePilado=$rptamo["cuerpo"][0]["RendimientoCafePilado"];
 $RendimientoCafeDescarte=$rptamo["cuerpo"][0]["RendimientoCafeDescarte"];
 $RendimientoCascara=$rptamo["cuerpo"][0]["RendimientoCascara"];
 $RendimientoExportable=$rptamo["cuerpo"][0]["RendimientoExportable"];
 $RendimientoTotal=$rptamo["cuerpo"][0]["RendimientoTotal"];
 $RendimientoPorcentaje=$rptamo["cuerpo"][0]["RendimientoPorcentaje"];
 $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
 $titulo= "Actualizar rendimiento";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_rendimiento.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>