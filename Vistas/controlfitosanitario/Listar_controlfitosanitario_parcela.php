
<?php 

include_once "../cixajax.php"; 
include_once "../fecha.php"; 
$cix=new CixAJAX();
/*if(isset($_POST["accion"])){
$evento=$_POST["accion"];
} else if(isset($_GET["accion"])){
$evento=$_GET["accion"];
}else{
$evento="Listar";
}*/
include_once("Controlador_controlfitosanitario.php");
	$data=CBuscar_controlfitosanitario_xIdParcela($_GET["idParcela"]);
		//$data=CBuscar_controlfitosanitario_xIdParcela(4);
		$Listar_controlfitosanitario=$cix->ImprimeTable("TablaControl",$data,"ok","ok","");
		echo $Listar_controlfitosanitario;

?>

