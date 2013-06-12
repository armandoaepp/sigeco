<div id="divRegistrar_parcela">
  <form id="frmRegistrar_parcela" name="frmRegistrar_parcela" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_parcela">
      <tr>
        <td align="right">ParcelaId:</td>
        <td><input type="text" name="ParcelaId_" id="ParcelaId_" value=""/></td>
      </tr>
      <tr>
        <td align="right">Nombre de la Parcela:</td>
        <td><input type="text"  name="ParcelaNombre_" id="ParcelaNombre_" value="" class="validate[required] text-input"/></td>
      </tr>
      <tr>
        <td align="right">Area Total:</td>
        <td><input type="text" alt="requerido" name="ParcelaArea_" id="ParcelaArea_" value="" class="validate[required] text-input"/></td>
      </tr>
      <tr>
        <td colspan="2" align="right"><div align="left">Ubicación</div></td>
      </tr>
      <tr>
        <td align="right">Departamento</td>
        <td><select name="departamento" id="departamento">
          </select></td>
      </tr>
      <tr>
        <td align="right">Provincia</td>
        <td><select name="provincia" id="provincia">
          </select></td>
      </tr>
      <tr>
        <td align="right">DistritoId:</td>
        <td><select name="DistritoId_"  id="DistritoId_" class="validate[required]" >
          </select></td>
      </tr>
      <tr>
        <td align="right">Caserio:</td>
        <td><input type="text" name="ParcelaCaserio_" id="ParcelaCaserio_" value=""/></td>
      </tr>
      <tr>
        <td align="right">BaseId:</td>
        <td><select name="BaseId_"  id="BaseId_" class="validate[required]" >
          </select></td>
      </tr>
      <tr>
        <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
        <td><input type="reset" value="Limpiar"/></td>
      </tr>
    </table>
  </form>
</div>
