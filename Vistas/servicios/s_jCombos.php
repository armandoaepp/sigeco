<?php
//header('Content-type: application/json; charset=iso-8859-1');
include_once '../../Modelado/conexion.php';
$con= new Conexion();
 
$metodo=$_GET["metodo"];
$id = !empty($_GET['id'])?intval($_GET['id']):0;
 
 //$metodo="ListarPais";
 
switch ($metodo){
    // Listar Paises
    case "ListarPais": 
            $sql= " Select  PaisId  , PaisNombre from pais ";
            $data=$con->Listar($sql);
             echo (json_encode($data["cuerpo"])); // devolvemos datos en formato json
    break;
    // Listamos los departamentos que pertenecen a un determido pais
    case "ListarDepartamento": 
       		$sql= "Select DepartamentoId,DepartamentoNombre from departamento where PaisId=".$id ;
            $data=$con->Listar($sql);
            echo (json_encode($data["cuerpo"])); // devolvemos datos en formato json
           
    break;
    // Listamos los provincias que pertenecen a un determido departametos
    case "ListarProvincia":
      		 $sql= "Select ProvinciaId ,ProvinciaNombre from provincia where DepartamentoId=".$id;
             $data=$con->Listar($sql);
             echo (json_encode($data["cuerpo"])); // devolvemos datos en formato json
    break;
   
    case "ListarDistritos":
		    $sql= "Select * from distrito where ProvinciaId=".$id;
            $data=$con->Listar($sql);
            echo (json_encode($data["cuerpo"]));  // este va la json la variables items
    break;
     default:{ echo 'parametros incorrectos';}
    }
   
 
?>