<?php
include_once "../../Modelado/Modelo_unidadproductiva.php";
include_once "../../Modelado/Modelo_productor.php"; 
include_once "../../Modelado/Modelo_telefono.php";
include_once "../validacion.php";
include_once "../fecha.php";
function CRegistrar_unidadproductiva() {	
	//Start  para Registrar Productor
	// proner la fechas en formato yyyy-mm-dd	
	$fechaIngreso=fechaFormatoBD($_POST["ProductorFechaIngreso_"]);
	$fechaNacimiento=fechaFormatoBD($_POST["ProductorFechaNac_"]);
	
/*	//******** para Cargar la Imagen **********	
	$nombre=$_FILES["imagen"]["name"];
	$tama=$_FILES["imagen"]["size"];
	$tipo=$_FILES["imagen"]["type"];
	$temporal=$_FILES["imagen"]["tmp_name"];
	
	$nombreImagen=$_POST["ProductorApellidoPat_"]."_".$_POST["ProductorApellidoMat_"]."_".$_POST["ProductorDni_"];
	//$ruta="../imagenes/productor/".$nombreImagen.".jpg";
	$ruta="../imagenes/productor/".$nombreImagen.".jpg";
	//mover o subir archivos
		// if(move_uploaded_file($temporal,$ruta)){}	
	///////////////////////////////////////////////////
*/
		
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
	// $enproductor->setProductorFoto(validar($ruta));
	$enproductor->setProductorFoto("");
	$enproductor->setEducacionId(validar($_POST["EducacionId_"]));
	$enproductor->setDistritoId(validar($_POST["DistritoId_"]));
		
	$ID=$enproductor->Insertar_productor();	// Recibo el ID del Productor
	
	if($ID!=0){
	
			
		// Start Registrar Telefono
    $entelefono = new Clase_telefono();
    $entelefono->setTelefonoId(validar($_POST["TelefonoId_"]));
    $entelefono->setTelefonoFijo(validar($_POST["TelefonoFijo_"]));
    $entelefono->setTelefonoMovil(validar($_POST["TelefonoMovil_"]));
    $entelefono->setProductorId($ID);
   $rptaTelefono = $entelefono->Insertar_telefono();
		
	// Star Registrar unidad Productiva
     $enunidadproductiva = new Clase_unidadproductiva();
    $enunidadproductiva->setUnidadProductivaId(validar($_POST["UnidadProductivaId_"]));
    $enunidadproductiva->setUnidadProductivaArea(validar($_POST["UnidadProductivaArea_"]));
    $enunidadproductiva->setUnidadProductivaComentario(validar($_POST["UnidadProductivaComentario_"]));
    $enunidadproductiva->setProductorId($ID);
    $rptaUP = $enunidadproductiva->Insertar_unidadproductiva();
	}
    return $rpta;
}

function CActualizar_unidadproductiva(){
 
	// proner la fechas en formato yyyy-mm-dd	
	$fechaIngreso=fechaFormatoBD($_POST["ProductorFechaIngreso_"]);
	$fechaNacimiento=fechaFormatoBD($_POST["ProductorFechaNac_"]);
	 //Start  para Registrar Productor	
	 // lllamos a la sesion 
	session_start();	// la sesion 
	$idProductor=$_SESSION["ProductorId"];
	$idUnidadP=$_SESSION["UnidadProductivaId"];
		
	$enproductor=new Clase_productor();
	$enproductor->setProductorId(validar($idProductor));
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
	// $enproductor->setProductorFoto(validar($ruta));
	$enproductor->setProductorFoto("");
	$enproductor->setEducacionId(validar($_POST["EducacionId_"]));
	$enproductor->setDistritoId(validar($_POST["DistritoId_"]));
		
	$ID=$enproductor->Actualizar_productor();	// Recibo el ID del Productor
	
	//if($ID==0){			
	// Start Registrar Telefono solo para el productor
    $entelefono = new Clase_telefono();
    //$entelefono->setTelefonoId(validar($_POST["TelefonoId_"]));
    $entelefono->setTelefonoFijo(validar($_POST["TelefonoFijo_"]));
    $entelefono->setTelefonoMovil(validar($_POST["TelefonoMovil_"]));
    $entelefono->setProductorId($idProductor);
   $rptaTelefono = $entelefono->Actualizar_telefono_productor();
		
	// Star Registrar unidad Productiva
	
     $enunidadproductiva = new Clase_unidadproductiva();	
	$enunidadproductiva->setUnidadProductivaId($idUnidadP);
	
	 // calculamos el Area  de la unidad productiva para un Productor 
	$rptaAreaTotal = $enunidadproductiva->AreaTotal_unidadproductiva();
	$areaTotal= $rptaAreaTotal["cuerpo"][0]["AreaTotal"];
	// enviamos los datos para actualizar la unidad productiva
   // $enunidadproductiva->setUnidadProductivaId($idUnidadP);
    $enunidadproductiva->setUnidadProductivaArea($areaTotal);
    $enunidadproductiva->setUnidadProductivaComentario(validar($_POST["UnidadProductivaComentario_"]));
    $enunidadproductiva->setProductorId($idProductor);
    $rptaUP = $enunidadproductiva->Actualizar_unidadproductiva();
	
	//}
    return $rpta;
}

function CEliminar_unidadproductiva()
{
    $enunidadproductiva = new Clase_unidadproductiva();
    $enunidadproductiva->setUnidadProductivaId($_GET["id"]);
    $rpta = $enunidadproductiva->Eliminar_unidadproductiva();
    return $rpta;
}

function CRecuperar_unidadproductiva()
{
    $enunidadproductiva = new Clase_unidadproductiva();
    $enunidadproductiva->setUnidadProductivaId();
    $rpta = $enunidadproductiva->Recuperar_unidadproductiva($dato);
    return $rpta;
}

function CListar_unidadproductiva($ordenar=1)
{
    $enunidadproductiva = new Clase_unidadproductiva();
    $rpta= $enunidadproductiva->Listar_unidadproductiva($ordenar);
    return $rpta;
}

function CListadoSimple_unidadproductiva()
{
    $enunidadproductiva = new Clase_unidadproductiva();
    $rpta= $enunidadproductiva->ListadoSimple_unidadproductiva();
    return $rpta;
}

function CBuscar_unidadproductiva($id)
{
    $enunidadproductiva = new Clase_unidadproductiva();
    $enunidadproductiva->setUnidadProductivaId($id);
    $rpta = $enunidadproductiva->Buscar_unidadproductiva();
    return $rpta;
}
function CEliminarSerie_unidadproductiva() {
    $enunidadproductiva = new Clase_unidadproductiva();
	$lista=$_POST['chk'];
  if(count($lista)>0){
  foreach($lista as $indice => $valor){//    nombre del arreglo, indice de un valor especifico, el dato seleccionado
  	$enunidadproductiva = new Clase_unidadproductiva();
    $enunidadproductiva->setUnidadProductivaId($valor);
    $rpta = $enunidadproductiva->Eliminar_unidadproductiva();   
	
  }
  }else{
	  $rpta="Seleccione un Elemento Poder Eliminar" ;
	  }
    
    return $rpta;
}
function CBuscarLike_unidadproductiva($ordenar,$dato=""){
	
    $enunidadproductiva = new Clase_unidadproductiva();
    //$enunidadproductiva->setUnidadProductivaId($dato);
    $rpta = $enunidadproductiva->BuscarLike_unidadproductiva($ordenar,$dato);
    return $rpta;
}
function CDatosGenerales_unidadproductiva($id){
    $enunidadproductiva = new Clase_unidadproductiva();
	$enunidadproductiva->setUnidadProductivaId($id);
    $rpta= $enunidadproductiva->DatosGenerales_unidadproductiva();
    return $rpta;
}
?>