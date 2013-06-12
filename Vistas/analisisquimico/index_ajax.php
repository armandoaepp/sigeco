<?php 
ob_start();
include_once "./Controlador_analisisquimico.php"; 
include_once "../cixphp.php"; 
$cix=new CixPHP();
if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else if (isset($_POST["accion"])) {
    $evento = $_POST["accion"];
}else {
    $evento = "Listar";
}
switch($evento){
case "Registrar":
	$rpta=CRegistrar_analisisquimico();
	if($rpta==0){$rpta="Datos Registrado Correctamente";}
	else {$rpta="Error al Registrar Datos";	}
	echo $rpta;
break;
case "Actualizar":
	$rpta=CActualizar_analisisquimico();
	if($rpta==0){$rpta="Datos Actulizados Correctamente";}
	else {$rpta="Error al Actulizados Datos";	}
	echo $rpta;	
break;

case "Eliminar":
$rpta=CEliminar_analisisquimico();
header("Location: ../analisisquimico");
break;
case "Recuperar":
$rpta=CRecuperar_analisisquimico();
break;
case "Listar":
$titulo="Listar analisisquimico";
$data=CListar_analisisquimico();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_analisisquimico=$cix->ImprimeTable("tablaanalisisquimico",$data,"?","?",5,$page);
$contenido="Listar_analisisquimico.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_analisisquimico=CListadoSimple_analisisquimico();
break;
case "Buscar":
$rpta=CBuscar_analisisquimico();
break;
case "Nuevo":
$titulo= "Nuevo analisisquimico";
$accionf= "?accion=Registrar";
$contenido="Registrar_analisisquimico.php";
require_once "../layout.php";
break;
}
ob_flush();
?>