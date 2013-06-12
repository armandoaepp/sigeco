<?php
include_once "../../Modelado/Modelo_c_modulo.php"; 
include_once "../validacion.php"; 
function CRegistrar_c_modulo(){
$enc_modulo=new Clase_c_modulo();
$enc_modulo->setModuloId(validar($_POST["ModuloId_"]));
$enc_modulo->setModuloNombre(validar($_POST["ModuloNombre_"]));
$enc_modulo->setModuloNota(validar($_POST["ModuloNota_"]));
$rpta=$enc_modulo->Insertar_c_modulo();
return $rpta;
}

function CActualizar_c_modulo(){
$enc_modulo=new Clase_c_modulo();
$enc_modulo->setModuloId(validar($_POST["ModuloId_"]));
$enc_modulo->setModuloNombre(validar($_POST["ModuloNombre_"]));
$enc_modulo->setModuloNota(validar($_POST["ModuloNota_"]));
$rpta=$enc_modulo->Actualizar_c_modulo();
return $rpta;
}

function CEliminar_c_modulo(){
$enc_modulo=new Clase_c_modulo();
$enc_modulo->setModuloId($_GET["id"]);
$rpta=$enc_modulo->Eliminar_c_modulo();
return $rpta;
}

function CRecuperar_c_modulo(){
$enc_modulo=new Clase_c_modulo();
$enc_modulo->setModuloId($_GET["id"]);
$rpta=$enc_modulo->Recuperar_c_modulo();
return $rpta;
}

function CListar_c_modulo(){
$enc_modulo=new Clase_c_modulo();
$rpta=$enc_modulo->Listar_c_modulo();
return $rpta;
}

function CListadoSimple_c_modulo(){
$enc_modulo=new Clase_c_modulo();
$rpta=$enc_modulo->ListadoSimple_c_modulo();
return $rpta;
}

function CBuscar_c_modulo($id){
$enc_modulo=new Clase_c_modulo();
$enc_modulo->setModuloId($id);
$rpta=$enc_modulo->Buscar_c_modulo();
return $rpta;}
?>