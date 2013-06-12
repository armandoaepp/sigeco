<?php 
ob_start();
include_once "./Controlador_certificadocalidad.php"; 
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
	$rpta=CRegistrar_certificadocalidad();
	echo $rpta;
break;

case "Eliminar":
$rpta=CEliminar_certificadocalidad();
header("Location: ../certificadocalidad");
break;

case "Listar":	
	//echo "id".$_GET["idAcopio"];
	if(isset($_GET["idAcopio"])){
		$rptamo=CListarAcopio_certificadocalidad($_GET["idAcopio"]);
		if(count($rptamo["cuerpo"])>0){
		 // $CertificadoCalidadId=$rptamo["cuerpo"][0]["CertificadoCalidadId"]." %";
		  $CertificadoCalidadVariedadTipica=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTipica"]." %";
		  $CertificadoCalidadVariedadCaturra=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCaturra"]." %";
		  $CertificadoCalidadVariedadBourbon=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadBourbon"]." %";
		  $CertificadoCalidadVariedadCatimoro=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCatimoro"]." %";
		  $CertificadoCalidadVariedadTotal=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTotal"]." %";
		  $CertificadoCalidadTipoSecadoAlSol=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoAlSol"]." %";
		  $CertificadoCalidadTipoSecadoMecanico=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoMecanico"]." %";
		  $CertificadoCalidadTipoSecadoTotal=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoTotal"]." %";
		  $CertificadoCalidadAltitud=$rptamo["cuerpo"][0]["CertificadoCalidadAltitud"];
		  $CertificadoCalidadBajoSombra=$rptamo["cuerpo"][0]["CertificadoCalidadBajoSombra"]." %";
		 // $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];	
		}else{
			$CertificadoCalidadId=" 0 %";
			$CertificadoCalidadVariedadTipica=" 0 %";
			$CertificadoCalidadVariedadCaturra=" 0 %";
			$CertificadoCalidadVariedadBourbon=" 0 %";
			$CertificadoCalidadVariedadCatimoro=" 0 %";
			$CertificadoCalidadTipoSecadoAlSol=" 0 %";
			$CertificadoCalidadTipoSecadoMecanico=" 0 %";
			$CertificadoCalidadAltitud=" -- ";
			$CertificadoCalidadBajoSombra=" 0 %";
			$CertificadoCalidadVariedadTotal=" 0 %";
			$CertificadoCalidadTipoSecadoTotal=" 0 %";
		}
	}else{
		//$AcopioId="";
		$CertificadoCalidadId=" 0 %";
		$CertificadoCalidadVariedadTipica=" 0 %";
		$CertificadoCalidadVariedadCaturra=" 0 %";
		$CertificadoCalidadVariedadBourbon=" 0 %";
		$CertificadoCalidadVariedadCatimoro=" 0 %";
		$CertificadoCalidadTipoSecadoAlSol=" 0 %";
		$CertificadoCalidadTipoSecadoMecanico=" 0 %";
		$CertificadoCalidadAltitud=" -- ";
		$CertificadoCalidadBajoSombra=" 0 %";
		$CertificadoCalidadVariedadTotal=" 0 %";
		$CertificadoCalidadTipoSecadoTotal=" 0 %";
	}
	
	$contenido="Listar_tabla_certificadocalidad.php";
	include_once($contenido);
break;
case "Listarsimple":
$Listarsimple_certificadocalidad=CListadoSimple_certificadocalidad();
break;
case "Buscar":
	$rpta=CBuscar_certificadocalidad();
break;
case "Nuevo":
	$titulo= "Nuevo certificadocalidad";
	$accionf= "?accion=Registrar";
	$contenido="Registrar_certificadocalidad.php";
	require_once "../layout.php";
break;
case "ModalidadFrm":	
	if(isset($_GET["idAcopio"])){
		$rptamo=CListarAcopio_certificadocalidad($_GET["idAcopio"]);
		if(count($rptamo["cuerpo"])>0){
		  $CertificadoCalidadId=$rptamo["cuerpo"][0]["CertificadoCalidadId"];
		  $CertificadoCalidadVariedadTipica=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTipica"];
		  $CertificadoCalidadVariedadCaturra=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCaturra"];
		  $CertificadoCalidadVariedadBourbon=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadBourbon"];
		  $CertificadoCalidadVariedadCatimoro=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCatimoro"];
		  $CertificadoCalidadVariedadTotal=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTotal"];
		  $CertificadoCalidadTipoSecadoAlSol=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoAlSol"];
		  $CertificadoCalidadTipoSecadoMecanico=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoMecanico"];
		  $CertificadoCalidadTipoSecadoTotal=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoTotal"];
		  $CertificadoCalidadAltitud=$rptamo["cuerpo"][0]["CertificadoCalidadAltitud"];
		  $CertificadoCalidadBajoSombra=$rptamo["cuerpo"][0]["CertificadoCalidadBajoSombra"];
		  $AcopioId=$rptamo["cuerpo"][0]["AcopioId"];		
		  }else{
			$AcopioId=$_GET["idAcopio"];
			$CertificadoCalidadId=0;
			$CertificadoCalidadVariedadTipica="";
			$CertificadoCalidadVariedadCaturra="";
			$CertificadoCalidadVariedadBourbon="";
			$CertificadoCalidadVariedadCatimoro="";
			$CertificadoCalidadTipoSecadoAlSol="";
			$CertificadoCalidadTipoSecadoMecanico="";
			$CertificadoCalidadAltitud="";
			$CertificadoCalidadBajoSombra="";
			$CertificadoCalidadVariedadTotal="";
			$CertificadoCalidadTipoSecadoTotal="";
			  }
	}else{
		$AcopioId=0;
		$CertificadoCalidadId=0;
		$CertificadoCalidadVariedadTipica="";
		$CertificadoCalidadVariedadCaturra="";
		$CertificadoCalidadVariedadBourbon="";
		$CertificadoCalidadVariedadCatimoro="";
		$CertificadoCalidadTipoSecadoAlSol="";
		$CertificadoCalidadTipoSecadoMecanico="";
		$CertificadoCalidadAltitud="";
		$CertificadoCalidadBajoSombra="";
		$CertificadoCalidadVariedadTotal="";
		$CertificadoCalidadTipoSecadoTotal="";
	}
	$contenido="Registrar_certificadocalidad.php";
	include_once($contenido);
break;
}
ob_flush();
?>