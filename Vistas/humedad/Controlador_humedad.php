<?php
include_once "../../Modelado/Modelo_humedad.php"; 
include_once "../validacion.php"; 
function CRegistrar_humedad(){
$enhumedad=new Clase_humedad();
$enhumedad->setHumedadId(validar($_POST["HumedadId_"]));
$enhumedad->setHumedadLibreTara(validar($_POST["HumedadLibreTara_"]));
$enhumedad->setHumedadDescuentoHumedad(validar($_POST["HumedadDescuentoHumedad_"]));
$enhumedad->setHumedadKgNetos(validar($_POST["HumedadKgNetos_"]));
$enhumedad->setHumedadImporteBruto(validar($_POST["HumedadImporteBruto_"]));
$enhumedad->setHumedadImporteDescuento(validar($_POST["HumedadImporteDescuento_"]));
$enhumedad->setHumedadImporteTotal(validar($_POST["HumedadImporteTotal_"]));
$enhumedad->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$enhumedad->Insertar_humedad();
return $rpta;
}

function CActualizar_humedad(){
$enhumedad=new Clase_humedad();
$enhumedad->setHumedadId(validar($_POST["HumedadId_"]));
$enhumedad->setHumedadLibreTara(validar($_POST["HumedadLibreTara_"]));
$enhumedad->setHumedadDescuentoHumedad(validar($_POST["HumedadDescuentoHumedad_"]));
$enhumedad->setHumedadKgNetos(validar($_POST["HumedadKgNetos_"]));
$enhumedad->setHumedadImporteBruto(validar($_POST["HumedadImporteBruto_"]));
$enhumedad->setHumedadImporteDescuento(validar($_POST["HumedadImporteDescuento_"]));
$enhumedad->setHumedadImporteTotal(validar($_POST["HumedadImporteTotal_"]));
$enhumedad->setAcopioId(validar($_POST["AcopioId_"]));
$rpta=$enhumedad->Actualizar_humedad();
return $rpta;
}

function CEliminar_humedad(){
$enhumedad=new Clase_humedad();
$enhumedad->setHumedadId($_GET["id"]);
$rpta=$enhumedad->Eliminar_humedad();
return $rpta;
}

function CRecuperar_humedad(){
$enhumedad=new Clase_humedad();
$enhumedad->setHumedadId($_GET["id"]);
$rpta=$enhumedad->Recuperar_humedad();
return $rpta;
}

function CListar_humedad(){
$enhumedad=new Clase_humedad();
$rpta=$enhumedad->Listar_humedad();
return $rpta;
}

function CListadoSimple_humedad(){
$enhumedad=new Clase_humedad();
$rpta=$enhumedad->ListadoSimple_humedad();
return $rpta;
}

function CBuscar_humedad($id){
$enhumedad=new Clase_humedad();
$enhumedad->setHumedadId($id);
$rpta=$enhumedad->Buscar_humedad();
return $rpta;}

function CBuscar_Acopio_humedad($id){
$enhumedad=new Clase_humedad();
$enhumedad->setAcopioId($id);
$rpta=$enhumedad->Buscar_Acopio_humedad();
return $rpta;}
?>