<?php 
//header("Content-Type: text/html;charset=utf-8");// para uniformizar los datos en json problemas de las tildes
	include_once "./Controlador_acopiocontrato.php"; 
	
	$data=CListar_acopiocontrato();
	$cantele=count($data["cuerpo"]);
	
	
?>

<table  class="tabla">
  <thead>
    <tr>
      <!--<th>Codigo</th>-->
      <th>Cliente</th>
      <th> # Numero</th>
      <th>Puntaje Cat.</th>
      <th>Fecha Embarque</th>
      <th>Quintales</th>
      <th>Kg Requeridos</th>
      <th>Kg Asignados</th>
      <th>Kg Faltan</th>
      <th> <p>&nbsp;</p>
      </th>
    </tr>
  </thead>
  <?php 
/*
c.ClienteNombre ,
		co.ContratoNumero,
		co.ContratoFechaEmbarque,
		 co.ContratoCantidadQuintales,
		(co.ContratoCantidadSacos*co.ContratoKGxSaco)AS 'Kg Requeridos',
		 'Kg Asignados',
		'Kg Faltan'

*/

if($cantele>0){
	
	for($i=0;$i<$cantele;$i++){	
		
?>
  <tr>
   <!-- <td><?php echo $data["cuerpo"][$i]["ContratoId"];?></td>-->
    <td><?php echo $data["cuerpo"][$i]["ClienteNombre"];?></td>
    <td><?php echo $data["cuerpo"][$i]["ContratoNumero"];?></td>
    <td><?php echo $data["cuerpo"][$i]["PuntajeCat"];?></td>
    <td><?php echo $data["cuerpo"][$i]["ContratoFechaEmbarque"];?></td>
    <td><?php echo $data["cuerpo"][$i]["ContratoCantidadQuintales"];?></td>
    <td><?php echo $data["cuerpo"][$i]["Kg Requeridos"];?></td>
    <td><?php echo $data["cuerpo"][$i]["Kg Asignados"];?></td>
    <td><?php echo $data["cuerpo"][$i]["Kg Faltan"];?></td>
    <td style="text-align:center !important;"><button type="button"  onclick="AsignarLote(<?php echo $data["cuerpo"][$i]["ContratoId"];?>);return false;">&nbsp;&nbsp; Asignar &nbsp;&nbsp; </button></td>
  </tr>
  <?php 
	}
}?>
</table>
