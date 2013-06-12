<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_acopiocontrato.php"; 
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
  $rpta=CRegistrar_acopiocontrato();
  $contenido="Registrar_acopiocontrato.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_acopiocontrato();
  $rptamo=CBuscar_acopiocontrato($_GET["id"]);
  $AcopioContratoId=$rptamo["cuerpo"][0]["AcopioContratoId"];
  $AcopioAsignado=$rptamo["cuerpo"][0]["AcopioAsignado"];
  $AcopioPorAsignar=$rptamo["cuerpo"][0]["AcopioPorAsignar"];
  $ContratoRequerido=$rptamo["cuerpo"][0]["ContratoRequerido"];
  $ContratoAsignado=$rptamo["cuerpo"][0]["ContratoAsignado"];
  $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
  $ContratoId=$rptamo["cuerpo"][0]["ContratoId"];
  $contenido="Actualizar_acopiocontrato.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_acopiocontrato();
  header("Location: ../acopiocontrato");
break;
case "Recuperar":
  $rpta=CRecuperar_acopiocontrato();
break;
case "Listar":
       $titulo="Listar acopiocontrato";
       $data=CListar_acopiocontrato();
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
      $Listar_acopiocontrato=$cix->ImprimeTableP("tablaacopiocontrato",$data,"?","?",10,$page,5,"tabla");
   // $Listar_acopiocontrato=$cix->ImprimeTablePOB("tablaacopiocontrato",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_acopiocontrato.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_acopiocontrato=CListadoSimple_acopiocontrato();
break;
case "Buscar":
 $rpta=CBuscar_acopiocontrato();
break;
case "Nuevo":
 $titulo= "Nuevo acopiocontrato";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_acopiocontrato.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_acopiocontrato($_GET["id"]);
 $AcopioContratoId=$rptamo["cuerpo"][0]["AcopioContratoId"];
 $AcopioAsignado=$rptamo["cuerpo"][0]["AcopioAsignado"];
 $AcopioPorAsignar=$rptamo["cuerpo"][0]["AcopioPorAsignar"];
 $ContratoRequerido=$rptamo["cuerpo"][0]["ContratoRequerido"];
 $ContratoAsignado=$rptamo["cuerpo"][0]["ContratoAsignado"];
 $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
 $ContratoId=$rptamo["cuerpo"][0]["ContratoId"];
 $titulo= "Actualizar acopiocontrato";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_acopiocontrato.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>