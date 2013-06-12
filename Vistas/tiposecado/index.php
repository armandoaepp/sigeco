<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_tiposecado.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_tiposecado();
$contenido="Registrar_tiposecado.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_tiposecado();
$rptamo=CBuscar_tiposecado($_GET["id"]);
$TipoSecadoId=$rptamo["cuerpo"][0]["TipoSecadoId"];
$TipoSecado=$rptamo["cuerpo"][0]["TipoSecado"];
$contenido="Actualizar_tiposecado.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_tiposecado();
header("Location: ../tiposecado");
break;
case "Recuperar":
$rpta=CRecuperar_tiposecado();
break;
case "Listar":
$titulo="Listar tiposecado";
$data=CListar_tiposecado();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_tiposecado=$cix->ImprimeTable("tablatiposecado",$data,"?","?",5,$page);
$contenido="Listar_tiposecado.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_tiposecado=CListadoSimple_tiposecado();
break;
case "Buscar":
$rpta=CBuscar_tiposecado();
break;
case "Nuevo":
$titulo= "Nuevo tiposecado";
$accionf= "?accion=Registrar";
$contenido="Registrar_tiposecado.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_tiposecado($_GET["id"]);
$TipoSecadoId=$rptamo["cuerpo"][0]["TipoSecadoId"];
$TipoSecado=$rptamo["cuerpo"][0]["TipoSecado"];
$titulo= "Actualizar tiposecado";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_tiposecado.php";
require_once "../layout.php";
break;
}
ob_flush();
?>