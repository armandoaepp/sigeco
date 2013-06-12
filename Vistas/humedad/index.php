<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_humedad.php"; 
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
  $rpta=CRegistrar_humedad();
  $contenido="Registrar_humedad.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";break;
case "Actualizar":
  $rpta=CActualizar_humedad();
  $rptamo=CBuscar_humedad($_GET["id"]);
  $HumedadId=$rptamo["cuerpo"][0]["HumedadId"];
  $HumedadLibreTara=$rptamo["cuerpo"][0]["HumedadLibreTara"];
  $HumedadDescuentoHumedad=$rptamo["cuerpo"][0]["HumedadDescuentoHumedad"];
  $HumedadKgNetos=$rptamo["cuerpo"][0]["HumedadKgNetos"];
  $HumedadImporteBruto=$rptamo["cuerpo"][0]["HumedadImporteBruto"];
  $HumedadImporteDescuento=$rptamo["cuerpo"][0]["HumedadImporteDescuento"];
  $HumedadImporteTotal=$rptamo["cuerpo"][0]["HumedadImporteTotal"];
  $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
  $contenido="Actualizar_humedad.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
  $rpta=CEliminar_humedad();
  header("Location: ../humedad");
break;
case "Recuperar":
  $rpta=CRecuperar_humedad();
break;
case "Listar":
       $titulo="Listar humedad";
       $data=CListar_humedad();
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
      $Listar_humedad=$cix->ImprimeTableP("tablahumedad",$data,"?","?",10,$page,5,"tabla");
   // $Listar_humedad=$cix->ImprimeTablePOB("tablahumedad",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_humedad.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_humedad=CListadoSimple_humedad();
break;
case "Buscar":
 $rpta=CBuscar_humedad();
break;
case "Nuevo":
 $titulo= "Nuevo humedad";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_humedad.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_humedad($_GET["id"]);
 $HumedadId=$rptamo["cuerpo"][0]["HumedadId"];
 $HumedadLibreTara=$rptamo["cuerpo"][0]["HumedadLibreTara"];
 $HumedadDescuentoHumedad=$rptamo["cuerpo"][0]["HumedadDescuentoHumedad"];
 $HumedadKgNetos=$rptamo["cuerpo"][0]["HumedadKgNetos"];
 $HumedadImporteBruto=$rptamo["cuerpo"][0]["HumedadImporteBruto"];
 $HumedadImporteDescuento=$rptamo["cuerpo"][0]["HumedadImporteDescuento"];
 $HumedadImporteTotal=$rptamo["cuerpo"][0]["HumedadImporteTotal"];
 $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
 $titulo= "Actualizar humedad";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_humedad.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>