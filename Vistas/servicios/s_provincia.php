<?php
include_once '../../Modelado/conexion.php';
$con= new Conexion();
// recibe desde js_provincia variable metodo
$metodo=$_POST["metodo"];

$idpais=$_POST["pais"];
$iddep=$_POST["departamento"];
$idProvincia=$_POST["provincia"];

//$metodo="ListarPais";
switch ($metodo){
	case "ListarPais":	
	$sql= "Select * from pais";
			$data=$con->Listar($sql);
			echo '{"items":'. json_encode($data["cuerpo"]).'}';  // este va la json la variables items
	break;
	
	case "ListarDepartamento":	
	$sql= "Select * from departamento where PaisId=".$idpais;
			$bu_dep=$con->Listar($sql);
			echo '{"items":'. json_encode($bu_dep["cuerpo"]).'}';  // este va la json la variables items
	break;
	
	case "ListarProvincia":	
	$sql= "Select * from provincia where DepartamentoId=".$iddep;
			$bu_pro=$con->Listar($sql);
			echo '{"items":'. json_encode($bu_pro["cuerpo"]).'}';  // este va la json la variables items
	break;
	
	case "ListarDistritos":	
	$sql= "Select * from distrito where ProvinciaId=".$idProvincia;
			$data=$con->Listar($sql);
			echo '{"items":'. json_encode($data["cuerpo"]).'}';  // este va la json la variables items
	break;
	}

?>