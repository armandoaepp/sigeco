<?php
ob_start();
header("Content-Type: text/html;charset=utf-8");
include_once "./Controlador_c_permiso.php"; 
include_once "../cixajax.php"; 
include_once "../fecha.php"; 

$cix=new CixAJAX();
if(isset($_POST["accion"])){
	$evento=$_POST["accion"];
} else if(isset($_GET["accion"])){
	$evento=$_GET["accion"];
}else{
	$evento="Listar";
}
switch($evento){
case "Registrar":
	$rpta=CRegistrar_c_permiso();
	if($rpta=="ok"){
		echo "Permiso Registrado Correctamente";
	
	}else {
		echo $rpta;	
		}
	echo "<META HTTP-EQUIV = REFRESH CONTENT='2 ;URL=../m_mantenimiento/usuario.php'>";
	//header("Location:../m_configuar/usuario.php");
break;
case "Actualizar":
$rpta=CActualizar_c_permiso();
$rptamo=CBuscar_c_permiso($_GET["id"]);
$PermisoId=$rptamo["cuerpo"][0]["PermisoId"];
$FechaCreacion=$rptamo["cuerpo"][0]["FechaCreacion"];
$UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
$MenuTipoUsuarioId=$rptamo["cuerpo"][0]["MenuTipoUsuarioId"];
$contenido="Actualizar_c_permiso.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";break;
case "Eliminar":
$rpta=CEliminar_c_permiso();
header("Location: ../c_permiso");
break;
case "Recuperar":
$rpta=CRecuperar_c_permiso();
break;
case "Listar":
$titulo="Listar c_permiso";
$data=CListar_c_permiso();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_c_permiso=$cix->ImprimeTable("tablac_permiso",$data,"?","?",5,$page);
$contenido="Listar_c_permiso.php";
require_once "../layout.php";
break;
case "Listarsimple":
$Listarsimple_c_permiso=CListadoSimple_c_permiso();
break;
case "Buscar":
$rpta=CBuscar_c_permiso();
break;
case "Nuevo":
$titulo= "Nuevo c_permiso";
$accionf= "?accion=Registrar";
$contenido="Registrar_c_permiso.php";
require_once "../layout.php";
break;
case "Mactualizar":
$rptamo=CBuscar_c_permiso($_GET["id"]);
$PermisoId=$rptamo["cuerpo"][0]["PermisoId"];
$FechaCreacion=$rptamo["cuerpo"][0]["FechaCreacion"];
$UsuarioId=$rptamo["cuerpo"][0]["UsuarioId"];
$MenuTipoUsuarioId=$rptamo["cuerpo"][0]["MenuTipoUsuarioId"];
$titulo= "Actualizar c_permiso";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_c_permiso.php";
require_once "../layout.php";
break;
}
ob_flush();
?>