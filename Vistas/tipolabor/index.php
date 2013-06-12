<?php 
ob_start();
// Ceti Chiclayo 
include_once "./Controlador_tipolabor.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}
switch($evento){
case "Registrar":
$rpta=CRegistrar_tipolabor();
$contenido="Registrar_tipolabor.php";
$accionf= "?accion=Registrar";
require_once "../layout.php";break;
case "Actualizar":
$rpta=CActualizar_tipolabor();
$rptamo=CBuscar_tipolabor($_GET["id"]);
$TipoLaborId=$rptamo["cuerpo"][0]["TipoLaborId"];
$TipoLabor=$rptamo["cuerpo"][0]["TipoLabor"];
$contenido="Actualizar_tipolabor.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_tipolabor();
header("Location: ../tipolabor");
break;
case "Recuperar":
$rpta=CRecuperar_tipolabor();
break;
case "Listar":
$titulo="Listar tipolabor";
$data=CListar_tipolabor();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_tipolabor=$cix->ImprimeTable("tablatipolabor",$data,"?","?",5,$page);
$contenido="Listar_tipolabor.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_tipolabor=CListadoSimple_tipolabor();
break;
case "Buscar":
$rpta=CBuscar_tipolabor();
break;
case "Nuevo":
$titulo= "Nuevo tipolabor";
$accionf= "?accion=Registrar";
$contenido="Registrar_tipolabor.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_tipolabor($_GET["id"]);
$TipoLaborId=$rptamo["cuerpo"][0]["TipoLaborId"];
$TipoLabor=$rptamo["cuerpo"][0]["TipoLabor"];
$titulo= "Actualizar tipolabor";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_tipolabor.php";
require_once "../layout.php";
break;
}
ob_flush();
?>