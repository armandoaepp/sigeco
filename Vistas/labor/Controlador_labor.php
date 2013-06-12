<?php
include_once "../../Modelado/Modelo_labor.php"; 
include_once "../fecha.php";
include_once "../validacion.php"; 
function CRegistrar_labor(){
		session_start();	// lllamos a la sesion 
		$Idparcela=$_SESSION["ParcelaId"];
		$LaborFecha=fechaFormatoBD($_POST["LaborFecha_"]);
	$enlabor=new Clase_labor();
	// $enlabor->setLaborId(validar($_POST["LaborId_"]));
	$enlabor->setTipoLaborId(validar($_POST["TipoLaborId_"]));
	$enlabor->setLaborFecha(validar($LaborFecha));
	$enlabor->setLaborJornalesFamiliar(validar($_POST["LaborJornalesFamiliar_"]));
	$enlabor->setLaborJornalesContratado(validar($_POST["LaborJornalesContratado_"]));
	$enlabor->setLaborCostoUnitarioJornal(validar($_POST["LaborCostoUnitarioJornal_"]));
	$enlabor->setLaborArea(validar($_POST["LaborArea_"]));
	$enlabor->setLaborNota(validar($_POST["LaborNota_"]));
	$enlabor->setLaborTipo(validar($_POST["LaborTipo_"]));
	$enlabor->setParcelaId(validar($Idparcela));	
	$rpta=$enlabor->Insertar_labor();	
	return $rpta;
}

function CActualizar_labor(){
$enlabor=new Clase_labor();
$enlabor->setLaborId(validar($_POST["LaborId_"]));
$enlabor->setTipoLaborId(validar($_POST["TipoLaborId_"]));
$enlabor->setLaborFecha(validar($_POST["LaborFecha_"]));
$enlabor->setLaborJornalesFamiliar(validar($_POST["LaborJornalesFamiliar_"]));
$enlabor->setLaborJornalesContratado(validar($_POST["LaborJornalesContratado_"]));
$enlabor->setLaborCostoUnitarioJornal(validar($_POST["LaborCostoUnitarioJornal_"]));
$enlabor->setLaborArea(validar($_POST["LaborArea_"]));
$enlabor->setLaborNota(validar($_POST["LaborNota_"]));
$enlabor->setLaborTipo(validar($_POST["LaborTipo_"]));
$enlabor->setParcelaId(validar($_POST["ParcelaId_"]));
$rpta=$enlabor->Actualizar_labor();
return $rpta;
}

function CEliminar_labor(){
	$enlabor=new Clase_labor();
	$enlabor->setLaborId($_GET["id"]);
	$rpta=$enlabor->Eliminar_labor();
	return $rpta;
}

function CRecuperar_labor(){
$enlabor=new Clase_labor();
$enlabor->setLaborId($_GET["id"]);
$rpta=$enlabor->Recuperar_labor();
return $rpta;
}

function CListar_labor(){
$enlabor=new Clase_labor();
$rpta=$enlabor->Listar_labor();
return $rpta;
}

function CListadoSimple_labor(){
$enlabor=new Clase_labor();
$rpta=$enlabor->ListadoSimple_labor();
return $rpta;
}

function CBuscar_labor($id){
$enlabor=new Clase_labor();
$enlabor->setLaborId($id);
$rpta=$enlabor->Buscar_labor();
return $rpta;}

//Método Listar el detalle de las labores por parcela 
function CListadoDetalle_labor($idParcela){
	$enlabor=new Clase_labor();
	$enlabor->setParcelaId($idParcela);
	$rpta=$enlabor->ListadoDetalle_labor();
	return $rpta;
}
?>