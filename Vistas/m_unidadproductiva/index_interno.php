<?php
ob_start(); 
include_once "./Controlador_unidadproductiva.php";
include_once "../familiar/Controlador_familiar.php";
include_once "../productor/Controlador_productor.php";
include_once "../telefono/Controlador_telefono.php";
include_once "../general/Controlador_general.php";
include_once "../producto/Controlador_producto.php"; 
include_once "../parcela/Controlador_parcela.php"; 
include_once "../parceladetalle/Controlador_parceladetalle.php"; 
include_once "../cultivoasociado/Controlador_cultivoasociado.php"; 
include_once "../certificacion/Controlador_certificacion.php"; 
include_once "../proceso/Controlador_proceso.php"; 
include_once "../analisisquimico/Controlador_analisisquimico.php"; 

include_once "../fecha.php";
include_once "../cixphp.php";
$cix = new CixPHP();
if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else if (isset($_POST["accion"])) {
    $evento = $_POST["accion"];
}else {
    $evento = "Listar";
}
switch ($evento) {
	//Registrar un Familiar Mediante el Jdialogo 
    case "rFamiliar":
        $rpta = CRegistrar_familiar();
        header("Location: ./datosGenerales.php");
    break;
	//Actualizar un Familiar Mediante el Jdialogo 
    case "Actulizar_Familiar":
        $rpta = CRegistrar_familiar();
        header("Location: ./datosGenerales.php");
    break;
	case "Mactualizar_Familiar":
		$rptamo=CBuscar_familiar($_GET["id"]);
		$FamiliarId=$rptamo["cuerpo"][0]["FamiliarId"];
		$FamiliarApellido=$rptamo["cuerpo"][0]["FamiliarApellido"];
		$FamiliarNombre=$rptamo["cuerpo"][0]["FamiliarNombre"];
		$FamiliarSexo=$rptamo["cuerpo"][0]["FamiliarSexo"];
		$FamiliarFechaNac=$rptamo["cuerpo"][0]["FamiliarFechaNac"];
		$FamiliarParentesco=$rptamo["cuerpo"][0]["FamiliarParentesco"];
		$FamiliarOcupacion=$rptamo["cuerpo"][0]["FamiliarOcupacion"];
		$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
		$EducacionId=$rptamo["cuerpo"][0]["EducacionId"];
		//$titulo= "Actualizar familiar";
		$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
		$contenido="Actualizar_familiar.php";
		//require_once "../layout.php";
	 break;
	// Actualizar Los datos de Unidad Productiva Producto Telefono
    case "Actualizar":
        $rpta = CActualizar_unidadproductiva();
       	header("Location: ./datosGenerales.php");
	    break;   
	// Llena el Formulario Unidad Productiva para Actulizarlo
    case "Mactualizar_up":	
	session_start();	// lllamos a la sesion 
	$idProductor=$_SESSION["ProductorId"];
	$idUnidadP=$_SESSION["UnidadProductivaId"];	
		
		// datos del prductor	
		$rptamo=CBuscar_productor($idProductor);			
		$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
		$ProductorNombre=$rptamo["cuerpo"][0]["ProductorNombre"];
		$ProductorApellidoPat=$rptamo["cuerpo"][0]["ProductorApellidoPat"];
		$ProductorApellidoMat=$rptamo["cuerpo"][0]["ProductorApellidoMat"];
		$ProductorFechaIngreso=fechaFormatoPeru($rptamo["cuerpo"][0]["ProductorFechaIngreso"]);
		$ProductorFechaNac=fechaFormatoPeru($rptamo["cuerpo"][0]["ProductorFechaNac"]);
		$ProductorEstadoCivil=$rptamo["cuerpo"][0]["ProductorEstadoCivil"];
		$ProductorProfesion=$rptamo["cuerpo"][0]["ProductorProfesion"];
		$ProductorDni=$rptamo["cuerpo"][0]["ProductorDni"];
		$ProductorSexo=$rptamo["cuerpo"][0]["ProductorSexo"];
		$ProductorDireccion=$rptamo["cuerpo"][0]["ProductorDireccion"];
		$ProductorEmail=$rptamo["cuerpo"][0]["ProductorEmail"];
		//$ProductorFoto=$rptamo["cuerpo"][0]["ProductorFoto"];
		$EducacionId=$rptamo["cuerpo"][0]["EducacionId"];
		$DistritoId=$rptamo["cuerpo"][0]["DistritoId"];		
		//metodo para sabes que la provincia departamento al que pertenece el distrito
		$rptamo=CListar_Ids_Distrito($DistritoId);
		$DepartamentoId=$rptamo["cuerpo"][0]["DepartamentoId"];
		$ProvinciaId=$rptamo["cuerpo"][0]["ProvinciaId"];		
		$Productor=$ProductorApellidoPat." ". $ProductorApellidoMat .", ".$ProductorNombre;
		// datos de unidad productiva 
	 $rptamo = CBuscar_unidadproductiva($idUnidadP);		
        //$UnidadProductivaId = $rptamo["cuerpo"][0]["UnidadProductivaId"];        
        $UnidadProductivaArea = $rptamo["cuerpo"][0]["UnidadProductivaArea"];       
        $UnidadProductivaComentario = $rptamo["cuerpo"][0]["UnidadProductivaComentario"];
	
		
		//datos del telefono
	$rptamo=CBuscar_telefono_productor($idProductor);
		$TelefonoId=$rptamo["cuerpo"][0]["TelefonoId"];
		$TelefonoFijo=$rptamo["cuerpo"][0]["TelefonoFijo"];
		$TelefonoMovil=$rptamo["cuerpo"][0]["TelefonoMovil"];
		//$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
		//$ClienteId=$rptamo["cuerpo"][0]["ClienteId"];
		//$AgendaId=$rptamo["cuerpo"][0]["AgendaId"];
		
        $titulo = "Actualizar Unidad Productiva";
        $accionf = "?id=" .$idUnidadP . "&accion=Actualizar";
        $contenido = "Actualizar_unidadproductiva.php";
        require_once "./layout_interno.php";
    break;
	// Llamanos al Formulario Nuevo Producto
	case "NuevoProducto":
	session_start();	// lllamos a la sesion 
	$idProductor=$_SESSION["ProductorId"];
	$idUnidadP=$_SESSION["UnidadProductivaId"];	
        $titulo = "Nuevo Producto ";
        $accionf = "index_interno.php?accion=RegistrarProducto";
		$contenido = "../producto/Registrar_producto.php";        
        require_once "./layout_interno.php";
    break;
	//Registrar Producto
    case "RegistrarProducto":
        $rpta = CRegistrar_producto(); 	   
    	header("Location: ./producto.php");
    break;
	//Abrir el frm Parcela (Añadir)
    case "NuevoParcela":
	session_start();	// lllamos a la sesion 
	$idProductor=$_SESSION["ProductorId"];
	$idUnidadP=$_SESSION["UnidadProductivaId"];	
        $titulo = "Nuevo Parcela ";
        $accionf = "index_interno.php?accion=RegistrarParcela";
        $contenido = "../parcela/Registrar_parcela.php";
        require_once "./layout_interno.php";      
    break;
	//Registrar Parcela (Añadir)
	case "RegistrarParcela":	
	    $rpta = CRegistrar_parcela(); 
		if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
		echo "<META HTTP-EQUIV = REFRESH CONTENT='1;URL=./parcela.php'>";  	   
    	//header("Location: ./parcela.php");		
    break;
	//para sacar los datos de una parcela 
	 case "Mactualizar_par":
	 	session_start();	// lllamos a la sesion 
		$IDParcela=$_SESSION["ParcelaId"];		   
		//$rptamo=CBuscar_parcela($_GET["idP"]);
		$rptamo=CBuscar_parcela($_SESSION["ParcelaId"]);
		$ParcelaId=$rptamo["cuerpo"][0]["ParcelaId"];
		$ParcelaNombre=$rptamo["cuerpo"][0]["ParcelaNombre"];
		//$area=explode(' ', $rptamo["cuerpo"][0]["ParcelaArea"]);
		$ParcelaArea=$rptamo["cuerpo"][0]["ParcelaArea"];	//$area[0];	
		$BaseId=$rptamo["cuerpo"][0]["BaseId"];
		$ParcelaCaserio=$rptamo["cuerpo"][0]["ParcelaCaserio"];
		$DistritoId=$rptamo["cuerpo"][0]["DistritoId"];		
		$ProvinciaId=$rptamo["cuerpo"][0]["ProvinciaId"];
		$DepartamentoId=$rptamo["cuerpo"][0]["DepartamentoId"];		
		$titulo= "Actualizar parcela";
		$accionf= "?accion=ActualizarParcela";
		$contenido="../parcela/Actualizar_parcela.php";
		require_once "./layout_interno.php";
    break;
	//Registrar Parcela (Añadir)
	case "ActualizarParcela":	
	    $rpta = CActualizar_parcela(); 
		if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
		echo "<META HTTP-EQUIV = REFRESH CONTENT='1;URL=./d_parcela.php'>";  	   
    	//header("Location: ./parcela.php");
	break;
      case "RegistrarParceladetalle":
			$rpta=CRegistrar_parceladetalle();
			if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
		echo "<META HTTP-EQUIV = REFRESH CONTENT='1;URL=./d_parcela.php'>";		
	break;
	//truco para registrar la sesion el Id de la parcela
    case "DetalleParcela":
		session_start();	// lllamos a la sesion 
		$_SESSION["ParcelaId"]=$_GET["idP"];
		//echo " secion :  : : ".$_SESSION["ParcelaId"];
        header("Location: ./d_parcela.php");
    break;
	// Registrar Producto Asociado 
    case "RegistrarCultivoAsociado":
       $rpta=CRegistrar_cultivoasociado();
			if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
		echo "<META HTTP-EQUIV = REFRESH CONTENT='1;URL=./d_parcela.php'>";
    break;
	// Registrar Certificaciones para una Parcela 
	case "RegistrarCertificacion":
       $rpta=CRegistrar_Certificacion();
			if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
		echo "<META HTTP-EQUIV = REFRESH CONTENT='1;URL=./d_parcela.php'>";
    break;
	// Registrar Proceso 
	case "RegistrarProceso":
       $rpta=CRegistrar_proceso();
		if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
		echo "<META HTTP-EQUIV = REFRESH CONTENT='1; URL=./procesamiento.php'>";
    break;
	// Actulizar Proceso 
	case "ActualizarProceso":
       $rpta=CActualizar_proceso();
		if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
		echo "<META HTTP-EQUIV = REFRESH CONTENT='1; URL=./procesamiento.php'>";
    break;
   
   // Registrar  RegistrarAnalisisQuimico
	case "RegistrarAnalisisQuimico":
       $rpta=CRegistrar_analisisquimico();
		if($rpta==0){
			echo "Datos Registrados Correctamente ";
			}else{
				echo $rpta;
			}
	//	echo "<META HTTP-EQUIV = REFRESH CONTENT=';URL=./suelo.php'>";
    break;
	//eliminar analisis Jquery
	case "EliminarAnalisis":
       $rpta=CEliminar_analisisquimico($_POST["id"]);	
	   echo $rpta;	
    break;
}
ob_flush();
?>