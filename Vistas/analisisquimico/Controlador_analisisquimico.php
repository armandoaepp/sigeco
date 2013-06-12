<?php
include_once "../../Modelado/Modelo_analisisquimico.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php";
function CRegistrar_analisisquimico(){
		
	$enanalisisquimico=new Clase_analisisquimico();	
	
	$AnalisisQuimicoFecha_=fechaFormatoBD($_POST["AnalisisQuimicoFecha_"]);	
	//$enanalisisquimico->setAnalisisQuimicoId(validar($_POST["AnalisisQuimicoId_"]));
	$enanalisisquimico->setAnalisisQuimicoFecha(validar($AnalisisQuimicoFecha_));
	$enanalisisquimico->setAnalisisQuimicoPh(validar($_POST["AnalisisQuimicoPh_"]));
	$enanalisisquimico->setAnalisisQuimicoMateria(validar($_POST["AnalisisQuimicoMateria_"]));
	$enanalisisquimico->setAnalisisQuimicoCarbono(validar($_POST["AnalisisQuimicoCarbono_"]));
	$enanalisisquimico->setAnalisisQuimicoNt(validar($_POST["AnalisisQuimicoNt_"]));
	$enanalisisquimico->setAnalisisQuimicoN(validar($_POST["AnalisisQuimicoN_"]));
	$enanalisisquimico->setAnalisisQuimicoMo(validar($_POST["AnalisisQuimicoMo_"]));
	$enanalisisquimico->setAnalisisQuimicoK(validar($_POST["AnalisisQuimicoK_"]));
	$enanalisisquimico->setAnalisisQuimicoCa(validar($_POST["AnalisisQuimicoCa_"]));
	$enanalisisquimico->setAnalisisQuimicoMg(validar($_POST["AnalisisQuimicoMg_"]));
	$enanalisisquimico->setAnalisisQuimicoNa(validar($_POST["AnalisisQuimicoNa_"]));
	$enanalisisquimico->setAnalisisQuimicoAl(validar($_POST["AnalisisQuimicoAl_"]));
	$enanalisisquimico->setAnalisisQuimicoH(validar($_POST["AnalisisQuimicoH_"]));
	$enanalisisquimico->setAnalisisQuimicoCIC(validar($_POST["AnalisisQuimicoCIC_"]));
	$enanalisisquimico->setAnalisisQuimicoP2(validar($_POST["AnalisisQuimicoP2_"]));
	$enanalisisquimico->setAnalisisQuimicoP(validar($_POST["AnalisisQuimicoP_"]));
	$enanalisisquimico->setAnalisisQuimicoFe(validar($_POST["AnalisisQuimicoFe_"]));
	$enanalisisquimico->setAnalisisQuimicoMn(validar($_POST["AnalisisQuimicoMn_"]));
	$enanalisisquimico->setAnalisisQuimicoBoro(validar($_POST["AnalisisQuimicoBoro_"]));
	$enanalisisquimico->setAnalisisQuimicoZn(validar($_POST["AnalisisQuimicoZn_"]));
	$enanalisisquimico->setAnalisisQuimicoAzufre(validar($_POST["AnalisisQuimicoAzufre_"]));
	$enanalisisquimico->setAnalisisQuimicoCu(validar($_POST["AnalisisQuimicoCu_"]));
	$enanalisisquimico->setAnalisisQuimicoAr(validar($_POST["AnalisisQuimicoAr_"]));
	$enanalisisquimico->setAnalisisQuimicoA(validar($_POST["AnalisisQuimicoA_"]));
	$enanalisisquimico->setAnalisisQuimicoDescripcion(validar($_POST["AnalisisQuimicoDescripcion_"]));
	$enanalisisquimico->setParcelaId(validar($_POST["ParcelaId_"]));
	$enanalisisquimico->setAnalisisQuimicoL(validar($_POST["AnalisisQuimicoL_"]));

	$rpta=$enanalisisquimico->Insertar_analisisquimico();
	return $rpta;
}

function CActualizar_analisisquimico(){
	$enanalisisquimico=new Clase_analisisquimico();
	$AnalisisQuimicoFecha_=fechaFormatoBD($_POST["AnalisisQuimicoFecha_"]);	
		
	$enanalisisquimico->setAnalisisQuimicoId(validar($_POST["AnalisisQuimicoId_"]));
	$enanalisisquimico->setAnalisisQuimicoFecha(validar($AnalisisQuimicoFecha_));
	$enanalisisquimico->setAnalisisQuimicoPh(validar($_POST["AnalisisQuimicoPh_"]));
	$enanalisisquimico->setAnalisisQuimicoMateria(validar($_POST["AnalisisQuimicoMateria_"]));
	$enanalisisquimico->setAnalisisQuimicoCarbono(validar($_POST["AnalisisQuimicoCarbono_"]));
	$enanalisisquimico->setAnalisisQuimicoNt(validar($_POST["AnalisisQuimicoNt_"]));
	$enanalisisquimico->setAnalisisQuimicoN(validar($_POST["AnalisisQuimicoN_"]));
	$enanalisisquimico->setAnalisisQuimicoMo(validar($_POST["AnalisisQuimicoMo_"]));
	$enanalisisquimico->setAnalisisQuimicoK(validar($_POST["AnalisisQuimicoK_"]));
	$enanalisisquimico->setAnalisisQuimicoCa(validar($_POST["AnalisisQuimicoCa_"]));
	$enanalisisquimico->setAnalisisQuimicoMg(validar($_POST["AnalisisQuimicoMg_"]));
	$enanalisisquimico->setAnalisisQuimicoNa(validar($_POST["AnalisisQuimicoNa_"]));
	$enanalisisquimico->setAnalisisQuimicoAl(validar($_POST["AnalisisQuimicoAl_"]));
	$enanalisisquimico->setAnalisisQuimicoH(validar($_POST["AnalisisQuimicoH_"]));
	$enanalisisquimico->setAnalisisQuimicoCIC(validar($_POST["AnalisisQuimicoCIC_"]));
	$enanalisisquimico->setAnalisisQuimicoP2(validar($_POST["AnalisisQuimicoP2_"]));
	$enanalisisquimico->setAnalisisQuimicoP(validar($_POST["AnalisisQuimicoP_"]));
	$enanalisisquimico->setAnalisisQuimicoFe(validar($_POST["AnalisisQuimicoFe_"]));
	$enanalisisquimico->setAnalisisQuimicoMn(validar($_POST["AnalisisQuimicoMn_"]));
	$enanalisisquimico->setAnalisisQuimicoBoro(validar($_POST["AnalisisQuimicoBoro_"]));
	$enanalisisquimico->setAnalisisQuimicoZn(validar($_POST["AnalisisQuimicoZn_"]));
	$enanalisisquimico->setAnalisisQuimicoAzufre(validar($_POST["AnalisisQuimicoAzufre_"]));
	$enanalisisquimico->setAnalisisQuimicoCu(validar($_POST["AnalisisQuimicoCu_"]));
	$enanalisisquimico->setAnalisisQuimicoAr(validar($_POST["AnalisisQuimicoAr_"]));
	$enanalisisquimico->setAnalisisQuimicoA(validar($_POST["AnalisisQuimicoA_"]));
	$enanalisisquimico->setAnalisisQuimicoDescripcion(validar($_POST["AnalisisQuimicoDescripcion_"]));
	$enanalisisquimico->setParcelaId(validar($_POST["ParcelaId_"]));
	$enanalisisquimico->setAnalisisQuimicoL(validar($_POST["AnalisisQuimicoL_"]));
	$rpta=$enanalisisquimico->Actualizar_analisisquimico();
	return $rpta;
}

function CEliminar_analisisquimico($id){
$enanalisisquimico=new Clase_analisisquimico();
$enanalisisquimico->setAnalisisQuimicoId($id);
$rpta=$enanalisisquimico->Eliminar_analisisquimico();
return $rpta;
}

function CRecuperar_analisisquimico(){
$enanalisisquimico=new Clase_analisisquimico();
$enanalisisquimico->setAnalisisQuimicoId($_GET["id"]);
$rpta=$enanalisisquimico->Recuperar_analisisquimico();
return $rpta;
}

function CListar_analisisquimico(){
$enanalisisquimico=new Clase_analisisquimico();
$rpta=$enanalisisquimico->Listar_analisisquimico();
return $rpta;
}

function CListadoSimple_analisisquimico(){
$enanalisisquimico=new Clase_analisisquimico();
$rpta=$enanalisisquimico->ListadoSimple_analisisquimico();
return $rpta;
}

function CBuscar_analisisquimico($id){
$enanalisisquimico=new Clase_analisisquimico();
$enanalisisquimico->setAnalisisQuimicoId($id);
$rpta=$enanalisisquimico->Buscar_analisisquimico();
return $rpta;}

function CLista_analisisquimico_xUnidadProductiva($id){
	$enanalisisquimico=new Clase_analisisquimico();
		$enanalisisquimico->setUnidadProductivaId($id);
	$rpta=$enanalisisquimico->Lista_analisisquimico_xUnidadProductiva();
	return $rpta;
}
?>