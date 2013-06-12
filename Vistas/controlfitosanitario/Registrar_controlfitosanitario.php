<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
		RegistrarControlFitosanitario();
	});
</script>

<form id="frmRegistrar_controlfitosanitario" name="frmRegistrar_controlfitosanitario" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaRegistrar_controlfitosanitario">
<tr>
  <td align="right">Fecha:</td>
  <td colspan="2"><input type="text" name="ControlFitosanitarioFecha_" id="ControlFitosanitarioFecha1_"  class="calendario"/></td>
  </tr>
<!--<tr>
  <td align="right">Plaga/Enfermedad (LaborId):</td>
  <td><label for="select"></label><select name="LaborId_" id="LaborId_"></select></td>
  <td>&nbsp;</td></tr>
<tr>-->
  <tr>
    <td align="right">Descripcion:</td>
  <td colspan="2"><input type="text" name="ControlFitosanitarioDescripcion_" id="ControlFitosanitarioDescripcion_" value=""/></td>
  </tr>
<tr>
  <td align="right">Cantidad:</td>
  <td colspan="2"><input type="text" name="ControlFitosanitarioCantidad_" id="ControlFitosanitarioCantidad_"  class="calendario"/>
    kg</td>
  </tr>
<tr>
  <td align="right">Costo Unitario:</td>
  <td colspan="2"><input type="text" name="ControlFitosanitarioCostoUnitario_" id="ControlFitosanitarioCostoUnitario_" class="calendario"/>
    S/.</td>
  </tr>
<tr>
  <td rowspan="2" align="right">Numero de Jornales:</td>
  <td align="right"> Familiar:</td>
  <td align="right"><input type="text" name="ControlFitosanitarioJornalFamiliar_" id="ControlFitosanitarioJornalFamiliar_" value=""/></td>
  </tr>
<tr>
  <td align="right">Contratado:</td>
  <td align="right"><input type="text" name="ControlFitosanitarioJornalContratado_" id="ControlFitosanitarioJornalContratado_" value=""/></td>
  </tr>
<tr>
  <td align="right">Costo Unitario Jornal:</td>
  <td colspan="2"><input type="text" name="ControlFitosanitarioCostoJornal_" id="ControlFitosanitarioCostoJornal_" class="calendario"/>
    S/.</td>
  </tr>
<tr>
  <td align="right"><input  type="hidden" name="LaborId_" value="<?php echo $_POST["IdLabor"];?>"/ ></td>
  <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
  <td align="right"><input type="button"  value=" Cancelar " onclick="CancelarControl('RegistrarControlFitosanotario');"/></td>
  </tr>
<tr><td align="right" colspan="3"><?php // echo $rpta;?></td></tr>
</table>
</form>
