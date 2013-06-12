<?php
ob_start(); 
include_once "./Controlador_unidadproductiva.php";
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
    case "Registrar":
        $rpta = CRegistrar_unidadproductiva();
		header("Location: ../unidadproductiva");			
    break;
    case "Actualizar":
        $rpta = CActualizar_unidadproductiva();
        $rptamo = CBuscar_unidadproductiva($_GET["id"]);
        $UnidadProductivaId = $rptamo["cuerpo"][0]["UnidadProductivaId"];
        $UnidadProductivaDireccion = $rptamo["cuerpo"][0]["UnidadProductivaDireccion"];
        $UnidadProductivaArea = $rptamo["cuerpo"][0]["UnidadProductivaArea"];
        $UnidadProductivaAsociacion = $rptamo["cuerpo"][0]["UnidadProductivaAsociacion"];
        $UnidadProductivaComentario = $rptamo["cuerpo"][0]["UnidadProductivaComentario"];
        $contenido = "Actualizar_unidadproductiva.php";
        $accionf = "?id=" . $_GET["id"] . "&accion=Actualizar";
        require_once "../layout.php";
		
    break;
    case "Eliminar":
        $rpta = CEliminar_unidadproductiva();
        header("Location: ../unidadproductiva");
    break;
    case "Recuperar":
        $rpta = CRecuperar_unidadproductiva();
    break;
    case "Listar":
 
      if (isset($_GET["pagina"])) {
                $page = $_GET["pagina"];
            } else {
                $page = 1;
            }
            // PARA ORDENAR LOS DATOS POR COLUMNAS
            if(isset($_GET['orden'])) {
                $orden=$_GET['orden'];
            }
            else{
                 $orden=-1;// no ordenar po defecto
            }
            // para Buscar Datos       
            if(isset($_POST['busca'])){
                 $busca=$_POST['busca'];
            }else if(isset($_GET['busca'])){
                 $busca=$_GET['busca'];
            }else{
             $busca="";
             }
 
        $titulo = "Unidad productiva";
        //$data = CListar_unidadproductiva($orden);
		$data = CBuscarLike_unidadproductiva($orden,$busca);
         $redireccion="datosGenerales.php" ;
       
        $Listar_unidadproductiva = $cix->ImprimeTablePOEB_Link("tablaunidadproductiva", $data, "", "?", 10, $page,3, $orden,$busca,$redireccion);          
        //$Listar_unidadproductiva = $cix->ImprimeTablePOEB("tablaunidadproductiva", $data, "", "?", 2, $page,5, $orden,$busca);
         //$Listar_unidadproductiva = $cix->ImprimeTablePOEB_jq("tablaBusca", $data, "?", "?", 10, $page,10, $orden,$busca);
        $contenido = "Listar_unidadproductiva.php";
        require_once "../layout.php";
    break;
    case "Listarsimple":
        $Listarsimple_unidadproductiva = CListadoSimple_unidadproductiva();
    break;
    case "Buscar":
     if (isset($_GET["pagina"])) {
			$page = $_GET["pagina"];
		} else {
			$page = 1;
		}
		// PARA ORDENAR LOS DATOS POR COLUMNAS
		if(isset($_GET['orden'])) {
			$orden=$_GET['orden'];
		}
		else{
			 $orden=-1;// no ordenar po defecto
		}
		// para Buscar Datos       
		if(isset($_POST['busca'])){
			 $busca=$_POST['busca'];
		}else if(isset($_GET['busca'])){
			 $busca=$_GET['busca'];
		}else{
		 $busca="";
		 }
 
	$titulo = "Unidad productiva";
	$data = CBuscarLike_unidadproductiva($orden,$busca);
	$redireccion="datosGenerales.php" ;
    $Listar_unidadproductiva = $cix->ImprimeTablePOEB_Link("tablaunidadproductiva", $data, "", "?", 10, $page,5, $orden,$busca,$redireccion);
	$contenido = "Listar_unidadproductiva.php";
	require_once "../layout.php";
         
 break;
case "Nuevo":
        $titulo = "Nuevo Unidad Productiva";
        $accionf = "?accion=Registrar";
        $contenido = "Registrar_unidadproductiva.php";
        require_once "../layout.php";
    break;
    case "Mactualizar":
        echo "Nada";
    break;
     case "EliminarSerie":   
        $rpta = CEliminarSerie_unidadproductiva();
        header("Location: ../unidadproductiva");
        break;
}
ob_flush();
?>