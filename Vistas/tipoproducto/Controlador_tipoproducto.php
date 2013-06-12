<?php
include_once "../../Modelado/Modelo_tipoproducto.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipoproducto(){
$entipoproducto=new Clase_tipoproducto();
$entipoproducto->setTipoProductoId(validar($_POST["TipoProductoId_"]));
$entipoproducto->setTipoProducto(validar($_POST["TipoProducto_"]));
$rpta=$entipoproducto->Insertar_tipoproducto();
return $rpta;
}

function CActualizar_tipoproducto(){
$entipoproducto=new Clase_tipoproducto();
$entipoproducto->setTipoProductoId(validar($_POST["TipoProductoId_"]));
$entipoproducto->setTipoProducto(validar($_POST["TipoProducto_"]));
$rpta=$entipoproducto->Actualizar_tipoproducto();
return $rpta;
}

function CEliminar_tipoproducto(){
$entipoproducto=new Clase_tipoproducto();
$entipoproducto->setTipoProductoId($_GET["id"]);
$rpta=$entipoproducto->Eliminar_tipoproducto();
return $rpta;
}

function CRecuperar_tipoproducto(){
$entipoproducto=new Clase_tipoproducto();
$entipoproducto->setTipoProductoId($_GET["id"]);
$rpta=$entipoproducto->Recuperar_tipoproducto();
return $rpta;
}

function CListar_tipoproducto(){
$entipoproducto=new Clase_tipoproducto();
$rpta=$entipoproducto->Listar_tipoproducto();
return $rpta;
}

function CListadoSimple_tipoproducto(){
$entipoproducto=new Clase_tipoproducto();
$rpta=$entipoproducto->ListadoSimple_tipoproducto();
return $rpta;
}

function CBuscar_tipoproducto($id){
$entipoproducto=new Clase_tipoproducto();
$entipoproducto->setTipoProductoId($id);
$rpta=$entipoproducto->Buscar_tipoproducto();
return $rpta;}
?>