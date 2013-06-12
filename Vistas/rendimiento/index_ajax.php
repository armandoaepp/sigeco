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
  echo $rpta ; 
break;
case "Actualizar":
  $rpta=CActualizar_rendimiento();
  echo $rpta ; 
break;
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
case "frmRendimineto":
	$dataRendimiento=CBuscar_Acopio_rendimiento($_GET["idAcopio"]);
	if(count($dataRendimiento["cuerpo"])>0){		 
	  $RendimientoId=$dataRendimiento["cuerpo"][0]["RendimientoId"];
	  $RendimientoMuestra=$dataRendimiento["cuerpo"][0]["RendimientoMuestra"];
	  $RendimientoCafePilado=$dataRendimiento["cuerpo"][0]["RendimientoCafePilado"];
	  $RendimientoCafeDescarte=$dataRendimiento["cuerpo"][0]["RendimientoCafeDescarte"];
	  $RendimientoCascara=$dataRendimiento["cuerpo"][0]["RendimientoCascara"];
	  $RendimientoExportable=$dataRendimiento["cuerpo"][0]["RendimientoExportable"];
	  $RendimientoTotal=$dataRendimiento["cuerpo"][0]["RendimientoTotal"];
	  $RendimientoPorcentaje=$dataRendimiento["cuerpo"][0]["RendimientoPorcentaje"];
	 // $AcopioId=$dataRendimiento["cuerpo"][0]["AcopioId"];
	 $frmModalidadR="frmActualizar_rendimiento";
	 $ModalidadR="Cálculo Rendimiento: Actualizar";
	 $tipoModalidad="Actualizar";// valor button
	}else{
	 $frmModalidadR="frmRegistrar_rendimiento";
	 $ModalidadR="Cálculo Rendimiento: Nuevo";
	 $tipoModalidad="Registrar";// valor button
	 $RendimientoId="";
	  $RendimientoMuestra="";
	  $RendimientoCafePilado="";
	  $RendimientoCafeDescarte="";
	  $RendimientoCascara="";
	  $RendimientoExportable="";
	  $RendimientoTotal="";
	  $RendimientoPorcentaje="";	   
	} 
	$AcopioId=$_GET["idAcopio"];
	$accionf="";
	$contenido="Registrar_rendimiento.php";
	include_once($contenido); ;
 
break;
}
ob_flush();
?>