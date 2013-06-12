<?php 
ob_start();
//Armando Enrique Pisfil Puemape 
include_once "./Controlador_taceo.php"; 
include_once "../cixajax.php"; 

$cix=new CixAJAX();
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
  echo $rpta;
break;
case "Actualizar":
  $rpta=CActualizar_taceo();
  echo $rpta;
break;
case "Eliminar":
  $rpta=CEliminar_taceo();
  header("Location: ../taceo");
break;
case "Recuperar":
  $rpta=CRecuperar_taceo();
break;
case "Listar":
	
 if(isset($_GET["idAcopio"])){
	 $rptamo=CListarAcopio_taceo($_GET["idAcopio"]);
	 if(count($rptamo["cuerpo"])>0){
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
	 }else{
		 $TaceoId="";
		 $TaceoFraganciaAroma="";
		 $TaceoSaborResidual="";
		 $TaceoAcidez="";
		 $TaceoCuerpo="";
		 $TaceoBalance="";
		 $TaceoDulsor="";
		 $TaceoUniformidad="";
		 $TaceoTazaLimpia="";
		 $TaceoPuntajeCatador="";
		 $TaceoDefectos="";
		 $TaceoNumeroTazas="";
		 $TaceoNotas="";
		 $TaceoCatadopor="";
		 $AcopioId="";
		 }
	
 }else{
		 $TaceoId="";
		 $TaceoFraganciaAroma="";
		 $TaceoSaborResidual="";
		 $TaceoAcidez="";
		 $TaceoCuerpo="";
		 $TaceoBalance="";
		 $TaceoDulsor="";
		 $TaceoUniformidad="";
		 $TaceoTazaLimpia="";
		 $TaceoPuntajeCatador="";
		 $TaceoDefectos="";
		 $TaceoNumeroTazas="";
		 $TaceoNotas="";
		 $TaceoCatadopor="";
		 $AcopioId="";
 }
 
	
	$contenido="Listar_tabla_taceo.php";
	include_once($contenido);      
	      
break;
case "Listarsimple":
 $Listarsimple_taceo=CListadoSimple_taceo();
break;
case "Buscar":
 $rpta=CBuscar_taceo();
break;

case "ModalidadFrm":
 
 if(isset($_GET["idAcopio"])){
	 $rptamo=CListarAcopio_taceo($_GET["idAcopio"]);
	 if(count($rptamo["cuerpo"])>0){
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
	 }else{
		 $TaceoId=0;
		 $TaceoFraganciaAroma="";
		 $TaceoSaborResidual="";
		 $TaceoAcidez="";
		 $TaceoCuerpo="";
		 $TaceoBalance="";
		 $TaceoDulsor="";
		 $TaceoUniformidad="";
		 $TaceoTazaLimpia="";
		 $TaceoPuntajeCatador="";
		 $TaceoDefectos="";
		 $TaceoNumeroTazas="";
		 $TaceoNotas="";
		 $TaceoCatadopor="";
		 $AcopioId=$_GET["idAcopio"];
		 }
	
 }else{
		 $TaceoId=0;
		 $TaceoFraganciaAroma="";
		 $TaceoSaborResidual="";
		 $TaceoAcidez="";
		 $TaceoCuerpo="";
		 $TaceoBalance="";
		 $TaceoDulsor="";
		 $TaceoUniformidad="";
		 $TaceoTazaLimpia="";
		 $TaceoPuntajeCatador="";
		 $TaceoDefectos="";
		 $TaceoNumeroTazas="";
		 $TaceoNotas="";
		 $TaceoCatadopor="";
		 $AcopioId=0;
 }
	$accionf="";
	$contenido="Registrar_taceo.php";
	include_once($contenido);      
	
break;
}
ob_flush();
?>