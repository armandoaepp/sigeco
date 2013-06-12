<?php
include_once "../../Modelado/Modelo_guiaserie.php"; 
include_once "../validacion.php"; 
function CRegistrar_guiaserie(){
$enguiaserie=new Clase_guiaserie();
$enguiaserie->setGuiaSerieId(validar($_POST["GuiaSerieId_"]));
$enguiaserie->setGuiaSerieNumero(validar($_POST["GuiaSerieNumero_"]));
$enguiaserie->setGuiaSerieEstado(validar($_POST["GuiaSerieEstado_"]));
$enguiaserie->setSerieId(validar($_POST["SerieId_"]));
$rpta=$enguiaserie->Insertar_guiaserie();
return $rpta;
}

function CActualizar_guiaserie(){
$enguiaserie=new Clase_guiaserie();
$enguiaserie->setGuiaSerieId(validar($_POST["GuiaSerieId_"]));
$enguiaserie->setGuiaSerieNumero(validar($_POST["GuiaSerieNumero_"]));
$enguiaserie->setGuiaSerieEstado(validar($_POST["GuiaSerieEstado_"]));
$enguiaserie->setSerieId(validar($_POST["SerieId_"]));
$rpta=$enguiaserie->Actualizar_guiaserie();
return $rpta;
}

function CEliminar_guiaserie(){
$enguiaserie=new Clase_guiaserie();
$enguiaserie->setGuiaSerieId($_GET["id"]);
$rpta=$enguiaserie->Eliminar_guiaserie();
return $rpta;
}

function CRecuperar_guiaserie(){
$enguiaserie=new Clase_guiaserie();
$enguiaserie->setGuiaSerieId($_GET["id"]);
$rpta=$enguiaserie->Recuperar_guiaserie();
return $rpta;
}

function CListar_guiaserie(){
$enguiaserie=new Clase_guiaserie();
$rpta=$enguiaserie->Listar_guiaserie();
return $rpta;
}

function CListadoSimple_guiaserie(){
$enguiaserie=new Clase_guiaserie();
$rpta=$enguiaserie->ListadoSimple_guiaserie();
return $rpta;
}

function CBuscar_guiaserie($id){
$enguiaserie=new Clase_guiaserie();
$enguiaserie->setGuiaSerieId($id);
$rpta=$enguiaserie->Buscar_guiaserie();
return $rpta;}
?>