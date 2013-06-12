<form id="frmRegistrar_labor_enfermedad" name="frmRegistrar_labor" method="post" action="<?php echo $accionf;?>">
  <table border="0" id="tablaRegistrar_labor">
    <tr>
      <td width="132" align="right">Fecha:</td>
      <td colspan="3"><input type="text" name="LaborFecha_" id="LaborFecha_enfermedad" class="calendario" required="required"/></td>
    <tr>
      <td align="right">Tipo:</td>
      <td colspan="3"><select name="LaborTipo_" id="LaborTipo_" required="required" >
         <option value=""  selected="selected" style="text-align:center; color:#CCC;" >Seleccionar</option>
          <option value="Mancha de Hierro">Mancha de Hierro</option>
          <option value="Antracnosis">Antracnosis</option>
          <option value="Mal de Hilacha">Mal de Hilacha</option>
          <option value="Ojo de Gallo" >Ojo de Gallo</option>
          <option value="Derrite">Derrite</option>
          <option value="Mal de hilachas o koleroga">Mal de hilachas o koleroga</option>
          <option value="Llaga macana">Llaga macana</option>
        </select></td>
    </tr>
    <tr>
      <td rowspan="2" align="right">Número de Jornales:</td>
      <td width="71" align="right">Familiar:</td>
      <td colspan="2" align="left"><input type="number" name="LaborJornalesFamiliar_" id="LaborJornalesFamiliar_" value=""/></td>
      <td width="1">&nbsp;</td>
    </tr>
    <tr>
      <td align="right">Contratada:</td>
      <td colspan="2" align="left"><input type="number" name="LaborJornalesContratado_" id="LaborJornalesContratado_" value=""/></td>
    </tr>
    <tr>
      <td align="right">Costo Unitario Jornal:</td>
      <td colspan="3"><input type="number" name="LaborCostoUnitarioJornal_" id="LaborCostoUnitarioJornal_" class="calendario"/>
        S/.</td>
    </tr>
    <tr>
      <td align="right">Area:</td>
      <td colspan="3"><input type="number" name="LaborArea_" id="LaborArea_" class="calendario"/>
        ha</td>
    </tr>
    <tr>
      <td align="right">Nota:</td>
      <td colspan="3"><label for="textarea"></label>
        <textarea name="LaborNota_" id="LaborNota_" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td align="right">&nbsp;</td>
     <td  align="right"><button type="submit" id="btregistrar"><img src="../imgcixphp/ico_guardar.png" />Registrar </button></td>
      <td  align="right"><button type="reset" ><img src="../imgcixphp/ico_limpia.png"/>Limpiar </button></td>
    </tr>
  </table>
</form>
