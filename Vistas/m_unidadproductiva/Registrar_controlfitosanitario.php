<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
		RegistrarControFitosanitario();
	});
</script>

<div id="divRegistrar_controlfitosanitario">
<form id="frmRegistrar_controlfitosanitario" name="frmRegistrar_controlfitosanitario" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaRegistrar_controlfitosanitario">
<tr>
  <td align="right">Fecha:</td>
  <td><input type="text" name="ControlFitosanitarioFecha_" id="ControlFitosanitarioFecha1_" value=""/></td>
  <td>&nbsp;</td></tr>
<!--<tr>
  <td align="right">Plaga/Enfermedad (LaborId):</td>
  <td><label for="select"></label><select name="LaborId_" id="LaborId_"></select></td>
  <td>&nbsp;</td></tr>
<tr>-->
  <td align="right">Descripcion:</td>
  <td><input type="text" name="ControlFitosanitarioDescripcion_" id="ControlFitosanitarioDescripcion_" value=""/></td>
  <td>&nbsp;</td></tr>
<tr>
  <td align="right">Cantidad:</td>
  <td><input type="text" name="ControlFitosanitarioCantidad_" id="ControlFitosanitarioCantidad_" value=""/>
    kg</td>
  <td>&nbsp;</td></tr>
<tr>
  <td align="right">Costo Unitario:</td>
  <td><input type="text" name="ControlFitosanitarioCostoUnitario_" id="ControlFitosanitarioCostoUnitario_" value=""/>
    S/.</td>
  <td>&nbsp;</td></tr>
<tr>
  <td rowspan="2" align="right">Numero de Jornales:</td>
  <td align="right"> Familiar:</td><td><input type="text" name="ControlFitosanitarioJornalFamiliar_" id="ControlFitosanitarioJornalFamiliar_" value=""/></td></tr>
<tr>
  <td align="right">Contratado:</td><td><input type="text" name="ControlFitosanitarioJornalContratado_" id="ControlFitosanitarioJornalContratado_" value=""/></td></tr>
<tr>
  <td align="right">Costo Unitario Jornal:</td>
  <td><input type="text" name="ControlFitosanitarioCostoJornal_" id="ControlFitosanitarioCostoJornal_" value="<?php echo $_POST["IdLabor"];?>"/>
  S/.</td>
  <td>&nbsp;</td></tr>
<tr>
  <td align="right">&nbsp;</td>
  <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="button"  value=" Cancelar " onclick="CancelarControl('RegistrarControlFitosanotario');"/></td></tr>
<tr><td align="right" colspan="3"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>
<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
	$("#ControlFitosanitarioFecha1_" ).datepicker({
		showOn: "button",
		buttonImage: "../images/calendar.gif",
		buttonImageOnly: true,
		yearRange: "-2:+5",		
		changeMonth: true,
		changeYear: true,
		dateFormat: "dd/mm/yy",				
		}); 
		
		
	});
	</script>