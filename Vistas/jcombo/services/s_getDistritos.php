<?php
//header('content-type: application/json; charset=utf-8');
include_once '../../../Modelado/conexion.php';
$con= new Conexion(); 
$id = !empty($_GET['id'])?intval($_GET['id']):0; 
		    $sql= "Select * from distrito where ProvinciaId=".$id;
            $data=$con->Listar($sql);
            echo (json_encode($data["cuerpo"]));  // este va la json la variables items

  
   
 
?>