<?php
include_once "../../Modelado/Modelo_productor.php"; 
include_once "../validacion.php"; 
include_once "../fecha.php";
function CRegistrar_productor(){
	
	$fechaIngreso=fechaFormatoBD($_POST["ProductorFechaIngreso_"]);
	$fechaNacimiento=fechaFormatoBD($_POST["ProductorFechaNac_"]);
	
	//******** para Cargar la Imagen **********	
	$nombre=$_FILES["imagen"]["name"];
	$tama=$_FILES["imagen"]["size"];
	$tipo=$_FILES["imagen"]["type"];
	$temporal=$_FILES["imagen"]["tmp_name"];
	
	$nombreImagen=$_POST["ProductorApellidoPat_"]."_".$_POST["ProductorApellidoMat_"]."_".$_POST["ProductorDni_"];
	
	$ruta="../imagenes/productor/".$nombreImagen.".jpg";
	//mover o subir archivos
		// if(move_uploaded_file($temporal,$ruta)){}	
	///////////////////////////////////////////////////
	
$enproductor=new Clase_productor();
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
	

	if(!move_uploaded_file($temporal,$ruta)){
		$rpta=$enproductor->Insertar_productor();
		if($rpta=0){
			$rpta="No se puede Cagar el Foto";
		}
		}else { 
			$rpta="Datos Correctamente";
		}
	return $rpta;
}

function CActualizar_productor(){
$enproductor=new Clase_productor();
$enproductor->setProductorId(validar($_POST["ProductorId_"]));
$enproductor->setProductorNombre(validar($_POST["ProductorNombre_"]));
$enproductor->setProductorApellidoPat(validar($_POST["ProductorApellidoPat_"]));
$enproductor->setProductorApellidoMat(validar($_POST["ProductorApellidoMat_"]));
$enproductor->setProductorFechaIngreso(validar($_POST["ProductorFechaIngreso_"]));
$enproductor->setProductorFechaNac(validar($_POST["ProductorFechaNac_"]));
$enproductor->setProductorEstadoCivil(validar($_POST["ProductorEstadoCivil_"]));
$enproductor->setProductorProfesion(validar($_POST["ProductorProfesion_"]));
$enproductor->setProductorDni(validar($_POST["ProductorDni_"]));
$enproductor->setProductorSexo(validar($_POST["ProductorSexo_"]));
$enproductor->setProductorDireccion(validar($_POST["ProductorDireccion_"]));
$enproductor->setProductorEmail(validar($_POST["ProductorEmail_"]));
$enproductor->setProductorFoto(validar($_POST["ProductorFoto_"]));
$enproductor->setEducacionId(validar($_POST["EducacionId_"]));
$enproductor->setDistritoId(validar($_POST["DistritoId_"]));
$rpta=$enproductor->Actualizar_productor();
return $rpta;
}

function CEliminar_productor(){
	echo "id:  ".$_GET["id"];
$enproductor=new Clase_productor();//instancio a la clase Clase_productor  creo el objeto $enproductor; 
$enproductor->setProductorId($_GET["id"]); //setProductorId asigna el valor a cada variable
$rpta=$enproductor->Eliminar_productor();// $rpta almacena el resultado de la function Eliminar_productor() atraves del objeto $enproductor instanciado de la clase 
return $rpta; // retorno la variable 
}

function CRecuperar_productor(){
$enproductor=new Clase_productor();
$enproductor->setProductorId($_GET["id"]);
$rpta=$enproductor->Recuperar_productor();
return $rpta;
}
/*llamanos el funcion Listar_productor() del modelo productor*/
function CListar_productor(){
$enproductor=new Clase_productor();
$rpta=$enproductor->Listar_productor();
return $rpta;
}

function CListadoSimple_productor(){
$enproductor=new Clase_productor();
$rpta=$enproductor->ListadoSimple_productor();
return $rpta;
}

function CBuscar_productor($id){
$enproductor=new Clase_productor();
$enproductor->setProductorId($id);
$rpta=$enproductor->Buscar_productor();
return $rpta;}

function CBuscar_productor_xDNI($dni){
$enproductor=new Clase_productor();
$enproductor->setProductorDni($dni);
$rpta=$enproductor->Buscar_productor_xDNI();
return $rpta;}
?>