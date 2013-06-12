<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_proceso.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_proceso();
$contenido="Registrar_proceso.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_proceso();
$rptamo=CBuscar_proceso($_GET["id"]);
$ProcesoId=$rptamo["cuerpo"][0]["ProcesoId"];
$ProcesoDespulpadora=$rptamo["cuerpo"][0]["ProcesoDespulpadora"];
$ProcesoTanqueTina=$rptamo["cuerpo"][0]["ProcesoTanqueTina"];
$ProcesoCompostera=$rptamo["cuerpo"][0]["ProcesoCompostera"];
$ProcesoTiempoRecoleccion=$rptamo["cuerpo"][0]["ProcesoTiempoRecoleccion"];
$ProcesoTiempoFermentacion=$rptamo["cuerpo"][0]["ProcesoTiempoFermentacion"];
$ProcesoTipoFermentacion=$rptamo["cuerpo"][0]["ProcesoTipoFermentacion"];
$ProcesoNumeroLavado=$rptamo["cuerpo"][0]["ProcesoNumeroLavado"];
$ProcesoTiempoSecado=$rptamo["cuerpo"][0]["ProcesoTiempoSecado"];
$ProcesoDescripcion=$rptamo["cuerpo"][0]["ProcesoDescripcion"];
$TipoSeleccionId=$rptamo["cuerpo"][0]["TipoSeleccionId"];
$TipoSecadoId=$rptamo["cuerpo"][0]["TipoSecadoId"];
$ProcesoPozoInorganico=$rptamo["cuerpo"][0]["ProcesoPozoInorganico"];
$ProcesoPozoMiel=$rptamo["cuerpo"][0]["ProcesoPozoMiel"];
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$contenido="Actualizar_proceso.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_proceso();
header("Location: ../proceso");
break;
case "Recuperar":
$rpta=CRecuperar_proceso();
break;
case "Listar":
$titulo="Listar proceso";
$data=CListar_proceso();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_proceso=$cix->ImprimeTable("tablaproceso",$data,"?","?",5,$page);
$contenido="Listar_proceso.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_proceso=CListadoSimple_proceso();
break;
case "Buscar":
$rpta=CBuscar_proceso();
break;
case "Nuevo":
$titulo= "Nuevo proceso";
$accionf= "?accion=Registrar";
$contenido="Registrar_proceso.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_proceso($_GET["id"]);
$ProcesoId=$rptamo["cuerpo"][0]["ProcesoId"];
$ProcesoDespulpadora=$rptamo["cuerpo"][0]["ProcesoDespulpadora"];
$ProcesoTanqueTina=$rptamo["cuerpo"][0]["ProcesoTanqueTina"];
$ProcesoCompostera=$rptamo["cuerpo"][0]["ProcesoCompostera"];
$ProcesoTiempoRecoleccion=$rptamo["cuerpo"][0]["ProcesoTiempoRecoleccion"];
$ProcesoTiempoFermentacion=$rptamo["cuerpo"][0]["ProcesoTiempoFermentacion"];
$ProcesoTipoFermentacion=$rptamo["cuerpo"][0]["ProcesoTipoFermentacion"];
$ProcesoNumeroLavado=$rptamo["cuerpo"][0]["ProcesoNumeroLavado"];
$ProcesoTiempoSecado=$rptamo["cuerpo"][0]["ProcesoTiempoSecado"];
$ProcesoDescripcion=$rptamo["cuerpo"][0]["ProcesoDescripcion"];
$TipoSeleccionId=$rptamo["cuerpo"][0]["TipoSeleccionId"];
$TipoSecadoId=$rptamo["cuerpo"][0]["TipoSecadoId"];
$ProcesoPozoInorganico=$rptamo["cuerpo"][0]["ProcesoPozoInorganico"];
$ProcesoPozoMiel=$rptamo["cuerpo"][0]["ProcesoPozoMiel"];
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$titulo= "Actualizar proceso";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_proceso.php";
require_once "../layout.php";
break;
}
ob_flush();
?>