<script>
/*Iniciar los Calendarios */
   	$(document).ready(function(){		
		ActualizarControlFitosanitario();
	});
</script>

<div id="divActualizar_controlfitosanitario">
<form id="frmActualizar_controlfitosanitario" name="frmRegistrar_controlfitosanitario" method="post" action="<?php echo $accionf;?>">
  <table border="0" id="tablaRegistrar_controlfitosanitario">
    <tr>
      <td align="right">Fecha:</td>
      <td colspan="2"><input type="text" name="ControlFitosanitarioFecha_" id="ControlFitosanitarioFecha_" value="<?php echo $ControlFitosanitarioFecha;?>" class="calendario"/></td>
    </tr>
    <!--<tr>
  <td align="right">Plaga/Enfermedad (LaborId):</td>
  <td><label for="select"></label><select name="LaborId_" id="LaborId_"></select></td>
  <td>&nbsp;</td></tr>
<tr>-->
    <tr>
      <td align="right">Descripcion:</td>
      <td colspan="2"><input type="text" name="ControlFitosanitarioDescripcion_" id="ControlFitosanitarioDescripcion_" value="<?php echo $ControlFitosanitarioDescripcion;?>"/></td>
    </tr>
    <tr>
      <td align="right">Cantidad:</td>
      <td colspan="2"><input type="text" name="ControlFitosanitarioCantidad_" id="ControlFitosanitarioCantidad_" value="<?php echo $ControlFitosanitarioCantidad;?>"  class="calendario"/>
        kg</td>
    </tr>
    <tr>
      <td align="right">Costo Unitario:</td>
      <td colspan="2"><input type="text" name="ControlFitosanitarioCostoUnitario_" id="ControlFitosanitarioCostoUnitario_" value="<?php echo $ControlFitosanitarioCostoUnitario;?>" class="calendario"/>
        S/.</td>
    </tr>
    <tr>
      <td rowspan="2" align="right">Numero de Jornales:</td>
      <td align="right"> Familiar:</td>
      <td align="right"><input type="text" name="ControlFitosanitarioJornalFamiliar_" id="ControlFitosanitarioJornalFamiliar_" value="<?php echo $ControlFitosanitarioJornalFamiliar;?>"/></td>
    </tr>
    <tr>
      <td align="right">Contratado:</td>
      <td align="right"><input type="text" name="ControlFitosanitarioJornalContratado_" id="ControlFitosanitarioJornalContratado_" value="<?php echo $ControlFitosanitarioJornalContratado;?>"/></td>
    </tr>
    <tr>
      <td align="right">Costo Unitario Jornal:</td>
      <td colspan="2"><input type="text" name="ControlFitosanitarioCostoJornal_" id="ControlFitosanitarioCostoJornal_" value="<?php echo $ControlFitosanitarioCostoJornal;?>" class="calendario"/>
        S/.</td>
    </tr>
    <tr>
      <td align="right"><input  type="hidden" name="LaborId_" value="<?php echo $LaborId;?>"/ > <input  type="hidden" name="ControlFitosanitarioId_" value="<?php echo $ControlFitosanitarioId;?>"/ ></td>
      <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
      <td align="right"><input type="button"  value=" Cancelar " onclick="Cancelar('Modal_ControlFitoSanitario','frmActualizar_controlfitosanitario');"/></td>
    </tr>
    <tr>
      <td align="right" colspan="3"><?php // echo $rpta;?></td>
    </tr>
  </table>
</form>
