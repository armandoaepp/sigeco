<?php
// Controla todos los metodos  internos de la unidad productiva 
include_once "../../Modelado/Modelo_unidadproductiva.php";
include_once "../../Modelado/Modelo_productor.php"; 
include_once "../../Modelado/Modelo_telefono.php";
include_once "../validacion.php";
include_once "../fecha.php";
// para Actualizar una unidad productiva
function CActualizar_unidadproductiva()
{
    $enunidadproductiva = new Clase_unidadproductiva();
	/*
    $enunidadproductiva->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
    $enunidadproductiva->setUnidadProductivaArea(validar($_POST["UnidadProductivaArea_"]));
    $enunidadproductiva->setUnidadProductivaComentario(validar($_POST["UnidadProductivaComentario_"]));
    $enunidadproductiva->setProductorId(validar($_POST["ProductorId_"]));
	*/
	
	$fechaIngreso=fechaFormatoBD($_POST["ProductorFechaIngreso_"]);
	$fechaNacimiento=fechaFormatoBD($_POST["ProductorFechaNac_"]);
	$enproductor->setProductorId(validar($_POST["ProductorId_"]));
	$enproductor->setProductorNombre(validar($_POST["ProductorNombre_"]));
	$enproductor->setProductorApellidoPat(validar($_POST["ProductorApellidoPat_"]));
	$enproductor->setProductorApellidoMat(validar($_POST["ProductorApellidoMat_"]));
	$enproductor->setProductorFechaIngreso(validar($fechaIngreso));
	$enproductor->setProductorFechaNac(validar($fechaNacimiento));
	$enproductor->setProductorEstadoCivil(validar($_POST["ProductorEstadoCivil_"]));
	$enproductor->setProductorProfesion(validar($_POST["ProductorProfesion_"]));
	$enproductor->setProductorDni(validar($_POST["ProductorDni_"]));
	$enproductor->setProductorSexo(validar($_POST["ProductorSexo_"]));
	$enproductor->setProductorDireccion(validar($_POST["ProductorDireccion_"]));
	$enproductor->setProductorEmail(validar($_POST["ProductorEmail_"]));
	$enproductor->setProductorFoto(validar($ruta));
	$enproductor->setEducacionId(validar($_POST["EducacionId_"]));
	$enproductor->setDistritoId(validar($_POST["DistritoId_"]));
	
	$rpta = $enunidadproductiva->Actualizar_unidadproductiva();
	
	// Start Actualizar Telefonos
    $entelefono = new Clase_telefono();
    $entelefono->setTelefonoId(validar($_POST["TelefonoId_"]));
    $entelefono->setTelefonoFijo(validar($_POST["TelefonoFijo_"]));
    $entelefono->setTelefonoMovil(validar($_POST["TelefonoMovil_"]));
    $entelefono->setProductorId($ID);
   $rptaTelefono = $entelefono->Actualizar_telefono();
		
	// Star Actualizar unidad Productiva
     $enunidadproductiva = new Clase_unidadproductiva();
    $enunidadproductiva->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
    $enunidadproductiva->setUnidadProductivaArea(validar($_POST["UnidadProductivaArea_"]));
    $enunidadproductiva->setUnidadProductivaComentario(validar($_POST["UnidadProductivaComentario_"]));
    $enunidadproductiva->setProductorId($ID);
    $rptaUP = $enunidadproductiva->Actualizar_unidadproductiva();
	
    
	
    return $rpta;
}


function CRegistrar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId(validar($_POST["FamiliarId_"]));
$enfamiliar->setFamiliarApellido(validar($_POST["FamiliarApellido_"]));
$enfamiliar->setFamiliarNombre(validar($_POST["FamiliarNombre_"]));
$enfamiliar->setFamiliarSexo(validar($_POST["FamiliarSexo_"]));
$enfamiliar->setFamiliarFechaNac(validar($_POST["FamiliarFechaNac_"]));
$enfamiliar->setFamiliarParentesco(validar($_POST["FamiliarParentesco_"]));
$enfamiliar->setFamiliarOcupacion(validar($_POST["FamiliarOcupacion_"]));
$enfamiliar->setProductorId(validar($_POST["ProductorId_"]));
$enfamiliar->setEducacionId(validar($_POST["EducacionId_"]));
$rpta=$enfamiliar->Insertar_familiar();
return $rpta;
}

function CActualizar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId(validar($_POST["FamiliarId_"]));
$enfamiliar->setFamiliarApellido(validar($_POST["FamiliarApellido_"]));
$enfamiliar->setFamiliarNombre(validar($_POST["FamiliarNombre_"]));
$enfamiliar->setFamiliarSexo(validar($_POST["FamiliarSexo_"]));
$enfamiliar->setFamiliarFechaNac(validar($_POST["FamiliarFechaNac_"]));
$enfamiliar->setFamiliarParentesco(validar($_POST["FamiliarParentesco_"]));
$enfamiliar->setFamiliarOcupacion(validar($_POST["FamiliarOcupacion_"]));
$enfamiliar->setProductorId(validar($_POST["ProductorId_"]));
$enfamiliar->setEducacionId(validar($_POST["EducacionId_"]));
$rpta=$enfamiliar->Actualizar_familiar();
return $rpta;
}

function CEliminar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId($_GET["id"]);
$rpta=$enfamiliar->Eliminar_familiar();
return $rpta;
}

function CRecuperar_familiar(){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId($_GET["id"]);
$rpta=$enfamiliar->Recuperar_familiar();
return $rpta;
}

function CListar_familiar(){
$enfamiliar=new Clase_familiar();
$rpta=$enfamiliar->Listar_familiar();
return $rpta;
}

function CListadoSimple_familiar(){
$enfamiliar=new Clase_familiar();
$rpta=$enfamiliar->ListadoSimple_familiar();
return $rpta;
}

function CBuscar_familiar($id){
$enfamiliar=new Clase_familiar();
$enfamiliar->setFamiliarId($id);
$rpta=$enfamiliar->Buscar_familiar();
return $rpta;}
?>