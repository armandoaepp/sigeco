<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_tiposeleccion.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_tiposeleccion();
$contenido="Registrar_tiposeleccion.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_tiposeleccion();
$rptamo=CBuscar_tiposeleccion($_GET["id"]);
$TipoSeleccionId=$rptamo["cuerpo"][0]["TipoSeleccionId"];
$TipoSeleccion=$rptamo["cuerpo"][0]["TipoSeleccion"];
$contenido="Actualizar_tiposeleccion.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_tiposeleccion();
header("Location: ../tiposeleccion");
break;
case "Recuperar":
$rpta=CRecuperar_tiposeleccion();
break;
case "Listar":
$titulo="Listar tiposeleccion";
$data=CListar_tiposeleccion();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_tiposeleccion=$cix->ImprimeTable("tablatiposeleccion",$data,"?","?",5,$page);
$contenido="Listar_tiposeleccion.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_tiposeleccion=CListadoSimple_tiposeleccion();
break;
case "Buscar":
$rpta=CBuscar_tiposeleccion();
break;
case "Nuevo":
$titulo= "Nuevo tiposeleccion";
$accionf= "?accion=Registrar";
$contenido="Registrar_tiposeleccion.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_tiposeleccion($_GET["id"]);
$TipoSeleccionId=$rptamo["cuerpo"][0]["TipoSeleccionId"];
$TipoSeleccion=$rptamo["cuerpo"][0]["TipoSeleccion"];
$titulo= "Actualizar tiposeleccion";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_tiposeleccion.php";
require_once "../layout.php";
break;
}
ob_flush();
?>