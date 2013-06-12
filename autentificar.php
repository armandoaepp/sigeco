<?php
include_once("./Modelado/Modelo_usuario.php");
include_once "./Modelado/Modelo_c_menutipousuario.php"; 
function CAutentificar_usuario(){
	$enusuario=new Clase_usuario();
	$enusuario->setTipoUsuarioId($_POST["TipoUsuario_"]);
	$enusuario->setUsuario($_POST["Usuario_"]);
	$enusuario->setUsuarioPassword($_POST["UsuarioPassword_"]);
	$rpta=$enusuario->Autentificar_usuario();
	return $rpta;
	
}
function CListar_c_menutipousuario_GenerarPerfil($IdTipoUsuario , $IdUsuario){
$enc_menutipousuario=new Clase_c_menutipousuario();
$enc_menutipousuario->setTipoUsuarioId($IdTipoUsuario);
$enc_menutipousuario->setUsuarioId($IdUsuario);
$rpta=$enc_menutipousuario->Listar_c_menutipousuario_GenerarPerfil();
return $rpta;
}
?>