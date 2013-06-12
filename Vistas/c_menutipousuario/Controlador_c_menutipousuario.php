<?php
include_once "../../Modelado/Modelo_c_menutipousuario.php"; 
include_once "../validacion.php"; 
function CRegistrar_c_menutipousuario(){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setMenuTipoUsuarioId(validar($_POST["MenuTipoUsuarioId_"]));
$enc_menutipousuario->setMenuId(validar($_POST["MenuId_"]));
$enc_menutipousuario->setTipoUsuarioId(validar($_POST["TipoUsuarioId_"]));
$rpta=$enc_menutipousuario->Insertar_c_menutipousuario();
return $rpta;
}

function CActualizar_c_menutipousuario(){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setMenuTipoUsuarioId(validar($_POST["MenuTipoUsuarioId_"]));
$enc_menutipousuario->setMenuId(validar($_POST["MenuId_"]));
$enc_menutipousuario->setTipoUsuarioId(validar($_POST["TipoUsuarioId_"]));
$rpta=$enc_menutipousuario->Actualizar_c_menutipousuario();
return $rpta;
}

function CEliminar_c_menutipousuario(){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setMenuTipoUsuarioId($_GET["id"]);
$rpta=$enc_menutipousuario->Eliminar_c_menutipousuario();
return $rpta;
}

function CRecuperar_c_menutipousuario(){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setMenuTipoUsuarioId($_GET["id"]);
$rpta=$enc_menutipousuario->Recuperar_c_menutipousuario();
return $rpta;
}

function CListar_c_menutipousuario(){
$enc_menutipousuario=new Clase_c_menutipousuario();
$rpta=$enc_menutipousuario->Listar_c_menutipousuario();
return $rpta;
}

function CListadoSimple_c_menutipousuario(){
$enc_menutipousuario=new Clase_c_menutipousuario();
$rpta=$enc_menutipousuario->ListadoSimple_c_menutipousuario();
return $rpta;
}

function CBuscar_c_menutipousuario($id){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setMenuTipoUsuarioId($id);
$rpta=$enc_menutipousuario->Buscar_c_menutipousuario();
return $rpta;}

function CListar_c_menutipousuario_GenerarPerfil($IdTipoUsuario , $IdUsuario){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setTipoUsuarioId($IdTipoUsuario);
$enc_menutipousuario->setUsuarioId($IdUsuario);
$rpta=$enc_menutipousuario->Listar_c_menutipousuario_GenerarPerfil();
return $rpta;
}

function CListar_c_menutipousuario_GenerarSubMenu_xPadre($MenuPadreId,$idUser){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setUsuarioId($idUser);
$enc_menutipousuario->setPadreMenuId($MenuPadreId);
$rpta=$enc_menutipousuario->Listar_c_menutipousuario_GenerarSubMenu_xPadre();
return $rpta;}
?>