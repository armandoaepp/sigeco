<?php

include_once '../../Modelado/conexion.php';

$con= new Conexion();

$metodo=$_POST["metodo"];

$iddep=$_POST["departamento"];
switch ($metodo){
	case "ListarPais":
	
	$sql= "Select * from pais";
			$data=$con->Listar($sql);
			echo '{"items":'. json_encode($data["cuerpo"]).'}';  // este va la json la variables items
	break;
	case "Listardep":
	
	$sql= "Select * from departamento";
			$bu_dep=$con->Listar($sql);
			echo '{"items":'. json_encode($bu_dep["cuerpo"]).'}';  // este va la json la variables items
	break;
	
	case "ListarPro":
	
	$sql= "Select * from provincia where DepartamentoId=".$iddep;
			$bu_pro=$con->Listar($sql);
			echo '{"items":'. json_encode($bu_pro["cuerpo"]).'}';  // este va la json la variables items
	break;
	}

?>