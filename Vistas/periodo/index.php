<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_periodo.php"; 
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
  $rpta=CRegistrar_periodo();
  $contenido="Registrar_periodo.php";
  $accionf= "?accion=Registrar";
  require_once "../m_mantenimiento/layout.php";break;
case "Actualizar":
  $rpta=CActualizar_periodo();
  $rptamo=CBuscar_periodo($_GET["id"]);
  $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
  $PeriodoAño=$rptamo["cuerpo"][0]["PeriodoAño"];
  $PeriodoFechaInicio=$rptamo["cuerpo"][0]["PeriodoFechaInicio"];
  $PeriodoFechaCierre=$rptamo["cuerpo"][0]["PeriodoFechaCierre"];
  $PeriodoEstado=$rptamo["cuerpo"][0]["PeriodoEstado"];
  $contenido="Actualizar_periodo.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../m_mantenimiento/layout.php";break;
case "Eliminar":
  $rpta=CEliminar_periodo();
  header("Location: ../periodo");
break;
case "Recuperar":
  $rpta=CRecuperar_periodo();
break;
case "Listar":
       $titulo="Listar periodo";
       $data=CListar_periodo();
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
      $Listar_periodo=$cix->ImprimeTableP("tablaperiodo",$data,"?","?",10,$page,5,"tabla");
   // $Listar_periodo=$cix->ImprimeTablePOB("tablaperiodo",$data,"?","?",10,$page,5,$orden,$buscar,"tabla");
     $contenido="Listar_periodo.php";
      require_once "../m_mantenimiento/layout.php";
break;
case "Listarsimple":
 $Listarsimple_periodo=CListadoSimple_periodo();
break;
case "Buscar":
 $rpta=CBuscar_periodo();
break;
case "Nuevo":
 $titulo= "Nuevo periodo";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_periodo.php";
 require_once "../m_mantenimiento/layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_periodo($_GET["id"]);
 $PeriodoId=$rptamo["cuerpo"][0]["PeriodoId"];
 $PeriodoAño=$rptamo["cuerpo"][0]["PeriodoAño"];
 $PeriodoFechaInicio=$rptamo["cuerpo"][0]["PeriodoFechaInicio"];
 $PeriodoFechaCierre=$rptamo["cuerpo"][0]["PeriodoFechaCierre"];
 $PeriodoEstado=$rptamo["cuerpo"][0]["PeriodoEstado"];
 $titulo= "Actualizar periodo";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_periodo.php";
 require_once "../m_mantenimiento/layout.php";
break;
}
ob_flush();
?>