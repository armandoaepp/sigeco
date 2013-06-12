<form id="frmRegistrar_labor_riego" name="frmRegistrar_labor" method="post" action="<?php echo $accionf;?>">
  <table border="0" id="tablaRegistrar_labor">
    <tr>
      <td width="132" align="right">Fecha:</td>
      <td colspan="2"><input type="text" name="LaborFecha_" id="LaborFecha_riego"  class="calendario" required="required" /></td>
     
    </tr>
    <tr>
      <td align="right">Tipo:</td>
      <td colspan="2"><select name="LaborTipo_" id="LaborTipo_" required="required" >
         <option value=""  selected="selected" style="text-align:center; color:#CCC;" >Seleccionar</option>
          <option value="Aspersión" selected="selected">Aspersión</option>
          <option value="Goteo">Goteo</option>
          <option value="Gravedad">Gravedad</option>
          <option value="Ventanas">Ventanas</option>
        </select></td>
      
    </tr>
    <tr>
      <td rowspan="2" align="right">Número de Jornales:</td>
      <td width="121" align="right">Familiar:</td>
      <td width="162" align="left"><input type="number" name="LaborJornalesFamiliar_" id="LaborJornalesFamiliar_" value=""/></td>
     
    </tr>
    <tr>
      <td align="right">Contratada:</td>
      <td align="left"><input type="number" name="LaborJornalesContratado_" id="LaborJornalesContratado_" value=""/></td>
     
    </tr>
    <tr>
      <td align="right">Costo Unitario Jornal:</td>
      <td colspan="2"><input type="number" name="LaborCostoUnitarioJornal_" id="LaborCostoUnitarioJornal_" class="calendario"/>
        S/.</td>
     
    </tr>
    <tr>
      <td align="right">Area:</td>
      <td colspan="2"><input type="number" name="LaborArea_" id="LaborArea_" class="calendario"/>
        ha</td>
      
    </tr>
    <tr>
      <td align="right">Nota:</td>
      <td colspan="2"><label for="textarea"></label>
        <textarea name="LaborNota_" id="LaborNota_" cols="45" rows="5"></textarea></td>
   
    </tr>
    <tr>
      <td align="right"><input type="hidden" name="TipoLaborId_" id="TipoLaborId_" value="1" /></td>
     <td  align="right"><button type="submit" id="btregistrar"><img src="../imgcixphp/ico_guardar.png" />Registrar </button></td>
      <td  align="right"><button type="reset" ><img src="../imgcixphp/ico_limpia.png"/>Limpiar </button></td>
     
    </tr>
    
  </table>
</form>
