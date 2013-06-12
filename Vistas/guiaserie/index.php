<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_guiaserie.php"; 
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
  $rpta=CRegistrar_guiaserie();
  $contenido="Registrar_guiaserie.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_guiaserie();
  $rptamo=CBuscar_guiaserie($_GET["id"]);
  $GuiaSerieId=$rptamo["cuerpo"][0]["GuiaSerieId"];
  $GuiaSerieNumero=$rptamo["cuerpo"][0]["GuiaSerieNumero"];
  $GuiaSerieEstado=$rptamo["cuerpo"][0]["GuiaSerieEstado"];
  $SerieId=$rptamo["cuerpo"][0]["SerieId"];
  $contenido="Actualizar_guiaserie.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_guiaserie();
  header("Location: ../guiaserie");
break;
case "Recuperar":
  $rpta=CRecuperar_guiaserie();
break;
case "Listar":
       $titulo="Listar guiaserie";
       $data=CListar_guiaserie();
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
      $Listar_guiaserie=$cix->ImprimeTableP("tablaguiaserie",$data,"?","?",10,$page,5,"tabla");
   // $Listar_guiaserie=$cix->ImprimeTablePOB("tablaguiaserie",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_guiaserie.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_guiaserie=CListadoSimple_guiaserie();
break;
case "Buscar":
 $rpta=CBuscar_guiaserie();
break;
case "Nuevo":
 $titulo= "Nuevo guiaserie";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_guiaserie.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_guiaserie($_GET["id"]);
 $GuiaSerieId=$rptamo["cuerpo"][0]["GuiaSerieId"];
 $GuiaSerieNumero=$rptamo["cuerpo"][0]["GuiaSerieNumero"];
 $GuiaSerieEstado=$rptamo["cuerpo"][0]["GuiaSerieEstado"];
 $SerieId=$rptamo["cuerpo"][0]["SerieId"];
 $titulo= "Actualizar guiaserie";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_guiaserie.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>