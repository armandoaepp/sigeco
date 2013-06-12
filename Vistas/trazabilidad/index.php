<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_trazabilidad.php"; 
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
  $rpta=CRegistrar_trazabilidad();
  $contenido="Registrar_trazabilidad.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_trazabilidad();
  $rptamo=CBuscar_trazabilidad($_GET["id"]);
  $TrazabilidadId=$rptamo["cuerpo"][0]["TrazabilidadId"];  
  $ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
  $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
  $contenido="Actualizar_trazabilidad.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_trazabilidad();
  header("Location: ../trazabilidad");
break;
case "Recuperar":
  $rpta=CRecuperar_trazabilidad();
break;
case "Listar":
       $titulo="Listar trazabilidad";
       $data=CListar_trazabilidad();
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
      $Listar_trazabilidad=$cix->ImprimeTableP("tablatrazabilidad",$data,"?","?",10,$page,5,"tabla");
   // $Listar_trazabilidad=$cix->ImprimeTablePOB("tablatrazabilidad",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_trazabilidad.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_trazabilidad=CListadoSimple_trazabilidad();
break;
case "Buscar":
 $rpta=CBuscar_trazabilidad();
break;
case "Nuevo":
 $titulo= "Nuevo trazabilidad";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_trazabilidad.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_trazabilidad($_GET["id"]);
 $TrazabilidadId=$rptamo["cuerpo"][0]["TrazabilidadId"];

 $ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
 $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
 $titulo= "Actualizar trazabilidad";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_trazabilidad.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>