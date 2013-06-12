<?php
ob_start();
include_once "./Controlador_unidadproductiva.php"; 
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
	$rpta=CRegistrar_unidadproductiva();
	if($rpta==0)$rpta="Datos Registrados Correctamente";
	echo $rpta;
break;
case "Actualizar":
$rpta=CActualizar_unidadproductiva();
$rptamo=CBuscar_unidadproductiva($_GET["id"]);
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$UnidadProductivaArea=$rptamo["cuerpo"][0]["UnidadProductivaArea"];
$UnidadProductivaComentario=$rptamo["cuerpo"][0]["UnidadProductivaComentario"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$contenido="Actualizar_unidadproductiva.php";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
	$rpta=CEliminar_unidadproductiva();
	if($rpta==0)$rpta="Registro Eliminado Correctamente";
	echo $rpta;
break;
case "Recuperar":
$rpta=CRecuperar_unidadproductiva();
break;
case "Listar":
	//$titulo="Listar personal";
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

	$data = CBuscarLike_unidadproductiva($orden,$busca);
         $Link_td="datosGenerales.php" ;
	// $idTabla, $data, $pactu, $peli, $crxpag, $paginap = 1, $cantlink = 5,$orderby = -1,$classCSS="",$link_td	
	$cantlink = 10;
	$Listar_UnidadProductiva=$cix->ImprimeTablePOB("tablaunidadproductiva",$data,"","Eliminar",15,$page,$cantlink, $orden,$busca,"tabla", $Link_td);
	echo $Listar_UnidadProductiva;
break;
case "Listarsimple":
$Listarsimple_unidadproductiva=CListadoSimple_unidadproductiva();
break;
case "Buscar":
$rpta=CBuscar_unidadproductiva();
break;
case "Nuevo":
	$titulo= "Nuevo unidadproductiva";	
	$contenido="Registrar_unidadproductiva.php";	
	echo include_once($contenido);	
	//echo $contenido;
break;
case "Mactualizar":
$rptamo=CBuscar_unidadproductiva($_GET["id"]);
$UnidadProductivaId=$rptamo["cuerpo"][0]["UnidadProductivaId"];
$UnidadProductivaArea=$rptamo["cuerpo"][0]["UnidadProductivaArea"];
$UnidadProductivaComentario=$rptamo["cuerpo"][0]["UnidadProductivaComentario"];
$ProductorId=$rptamo["cuerpo"][0]["ProductorId"];
$titulo= "Actualizar unidadproductiva";
$accionf= "?id=".$_GET["id"]."&accion=Actualizar";
$contenido="Actualizar_unidadproductiva.php";
require_once "../layout.php";
break;
}
ob_flush();
?>