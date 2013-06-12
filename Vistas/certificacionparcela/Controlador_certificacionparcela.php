<?php
include_once "../../Modelado/Modelo_certificacionparcela.php"; 
include_once "../validacion.php"; 
function CRegistrar_certificacionparcela(){
$encertificacionparcela=new Clase_certificacionparcela();
$encertificacionparcela->setCertificacionParcelaId(validar($_POST["CertificacionParcelaId_"]));
$encertificacionparcela->setCertificacionId(validar($_POST["CertificacionId_"]));
$encertificacionparcela->setParcelaId(validar($_POST["ParcelaId_"]));
$rpta=$encertificacionparcela->Insertar_certificacionparcela();
return $rpta;
}

function CActualizar_certificacionparcela(){
$encertificacionparcela=new Clase_certificacionparcela();
$encertificacionparcela->setCertificacionParcelaId(validar($_POST["CertificacionParcelaId_"]));
$encertificacionparcela->setCertificacionId(validar($_POST["CertificacionId_"]));
$encertificacionparcela->setParcelaId(validar($_POST["ParcelaId_"]));
$rpta=$encertificacionparcela->Actualizar_certificacionparcela();
return $rpta;
}

function CEliminar_certificacionparcela(){
$encertificacionparcela=new Clase_certificacionparcela();
$encertificacionparcela->setCertificacionParcelaId($_GET["id"]);
$rpta=$encertificacionparcela->Eliminar_certificacionparcela();
return $rpta;
}

function CRecuperar_certificacionparcela(){
$encertificacionparcela=new Clase_certificacionparcela();
$encertificacionparcela->setCertificacionParcelaId($_GET["id"]);
$rpta=$encertificacionparcela->Recuperar_certificacionparcela();
return $rpta;
}

function CListar_certificacionparcela(){
$encertificacionparcela=new Clase_certificacionparcela();
$rpta=$encertificacionparcela->Listar_certificacionparcela();
return $rpta;
}

function CListadoSimple_certificacionparcela(){
$encertificacionparcela=new Clase_certificacionparcela();
$rpta=$encertificacionparcela->ListadoSimple_certificacionparcela();
return $rpta;
}

function CBuscar_certificacionparcela($id){
$encertificacionparcela=new Clase_certificacionparcela();
$encertificacionparcela->setCertificacionParcelaId($id);
$rpta=$encertificacionparcela->Buscar_certificacionparcela();
return $rpta;}
?>