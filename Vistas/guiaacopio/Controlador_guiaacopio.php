<?php
include_once "../../Modelado/Modelo_guiaacopio.php"; 
include_once "../validacion.php"; 
function CRegistrar_guiaacopio(){
$enguiaacopio=new Clase_guiaacopio();
$enguiaacopio->setGuiaAcopioId(validar($_POST["GuiaAcopioId_"]));
$enguiaacopio->setGuiaAcopioNumero(validar($_POST["GuiaAcopioNumero_"]));
$enguiaacopio->setGuiaAcopioEstado(validar($_POST["GuiaAcopioEstado_"]));
$enguiaacopio->setUsuarioId(validar($_POST["UsuarioId_"]));
$enguiaacopio->setGuiaSerieId(validar($_POST["GuiaSerieId_"]));
$rpta=$enguiaacopio->Insertar_guiaacopio();
return $rpta;
}

function CActualizar_guiaacopio(){
$enguiaacopio=new Clase_guiaacopio();
$enguiaacopio->setGuiaAcopioId(validar($_POST["GuiaAcopioId_"]));
$enguiaacopio->setGuiaAcopioNumero(validar($_POST["GuiaAcopioNumero_"]));
$enguiaacopio->setGuiaAcopioEstado(validar($_POST["GuiaAcopioEstado_"]));
$enguiaacopio->setUsuarioId(validar($_POST["UsuarioId_"]));
$enguiaacopio->setGuiaSerieId(validar($_POST["GuiaSerieId_"]));
$rpta=$enguiaacopio->Actualizar_guiaacopio();
return $rpta;
}

function CEliminar_guiaacopio(){
$enguiaacopio=new Clase_guiaacopio();
$enguiaacopio->setGuiaAcopioId($_GET["id"]);
$rpta=$enguiaacopio->Eliminar_guiaacopio();
return $rpta;
}

function CRecuperar_guiaacopio(){
$enguiaacopio=new Clase_guiaacopio();
$enguiaacopio->setGuiaAcopioId($_GET["id"]);
$rpta=$enguiaacopio->Recuperar_guiaacopio();
return $rpta;
}

function CListar_guiaacopio(){
$enguiaacopio=new Clase_guiaacopio();
$rpta=$enguiaacopio->Listar_guiaacopio();
return $rpta;
}

function CListadoSimple_guiaacopio(){
$enguiaacopio=new Clase_guiaacopio();
$rpta=$enguiaacopio->ListadoSimple_guiaacopio();
return $rpta;
}

function CBuscar_guiaacopio($id){
$enguiaacopio=new Clase_guiaacopio();
$enguiaacopio->setGuiaAcopioId($id);
$rpta=$enguiaacopio->Buscar_guiaacopio();
return $rpta;}
?>