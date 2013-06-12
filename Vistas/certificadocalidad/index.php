<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_certificadocalidad.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_certificadocalidad();
$contenido="Registrar_certificadocalidad.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_certificadocalidad();
$rptamo=CBuscar_certificadocalidad($_GET["id"]);
$CertificadoCalidadId=$rptamo["cuerpo"][0]["CertificadoCalidadId"];
$CertificadoCalidadVariedadTipica=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTipica"];
$CertificadoCalidadVariedadCaturra=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCaturra"];
$CertificadoCalidadVariedadBourbon=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadBourbon"];
$CertificadoCalidadVariedadCatimoro=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCatimoro"];
$CertificadoCalidadTipoSecadoAlSol=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoAlSol"];
$CertificadoCalidadTipoSecadoMecanico=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoMecanico"];
$CertificadoCalidadAltitud=$rptamo["cuerpo"][0]["CertificadoCalidadAltitud"];
$CertificadoCalidadBajoSombra=$rptamo["cuerpo"][0]["CertificadoCalidadBajoSombra"];
$CertificadoCalidadVariedadTotal=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTotal"];
$CertificadoCalidadTipoSecadoTotal=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoTotal"];
$AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
$contenido="Actualizar_certificadocalidad.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_certificadocalidad();
header("Location: ../certificadocalidad");
break;
case "Recuperar":
$rpta=CRecuperar_certificadocalidad();
break;
case "Listar":
$titulo="Listar certificadocalidad";
$data=CListar_certificadocalidad();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_certificadocalidad=$cix->ImprimeTable("tablacertificadocalidad",$data,"?","?",5,$page);
$contenido="Listar_certificadocalidad.php";
require_once "../layout.php";
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
case "Mactualizar":
$rptamo=CBuscar_certificadocalidad($_GET["id"]);
$CertificadoCalidadId=$rptamo["cuerpo"][0]["CertificadoCalidadId"];
$CertificadoCalidadVariedadTipica=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTipica"];
$CertificadoCalidadVariedadCaturra=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCaturra"];
$CertificadoCalidadVariedadBourbon=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadBourbon"];
$CertificadoCalidadVariedadCatimoro=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadCatimoro"];
$CertificadoCalidadTipoSecadoAlSol=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoAlSol"];
$CertificadoCalidadTipoSecadoMecanico=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoMecanico"];
$CertificadoCalidadAltitud=$rptamo["cuerpo"][0]["CertificadoCalidadAltitud"];
$CertificadoCalidadBajoSombra=$rptamo["cuerpo"][0]["CertificadoCalidadBajoSombra"];
$CertificadoCalidadVariedadTotal=$rptamo["cuerpo"][0]["CertificadoCalidadVariedadTotal"];
$CertificadoCalidadTipoSecadoTotal=$rptamo["cuerpo"][0]["CertificadoCalidadTipoSecadoTotal"];
$AcopioId=$rptamo["cuerpo"][0]["AcopioId"];
$titulo= "Actualizar certificadocalidad";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_certificadocalidad.php";
require_once "../layout.php";
break;
}
ob_flush();
?>