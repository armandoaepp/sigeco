<?php 
ob_start();
include_once "./Controlador_personal.php"; 
include_once "../cixajax.php"; 
include_once "../fecha.php";
include_once "../cixExportar.php";

$cix=new CixAJAX();
if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else if (isset($_POST["accion"])) {
    $evento = $_POST["accion"];
}else {
    $evento = "Listar";
}
switch($evento){
case "Registrar":
	$rpta=CRegistrar_personal();
	if($rpta==0)$rpta="Datos Registrados Correctamente";
	echo $rpta;
	
break;
case "Actualizar":
$rpta=CActualizar_personal();
if($rpta==0)$rpta="Registro Actulizado Correctamente";
	echo $rpta;
break;
case "Eliminar":
$rpta=CEliminar_personal();
if($rpta==0)$rpta="Registro Eliminado Correctamente";
	echo $rpta;
break;
case "Recuperar":
$rpta=CRecuperar_personal();
break;
	case "Listar":
	$titulo="Listar personal";
	//$data=CListar_personal();
	if(isset($_GET["pagina"])){
	$page=$_GET["pagina"];}
	else{$page=1;}
	
	// PARA ORDENAR LOS DATOS POR COLUMNAS
		if (isset($_GET["pagina"])) {
                $page = $_GET["pagina"];
            } else {
                $page = 1;
            }
            // PARA ORDENAR LOS DATOS POR COLUMNAS
            if(isset($_GET['orden'])) {
                $orden=$_GET['orden'];
            }else{
                 $orden=-1;// no ordenar po defecto
            }
            // para Buscar Datos       
            if(isset($_POST['busca'])){// viene del frm
                 $busca=$_POST['busca'];
            }else if(isset($_GET['busca'])){// viene de la pagina o del ordenar
                 $busca=$_GET['busca'];
            }else{
             $busca="";
             }
			// echo "<br> busca:: $busca <br>";
	$data=CListar_personal_parametro($orden,$busca);
	// $idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1, $cantlink = 5,$orderby = -1,$classCSS="",$link_td	
	$cantlink = 10;
	//$Listar_personal=$cix->ImprimeTablep("tablapersonal",$data,"ModalPersonal","Eliminar",10,$page,$cantlink, $orden,$busca,"tabla");
	$Listar_personal=$cix->ImprimeTablePOB("tablapersonal",$data,"ModalPersonal","Eliminar",10,$page,$cantlink, $orden,$busca,"tabla","");
	/*$contenido="Listar_personal.php";
	require_once "../layout.php";*/
	//session_start();
	//$_SESSION["tabla"]=$Listar_personal;
	echo $Listar_personal;
break;
case "Listarsimple":
	//$Listarsimple_personal=CListar_personal();
	
	$Listar_personal=$cix->ImprimeTableP("tablaProducto",$data,"?","?",10,10);//ImprimeTableP("tablapersonal",$data,"?","?",10,$page);
	//$contenido="Listar_personal.php";
	//@include_once($contenido);
	echo $Listar_personal;
break;
case "Buscar":
$rpta=CBuscar_personal();
break;
case "Nuevo":
$titulo= "Nuevo personal";
$accionf= "?accion=Registrar";
$contenido="Registrar_personal.php";
require_once "../layout.php";
break;
case "OpenFrmModal":
	if(isset($_POST["id"])){
	$rptamo=CBuscar_personal($_POST["id"]);
	$PersonalId=$rptamo["cuerpo"][0]["PersonalId"];
	$PersonalFechaIngreso=$rptamo["cuerpo"][0]["PersonalFechaIngreso"];
	$PersonalDni=$rptamo["cuerpo"][0]["PersonalDni"];
	$PersonalApellido=$rptamo["cuerpo"][0]["PersonalApellido"];
	$PersonalNombre=$rptamo["cuerpo"][0]["PersonalNombre"];
	$PersonalSexo=$rptamo["cuerpo"][0]["PersonalSexo"];
	$PersonalFechaNac=$rptamo["cuerpo"][0]["PersonalFechaNac"];
	$PersonalEmail=$rptamo["cuerpo"][0]["PersonalEmail"];
	$PersonalDireccion=$rptamo["cuerpo"][0]["PersonalDireccion"];
	$PersonalTelefono=$rptamo["cuerpo"][0]["PersonalTelefono"];
	$PersonalEstado=$rptamo["cuerpo"][0]["PersonalEstado"];
	$contenido="Actualizar_personal.php";
	}else{ $contenido="Registrar_personal.php";	}
	include_once($contenido);	
break;
case "Buscar_xDNI":
	$data=CBuscar_personal_xDNI($_POST["dni"]);
	echo '{"items":'. json_encode($data["cuerpo"]).'}'; 
	
break;
case "Exportar":
	$data=CListar_Exportar_personal();
	$cantidad=count($data["cuerpo"]);
	if($cantidad>0){
	$tabla=$cix->ImprimeTable("",$data,"","","");
		
		if (isset($_GET["tipo"])) {
			$tipo = $_GET["tipo"];
		} else if (isset($_POST["accion"])) {
			$tipo = $_GET["tipo"];;
		}
		switch($tipo){
			case "excel":
				Exportar_EXCEL($tabla,"Lista_Personal");
			break;			
			case "word":
				Exportar_WORD($tabla,"Lista_Personal");
			break;
			case "html":
				Exportar_HTML($tabla,"Lista_Personal");
			break;			
			case "pdf":
				// Exportar_PDF($data);
			break;
			
			
			}

		
	}
	
	
break;
}

ob_flush();
?>