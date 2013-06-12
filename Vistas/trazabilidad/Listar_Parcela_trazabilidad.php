<?php 
/*session_start();
$idAcopio=$_SESSION["idAcopio"];
include_once "./Controlador_trazabilidad.php"; 
 $data=CParcelaAcopio_trazabilidad($idAcopio);
// $TrazabilidadId=$rptamo["cuerpo"][0]["TrazabilidadId"];

$cantele=count($data["cuerpo"]);*/
//echo "cantele:$cantele";
?>
<style>
.tabla td{
	text-align:center !important;
	}
.derecha{	text-align: right !important;
padding-right:20px;}

</style>
<form  id="frmTrazabilidad" method="post">
  <table id="tablatrazabilidad" width="200" border="0" class="tabla">
    <tr>
      <th scope="col" width="30">Seleccionar</th>
      <th scope="col">Parcela</th>
    </tr>
    <?php 
	if($cantele>0){
	 for($i=0;$i<$cantele;$i++){
		$ParcelaId=$data["cuerpo"][$i]["ParcelaId"];
		$ParcelaNombre=$data["cuerpo"][$i]["ParcelaNombre"];
		 $TrazabilidadId=$data["cuerpo"][$i]["TrazabilidadId"];
		 
	?>
    <tr>
      <td> <input type="checkbox" name="chk[]" <?php if($TrazabilidadId>0) echo 'checked="checked"'; ?>  value=' <?php echo $ParcelaId ;?> '></td>
      <td><?php echo $ParcelaNombre ;?></td>
    </tr>
    <?php
	 }
	}
	?>
  
  </table><div class="derecha">
  <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button>
  </div>
</form>
