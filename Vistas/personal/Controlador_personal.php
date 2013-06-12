<?php
include_once "../../Modelado/Modelo_personal.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php"; 

function CRegistrar_personal(){
$enpersonal=new Clase_personal();
//$enpersonal->setPersonalId(validar($_POST["PersonalId_"]));
$enpersonal->setPersonalFechaIngreso(fechaFormatoBD(validar($_POST["PersonalFechaIngreso_"])));
$enpersonal->setPersonalDni(validar($_POST["PersonalDni_"]));
$enpersonal->setPersonalApellido(validar($_POST["PersonalApellido_"]));
$enpersonal->setPersonalNombre(validar($_POST["PersonalNombre_"]));
$enpersonal->setPersonalSexo(validar($_POST["PersonalSexo_"]));
$enpersonal->setPersonalFechaNac(fechaFormatoBD(validar($_POST["PersonalFechaNac_"])));
$enpersonal->setPersonalEmail(validar($_POST["PersonalEmail_"]));
$enpersonal->setPersonalDireccion(validar($_POST["PersonalDireccion_"]));
$enpersonal->setPersonalTelefono(validar($_POST["PersonalTelefono_"]));
$enpersonal->setPersonalEstado('A');
$rpta=$enpersonal->Insertar_personal();
return $rpta;
}

function CActualizar_personal(){
$enpersonal=new Clase_personal();
$enpersonal->setPersonalId(validar($_POST["PersonalId_"]));
$enpersonal->setPersonalFechaIngreso(fechaFormatoBD(validar($_POST["PersonalFechaIngreso_"])));
$enpersonal->setPersonalDni(validar($_POST["PersonalDni_"]));
$enpersonal->setPersonalApellido(validar($_POST["PersonalApellido_"]));
$enpersonal->setPersonalNombre(validar($_POST["PersonalNombre_"]));
$enpersonal->setPersonalSexo(validar($_POST["PersonalSexo_"]));
$enpersonal->setPersonalFechaNac(fechaFormatoBD(validar($_POST["PersonalFechaNac_"])));
$enpersonal->setPersonalEmail(validar($_POST["PersonalEmail_"]));
$enpersonal->setPersonalDireccion(validar($_POST["PersonalDireccion_"]));
$enpersonal->setPersonalTelefono(validar($_POST["PersonalTelefono_"]));
$enpersonal->setPersonalEstado(validar($_POST["PersonalEstado_"]));
$rpta=$enpersonal->Actualizar_personal();
return $rpta;
}

function CEliminar_personal(){
$enpersonal=new Clase_personal();
$enpersonal->setPersonalId($_GET["id"]);
$rpta=$enpersonal->Eliminar_personal();
return $rpta;
}

function CRecuperar_personal(){
$enpersonal=new Clase_personal();
$enpersonal->setPersonalId($_GET["id"]);
$rpta=$enpersonal->Recuperar_personal();
return $rpta;
}

function CListar_personal(){
$enpersonal=new Clase_personal();
$rpta=$enpersonal->Listar_personal();
return $rpta;
}

function CListadoSimple_personal(){
$enpersonal=new Clase_personal();
$rpta=$enpersonal->ListadoSimple_personal();
return $rpta;
}

function CBuscar_personal($id){
$enpersonal=new Clase_personal();
$enpersonal->setPersonalId($id);
$rpta=$enpersonal->Buscar_personal();
return $rpta;
}

function CBuscar_personal_xDNI($dni){
	$enpersonal=new Clase_personal();
	$enpersonal->setPersonalDni($dni);
	$rpta=$enpersonal->Buscar_personal_xDNI();
	return $rpta;
}
function CListar_personal_parametro($orderby,$txtbuscar){
	$enpersonal=new Clase_personal();
	$rpta=$enpersonal->Listar_personal_parametro($orderby,$txtbuscar);
	return $rpta;
}
function CListar_Exportar_personal(){
	$enpersonal=new Clase_personal();
	$rpta=$enpersonal->Listar_Exportar_personal();
	return $rpta;
}

?>