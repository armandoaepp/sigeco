<?php 
ob_start();
include_once "./Controlador_parcela.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if (isset($_GET["accion"])) {
    $evento = $_GET["accion"];
} else if (isset($_POST["accion"])) {
    $evento = $_POST["accion"];
}else {
    $evento = "";
}
switch($evento){
case "Listar":
$titulo="Listar parcela";
$data=CListar_parcela();
if(isset($_GET["pagina"])){
$page=$_GET["pagina"];}
else{$page=1;}
$Listar_parcela=$cix->ImprimeTable("tablaparcela",$data,"?","?",5,$page);
$contenido="Listar_parcela.php";
require_once "../layout.php";
break;
 case "Eliminar": 
	$rpta = CEliminar_parcela();  
	if($rpta==0)$rpta="Registro Eliminado Correctamente";  
	echo  $rpta;
 break;
}
ob_flush();
?>