<?php
include_once "../../Modelado/Modelo_tipocertificacion.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipocertificacion(){
$entipocertificacion=new Clase_tipocertificacion();
$entipocertificacion->setTipoCertificacionId(validar($_POST["TipoCertificacionId_"]));
$entipocertificacion->setTipoCertificacion(validar($_POST["TipoCertificacion_"]));
$rpta=$entipocertificacion->Insertar_tipocertificacion();
return $rpta;
}

function CActualizar_tipocertificacion(){
$entipocertificacion=new Clase_tipocertificacion();
$entipocertificacion->setTipoCertificacionId(validar($_POST["TipoCertificacionId_"]));
$entipocertificacion->setTipoCertificacion(validar($_POST["TipoCertificacion_"]));
$rpta=$entipocertificacion->Actualizar_tipocertificacion();
return $rpta;
}

function CEliminar_tipocertificacion(){
$entipocertificacion=new Clase_tipocertificacion();
$entipocertificacion->setTipoCertificacionId($_GET["id"]);
$rpta=$entipocertificacion->Eliminar_tipocertificacion();
return $rpta;
}

function CRecuperar_tipocertificacion(){
$entipocertificacion=new Clase_tipocertificacion();
$entipocertificacion->setTipoCertificacionId($_GET["id"]);
$rpta=$entipocertificacion->Recuperar_tipocertificacion();
return $rpta;
}

function CListar_tipocertificacion(){
$entipocertificacion=new Clase_tipocertificacion();
$rpta=$entipocertificacion->Listar_tipocertificacion();
return $rpta;
}

function CListadoSimple_tipocertificacion(){
$entipocertificacion=new Clase_tipocertificacion();
$rpta=$entipocertificacion->ListadoSimple_tipocertificacion();
return $rpta;
}

function CBuscar_tipocertificacion($id){
$entipocertificacion=new Clase_tipocertificacion();
$entipocertificacion->setTipoCertificacionId($id);
$rpta=$entipocertificacion->Buscar_tipocertificacion();
return $rpta;}
?>