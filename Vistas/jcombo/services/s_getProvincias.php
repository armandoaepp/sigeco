<?php
//header('content-type: application/json; charset=utf-8');
include_once '../../../Modelado/conexion.php';
$con= new Conexion();
 

$id = !empty($_GET['id'])?intval($_GET['id']):0; 
      		 $sql= "Select ProvinciaId ,ProvinciaNombre from provincia where DepartamentoId=".$id;
             $data=$con->Listar($sql);
             echo (json_encode($data["cuerpo"])); // devolvemos datos en formato json

 
?>