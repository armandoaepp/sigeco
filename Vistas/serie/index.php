<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_serie.php"; 
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
  $rpta=CRegistrar_serie();
  $contenido="Registrar_serie.php";
  $accionf= "?accion=Registrar";
  require_once "../m_mantenimiento/layout.php";break;
case "Actualizar":
  $rpta=CActualizar_serie();
  $rptamo=CBuscar_serie($_GET["id"]);
  $SerieId=$rptamo["cuerpo"][0]["SerieId"];
  $SerieNumero=$rptamo["cuerpo"][0]["SerieNumero"];
  $SerieInicio=$rptamo["cuerpo"][0]["SerieInicio"];
  $SerieFin=$rptamo["cuerpo"][0]["SerieFin"];
  $SerieFechaReg=$rptamo["cuerpo"][0]["SerieFechaReg"];
  $SerieEstado=$rptamo["cuerpo"][0]["SerieEstado"];
  $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
  $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
  $contenido="Actualizar_serie.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../m_mantenimiento/layout.php";break;
case "Eliminar":
  $rpta=CEliminar_serie();
  header("Location: ../serie");
break;
case "Recuperar":
  $rpta=CRecuperar_serie();
break;
case "Listar":
       $titulo="Listar serie";
       $data=CListar_serie();
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
      $Listar_serie=$cix->ImprimeTableP("tablaserie",$data,"","?",10,$page,5,"tabla");
   // $Listar_serie=$cix->ImprimeTablePOB("tablaserie",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_serie.php";
      require_once "../m_mantenimiento/layout.php";
break;
case "Listarsimple":
 $Listarsimple_serie=CListadoSimple_serie();
break;
case "Buscar":
 $rpta=CBuscar_serie();
break;
case "Nuevo":
 $titulo= "Nuevo serie";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_serie.php";
 require_once "../m_mantenimiento/layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_serie($_GET["id"]);
 $SerieId=$rptamo["cuerpo"][0]["SerieId"];
 $SerieNumero=$rptamo["cuerpo"][0]["SerieNumero"];
 $SerieInicio=$rptamo["cuerpo"][0]["SerieInicio"];
 $SerieFin=$rptamo["cuerpo"][0]["SerieFin"];
 $SerieFechaReg=$rptamo["cuerpo"][0]["SerieFechaReg"];
 $SerieEstado=$rptamo["cuerpo"][0]["SerieEstado"];
 $UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
 $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
 $titulo= "Actualizar serie";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_serie.php";
 require_once "../m_mantenimiento/layout.php";
break;
}
ob_flush();
?>