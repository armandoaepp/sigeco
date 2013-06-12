<?php
/*header('Content-type: application/json; charset=iso-8859-1');*/
include_once '../../Modelado/conexion.php';
$con= new Conexion();
 
$metodo=$_GET["metodo"];
$id = !empty($_GET['id'])?intval($_GET['id']):0;

            $sql= " Select  PaisId  , PaisNombre from pais ";
            $data=$con->Listar($sql); 
				//header('content-type: application/json; charset=utf-8');
             echo (json_encode($data["cuerpo"])); // devolvemos datos en formato json
 
  
   
 
?>