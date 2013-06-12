<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_guiaacopio.php"; 
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
  $rpta=CRegistrar_guiaacopio();
  $contenido="Registrar_guiaacopio.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_guiaacopio();
  $rptamo=CBuscar_guiaacopio($_GET["id"]);
  $GuiaAcopioId=$rptamo["cuerpo"][0]["GuiaAcopioId"];
  $GuiaAcopioNumero=$rptamo["cuerpo"][0]["GuiaAcopioNumero"];
  $GuiaAcopioEstado=$rptamo["cuerpo"][0]["GuiaAcopioEstado"];
  $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
  $GuiaSerieId=$rptamo["cuerpo"][0]["GuiaSerieId"];
  $contenido="Actualizar_guiaacopio.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_guiaacopio();
  header("Location: ../guiaacopio");
break;
case "Recuperar":
  $rpta=CRecuperar_guiaacopio();
break;
case "Listar":
       $titulo="Listar guiaacopio";
       $data=CListar_guiaacopio();
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
      $Listar_guiaacopio=$cix->ImprimeTableP("tablaguiaacopio",$data,"?","?",10,$page,5,"tabla");
   // $Listar_guiaacopio=$cix->ImprimeTablePOB("tablaguiaacopio",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_guiaacopio.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_guiaacopio=CListadoSimple_guiaacopio();
break;
case "Buscar":
 $rpta=CBuscar_guiaacopio();
break;
case "Nuevo":
 $titulo= "Nuevo guiaacopio";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_guiaacopio.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_guiaacopio($_GET["id"]);
 $GuiaAcopioId=$rptamo["cuerpo"][0]["GuiaAcopioId"];
 $GuiaAcopioNumero=$rptamo["cuerpo"][0]["GuiaAcopioNumero"];
 $GuiaAcopioEstado=$rptamo["cuerpo"][0]["GuiaAcopioEstado"];
 $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
 $GuiaSerieId=$rptamo["cuerpo"][0]["GuiaSerieId"];
 $titulo= "Actualizar guiaacopio";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_guiaacopio.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>