<?php 
ob_start();
include_once "./Controlador_acopio.php";
include_once "../unidadproductiva/Controlador_unidadproductiva.php"; 
include_once "../fecha.php";
include_once "../cixajax.php"; 

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
	$rpta=CRegistrar_acopio();
	echo $rpta ;
break;
case "Actualizar":
	$rpta=CActualizar_acopio();
	echo $rpta ;
break;
case "Eliminar":
	$rpta=CEliminar_acopio();
	header("Location: ../acopio");
break;
	case "Recuperar":
	$rpta=CRecuperar_acopio();
break;
case "Listar":
	$titulo="Listar acopio";
	
	//if(isset($_GET["pagina"])){
	//$Listar_acopio=$cix->ImprimeTable("tablaacopio",$data,"?","?",5,$page);
	//$contenido="Listar_acopio.php";
	//require_once "../layout.php";
	
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

	//$data = CBuscarLike_unidadproductiva($orden,$busca);
		$data=CListar_acopio($orden,$busca);
         $Link_td="acopio_detalle.php" ;
	// $idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1, $cantlink = 5,$orderby = -1,$classCSS="",$link_td	
	$cantlink = 10;
	$Listar_acopio=$cix->ImprimeTablePOB("tablaacopio",$data,"","",15,$page,$cantlink, $orden,$busca,"tabla", $Link_td);
	echo $Listar_acopio;
	
break;
case "Listarsimple":
$Listarsimple_acopio=CListadoSimple_acopio();
break;
case "Buscar":
$rpta=CBuscar_acopio();
break;
case "Nuevo":
	$titulo= "Nuevo acopio";
	$accionf="";
	$contenido="Registrar_acopio_Productor.php";
	include_once($contenido);
	//require_once "../layout.php";
break;
case "NuevoAcopio":
	$accionf="";
	$data=CBuscar_unidadproductiva_ProductorDNI($_GET["dni"]);
	$cant=count($data["cuerpo"]);
	if($cant>0){
		$UnidadProductivaId_=$data["cuerpo"][0]["UnidadProductivaId"];
		$ProductorNombre_=$data["cuerpo"][0]["ProdcutorNombre"];
		$AcopioFecha_=fechaActualSistema();
		$titulo= "Nuevo acopio";
		$contenido="Registrar_acopio.php";
		include_once($contenido);	
	}else {
		echo "Ningun Productor Registrado con este DNI";	
			}
	
	
break;
case "Mactualizar":
	$rptamo=CBuscar_acopio($_GET["id"]);
break;
case "GenerarGuiaAcopio":		
	$data=CSerieNumero_GuiaAcopio();
	echo $data["cuerpo"][0]["GuiaSerieNumero"];;
	//echo '{"items":'. json_encode($data["cuerpo"]).'}';
break;

}
ob_flush();
?>