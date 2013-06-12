<?php 
session_start();
	header("Content-Type: text/html;charset=utf-8");// para uniformizar los datos en json problemas de las tildes
	include_once "./Controlador_labor.php"; 
	include_once "../controlfitosanitario/Controlador_controlfitosanitario.php"; 
	include_once "../fecha.php";
	
	$Idparcela=$_SESSION["ParcelaId"];
	
	$data=CListadoDetalle_labor($Idparcela);
	$cantele=count($data["cuerpo"]);
	?>
<img src="../images/add.gif" width="16" height="16" style='text-align:center' />
<table border="1" id="dataTablaDetallesLabores" class="tablazebra">
  <thead>
   
    <tr>
      <th scope="col">Eliminar</th>
     <!-- <th scope="col">LaborId</th>-->
      <th scope="col">Fecha</th>
      <th scope="col">Qué</th>
      <th scope="col">Tipo</th>
      <th scope="col" width="250px">Trabajo</th>
      <th scope="col">Descripción</th>
      <th scope="col"><a href="../m_unidadproductiva/controlfitosanitario.php" id"Link_ListarControlFitosanotario" >Control FitoSanitario</a></th>
    </tr>
  </thead>
  <tbody>
<?php 

if($cantele>0){
	for($i=0;$i<$cantele;$i++){	

	$LaborId=$data["cuerpo"][$i]["LaborId"];	
	$LaborFecha=fechaFormatoPeru($data["cuerpo"][$i]["LaborFecha"]);
	$TipoLabor=$data["cuerpo"][$i]["TipoLabor"];
	$LaborTipo=$data["cuerpo"][$i]["LaborTipo"];
	$Trabajo=$data["cuerpo"][$i]["Trabajo"];
	$LaborNota=$data["cuerpo"][$i]["LaborNota"];
	$ControlFitosanitarioId=$data["cuerpo"][$i]["ControlFitosanitarioId"];
	$TipoLaborId=$data["cuerpo"][$i]["TipoLaborId"];
	

?>
   <tr>
      <td><a href="#" title="Eliminar"  onClick="EliminarDetalleLabor(<?php echo  $LaborId ;?>); return false" 
                   id="<?php echo  $LaborId ;?>"><img  src="../images/delete.gif" alt="Eliminar"/></a> </td>
     <!-- <td><?php //echo $LaborId;?></td>-->
      <td><?php echo  $LaborFecha;?></td>
      <td><?php echo $TipoLabor;?></td>
      <td><?php echo $LaborTipo;?></td>
      <td><?php echo $Trabajo;?></td>
      <td><?php echo $LaborNota;?></td>
      <td  align="center" width="80">&nbsp;
      <?php 
	  
		 /* $dataControl=CBuscar_controlfitosanitario_xIdLabor($LaborId);
		$nRegistros=count($dataControl["cuerpo"]);*/
		
			if($TipoLaborId==3 || $TipoLaborId==4){
				if($ControlFitosanitarioId>0){
			echo '<a href="javascript:MotrarDetalleFitosanitario('.$ControlFitosanitarioId.'); "  title="Ver Control FitoSanitario"><img  src="../images/icon_verde.png" alt="Eliminar" id="DetalleControl'.$ControlFitosanitarioId.'" /></a>';
			//echo '<a href="#"  class="contenido_tooltip" id="'.$ControlFitosanitarioId.'" title="Ver Control FitoSanitario"> 	<img  src="../images/icon_verde.png" alt="Eliminar"/></a>';
				}else{
				echo '<a href="javascript:MostrafrmRegistrarControl('.$LaborId.'); " title="Registrar Control FitoSanitario" > 	<img  src="../images/icon_rojo.png" alt="Eliminar"/></a>';
					}
			
			}
	  ?>
      </td>
    </tr>
<?php 
	}
}?>
  </tbody>
</table>
