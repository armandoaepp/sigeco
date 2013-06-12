<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_tipocontrato.php"; 
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
  $rpta=CRegistrar_tipocontrato();
  $contenido="Registrar_tipocontrato.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_tipocontrato();
  $rptamo=CBuscar_tipocontrato($_GET["id"]);
  $TipoContratoId=$rptamo["cuerpo"][0]["TipoContratoId"];
  $TipoContrato=$rptamo["cuerpo"][0]["TipoContrato"];
  $TipoContratoEstado=$rptamo["cuerpo"][0]["TipoContratoEstado"];
  $contenido="Actualizar_tipocontrato.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_tipocontrato();
  header("Location: ../tipocontrato");
break;
case "Recuperar":
  $rpta=CRecuperar_tipocontrato();
break;
case "Listar":
       $titulo="Listar tipocontrato";
       $data=CListar_tipocontrato();
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
      $Listar_tipocontrato=$cix->ImprimeTableP("tablatipocontrato",$data,"?","?",10,$page,5,"tabla");
   // $Listar_tipocontrato=$cix->ImprimeTablePOB("tablatipocontrato",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_tipocontrato.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_tipocontrato=CListadoSimple_tipocontrato();
break;
case "Buscar":
 $rpta=CBuscar_tipocontrato();
break;
case "Nuevo":
 $titulo= "Nuevo tipocontrato";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_tipocontrato.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_tipocontrato($_GET["id"]);
 $TipoContratoId=$rptamo["cuerpo"][0]["TipoContratoId"];
 $TipoContrato=$rptamo["cuerpo"][0]["TipoContrato"];
 $TipoContratoEstado=$rptamo["cuerpo"][0]["TipoContratoEstado"];
 $titulo= "Actualizar tipocontrato";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_tipocontrato.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>