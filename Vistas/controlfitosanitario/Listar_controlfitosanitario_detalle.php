<?php 
header("Content-Type: text/html;charset=utf-8");// para uniformizar los datos en json problemas de las tildes
/*
	include_once "./Controlador_controlfitosanitario.php"; 
	include_once "../fecha.php"; 
	$rptamo=CBuscar_controlfitosanitario(3);
	$ControlFitosanitarioId=$rptamo["cuerpo"][0]["ControlFitosanitarioId"];
	$ControlFitosanitarioDescripcion=$rptamo["cuerpo"][0]["ControlFitosanitarioDescripcion"];
	$ControlFitosanitarioCantidad=$rptamo["cuerpo"][0]["ControlFitosanitarioCantidad"];
	$ControlFitosanitarioCostoUnitario=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoUnitario"];
	$ControlFitosanitarioJornalFamiliar=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalFamiliar"];
	$ControlFitosanitarioJornalContratado=$rptamo["cuerpo"][0]["ControlFitosanitarioJornalContratado"];
	$ControlFitosanitarioCostoJornal=$rptamo["cuerpo"][0]["ControlFitosanitarioCostoJornal"];
	$LaborId=$rptamo["cuerpo"][0]["LaborId"];
	$ControlFitosanitarioFecha=fechaFormatoPeru($rptamo["cuerpo"][0]["ControlFitosanitarioFecha"]);
	*/
//ControlFitosanitarioId ControlFitosanitarioDescripcion 	ControlFitosanitarioCantidad 	ControlFitosanitarioCostoUnitario 	ControlFitosanitarioJornalFamiliar 	ControlFitosanitarioJornalContratado 	ControlFitosanitarioCostoJornal 	LaborId 	ControlFitosanitarioFecha
?>
<style>
.tablacontrol {
	font-size:10px;
	}
.tablacontrol .text{
	font-weight:bold
	}  
</style>
<table border="0" width="379" class="tablacontrol" >
  <tr>
    <td width="65" class="text" >Fecha</td>
    <td width="104"><?php echo $ControlFitosanitarioFecha;?></td>
    <td width="73" class="text" >Jornal Familiar</td>
    <td width="119" ><?php echo $ControlFitosanitarioJornalFamiliar;?></td>
  </tr>
  <tr>
    <td class="text" >Cantidad</td>
    <td><?php echo $ControlFitosanitarioCantidad;?></td>
    <td class="text">Jornal Contratado </td>
    <td><?php echo $ControlFitosanitarioJornalContratado;?></td>
  </tr>
  <tr>
    <td class="text">CostoUnitario</td>
    <td><?php echo $ControlFitosanitarioCostoUnitario;?></td>
    <td class="text">Costo Jornal</td>
    <td><?php echo $ControlFitosanitarioCostoJornal;?></td>
  </tr>
  <tr>
    <td class="text">Descripción</td>
    <td colspan="3"><?php echo $ControlFitosanitarioDescripcion;?></td>
  </tr>
</table>
