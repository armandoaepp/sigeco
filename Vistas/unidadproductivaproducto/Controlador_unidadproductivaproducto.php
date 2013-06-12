<?php
include_once "../../Modelado/Modelo_unidadproductivaproducto.php"; 
include_once "../validacion.php"; 
function CRegistrar_unidadproductivaproducto(){
$enunidadproductivaproducto=new Clase_unidadproductivaproducto();
$enunidadproductivaproducto->setUnidadProductivaProductoId(validar($_POST["UnidadProductivaProductoId_"]));
$enunidadproductivaproducto->setProductoId(validar($_POST["ProductoId_"]));
$enunidadproductivaproducto->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
$rpta=$enunidadproductivaproducto->Insertar_unidadproductivaproducto();
return $rpta;
}

function CActualizar_unidadproductivaproducto(){
$enunidadproductivaproducto=new Clase_unidadproductivaproducto();
$enunidadproductivaproducto->setUnidadProductivaProductoId(validar($_POST["UnidadProductivaProductoId_"]));
$enunidadproductivaproducto->setProductoId(validar($_POST["ProductoId_"]));
$enunidadproductivaproducto->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
$rpta=$enunidadproductivaproducto->Actualizar_unidadproductivaproducto();
return $rpta;
}

function CEliminar_unidadproductivaproducto(){
$enunidadproductivaproducto=new Clase_unidadproductivaproducto();
$enunidadproductivaproducto->setUnidadProductivaProductoId($_GET["id"]);
$rpta=$enunidadproductivaproducto->Eliminar_unidadproductivaproducto();
return $rpta;
}




?>