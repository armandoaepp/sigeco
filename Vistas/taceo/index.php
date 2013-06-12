<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_taceo.php"; 
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
  $rpta=CRegistrar_taceo();
  $contenido="Registrar_taceo.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_taceo();
  $rptamo=CBuscar_taceo($_GET["id"]);
  $TaceoId=$rptamo["cuerpo"][0]["TaceoId"];
  $TaceoFraganciaAroma=$rptamo["cuerpo"][0]["TaceoFraganciaAroma"];
  $TaceoSaborResidual=$rptamo["cuerpo"][0]["TaceoSaborResidual"];
  $TaceoAcidez=$rptamo["cuerpo"][0]["TaceoAcidez"];
  $TaceoCuerpo=$rptamo["cuerpo"][0]["TaceoCuerpo"];
  $TaceoBalance=$rptamo["cuerpo"][0]["TaceoBalance"];
  $TaceoDulsor=$rptamo["cuerpo"][0]["TaceoDulsor"];
  $TaceoUniformidad=$rptamo["cuerpo"][0]["TaceoUniformidad"];
  $TaceoTazaLimpia=$rptamo["cuerpo"][0]["TaceoTazaLimpia"];
  $TaceoPuntajeCatador=$rptamo["cuerpo"][0]["TaceoPuntajeCatador"];
  $TaceoDefectos=$rptamo["cuerpo"][0]["TaceoDefectos"];
  $TaceoNumeroTazas=$rptamo["cuerpo"][0]["TaceoNumeroTazas"];
  $TaceoNotas=$rptamo["cuerpo"][0]["TaceoNotas"];
  $TaceoCatadopor=$rptamo["cuerpo"][0]["TaceoCatadopor"];
  $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
  $contenido="Actualizar_taceo.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_taceo();
  header("Location: ../taceo");
break;
case "Recuperar":
  $rpta=CRecuperar_taceo();
break;
case "Listar":
       $titulo="Listar taceo";
       $data=CListar_taceo();
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
      $Listar_taceo=$cix->ImprimeTableP("tablataceo",$data,"?","?",10,$page,5,"tabla");
   // $Listar_taceo=$cix->ImprimeTablePOB("tablataceo",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_taceo.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_taceo=CListadoSimple_taceo();
break;
case "Buscar":
 $rpta=CBuscar_taceo();
break;
case "Nuevo":
 $titulo= "Nuevo taceo";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_taceo.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_taceo($_GET["id"]);
 $TaceoId=$rptamo["cuerpo"][0]["TaceoId"];
 $TaceoFraganciaAroma=$rptamo["cuerpo"][0]["TaceoFraganciaAroma"];
 $TaceoSaborResidual=$rptamo["cuerpo"][0]["TaceoSaborResidual"];
 $TaceoAcidez=$rptamo["cuerpo"][0]["TaceoAcidez"];
 $TaceoCuerpo=$rptamo["cuerpo"][0]["TaceoCuerpo"];
 $TaceoBalance=$rptamo["cuerpo"][0]["TaceoBalance"];
 $TaceoDulsor=$rptamo["cuerpo"][0]["TaceoDulsor"];
 $TaceoUniformidad=$rptamo["cuerpo"][0]["TaceoUniformidad"];
 $TaceoTazaLimpia=$rptamo["cuerpo"][0]["TaceoTazaLimpia"];
 $TaceoPuntajeCatador=$rptamo["cuerpo"][0]["TaceoPuntajeCatador"];
 $TaceoDefectos=$rptamo["cuerpo"][0]["TaceoDefectos"];
 $TaceoNumeroTazas=$rptamo["cuerpo"][0]["TaceoNumeroTazas"];
 $TaceoNotas=$rptamo["cuerpo"][0]["TaceoNotas"];
 $TaceoCatadopor=$rptamo["cuerpo"][0]["TaceoCatadopor"];
 $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
 $titulo= "Actualizar taceo";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_taceo.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>