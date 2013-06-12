<?php
include_once "../../Modelado/Modelo_c_menu.php"; 
include_once "../validacion.php"; 
function CRegistrar_c_menu(){
$enc_menu=new Clase_c_menu();
$enc_menu->setMenuId(validar($_POST["MenuId_"]));
$enc_menu->setMenuNombre(validar($_POST["MenuNombre_"]));
$enc_menu->setMenuUrl(validar($_POST["MenuUrl_"]));
$enc_menu->setPadreMenuId(validar($_POST["PadreMenuId_"]));
$enc_menu->setModuloId(validar($_POST["ModuloId_"]));
$enc_menu->setMenuEstado(validar($_POST["MenuEstado_"]));
$rpta=$enc_menu->Insertar_c_menu();
return $rpta;
}

function CActualizar_c_menu(){
$enc_menu=new Clase_c_menu();
$enc_menu->setMenuId(validar($_POST["MenuId_"]));
$enc_menu->setMenuNombre(validar($_POST["MenuNombre_"]));
$enc_menu->setMenuUrl(validar($_POST["MenuUrl_"]));
$enc_menu->setPadreMenuId(validar($_POST["PadreMenuId_"]));
$enc_menu->setModuloId(validar($_POST["ModuloId_"]));
$enc_menu->setMenuEstado(validar($_POST["MenuEstado_"]));
$rpta=$enc_menu->Actualizar_c_menu();
return $rpta;
}

function CEliminar_c_menu(){
$enc_menu=new Clase_c_menu();
$enc_menu->setMenuId($_GET["id"]);
$rpta=$enc_menu->Eliminar_c_menu();
return $rpta;
}

function CRecuperar_c_menu(){
$enc_menu=new Clase_c_menu();
$enc_menu->setMenuId($_GET["id"]);
$rpta=$enc_menu->Recuperar_c_menu();
return $rpta;
}

function CListar_c_menu(){
$enc_menu=new Clase_c_menu();
$rpta=$enc_menu->Listar_c_menu();
return $rpta;
}

function CListadoSimple_c_menu(){
$enc_menu=new Clase_c_menu();
$rpta=$enc_menu->ListadoSimple_c_menu();
return $rpta;
}

function CBuscar_c_menu($id){
$enc_menu=new Clase_c_menu();
$enc_menu->setMenuId($id);
$rpta=$enc_menu->Buscar_c_menu();
return $rpta;}

function CListar_menu_Padre(){
	$enc_menu=new Clase_c_menu();
	$rpta=$enc_menu->Listar_menu_Padre();
	return $rpta;
}
function CListar_menu_xIdPadre($idMenuPadre){
	$enc_menu=new Clase_c_menu();
	$enc_menu->setPadreMenuId($idMenuPadre);
	$rpta=$enc_menu->Listar_menu_xIdPadre();
	return $rpta;
}

function CListar_MenuPermiso_xUsuario($idUsuario){
	$enc_menu=new Clase_c_menu();
	$enc_menu->setUsuarioId($idUsuario);
	$rpta=$enc_menu->Listar_MenuPermiso_xUsuario();
	return $rpta;
}
?>