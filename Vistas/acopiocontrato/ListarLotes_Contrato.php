<?php 
//header("Content-Type: text/html;charset=utf-8");// para uniformizar los datos en json problemas de las tildes
	include_once "./Controlador_acopiocontrato.php"; 
	
	$data=CListarLotes_acopiocontrato();
	$cantele=count($data["cuerpo"]);
	
	
?>
<style>
form #frm_AsignarLotes{
	width:100% !important;
	}
</style>
<form id="frm_AsignarLotes" name="form1" method="post" action="">
<table  class="tabla">
  <thead>
    <tr>
      <!--<th>Codigo</th>-->
      <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <th> # Numero</th>
      <th>Puntaje Cat.</th>
      <th>Kg Acopiados</th>
      <th>QQ Acopiados </th>      
      <th>Kg Asignados</th>
      <th>Kg por Asignar</th>
      <th>&nbsp;</th>
      
      </th>
    </tr>
  </thead>
  <?php 

if($cantele>0){
	for($i=0;$i<$cantele;$i++){	
	/*
	a.AcopioId,t.TaceoPuntajeCatador,a.AcopioQuintalesNetos, Quintales Asignado PorAsignar
	
	*/		
?>
  <tr>
    <td><input type="checkbox" name="chk[]"  value=' <?php echo $data["cuerpo"][$i]["AcopioId"];?> ;?> '></td>
    <td><?php echo "00".$i+1;?></td>
    <td><?php echo $data["cuerpo"][$i]["TaceoPuntajeCatador"];?></td>
    <td><?php echo $data["cuerpo"][$i]["AcopioQuintalesNetos"];?></td>
    <td><?php echo $data["cuerpo"][$i]["Quintales"];?></td>
    <td><?php echo $data["cuerpo"][$i]["Asignado"];?></td>
    <td><?php echo $data["cuerpo"][$i]["PorAsignar"];?></td>
    <td>&nbsp;</td>

    
  <?php 
	}
}?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="text" name="CantidadAsignar_2" id="CantidadAsignar_2" /></td>
    <td><input type="text" name="CantidadAsignar_" id="CantidadAsignar_" /></td>
    <td>
      <button type="submit" name="btnRegistrar" id="btnRegistrar" >Registrar</button></td>
</table>

</form>
