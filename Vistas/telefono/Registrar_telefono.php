<div id="divRegistrar_telefono">
  <form id="frmRegistrar_telefono" name="frmRegistrar_telefono" method="post" action="<?php echo $accionf;?>">
    <table border="0" id="tablaRegistrar_telefono">
      <tr>
        <td align="right">TelefonoId:</td>
        <td><input type="text" name="TelefonoId_" id="TelefonoId_" value=""/></td>
      </tr>
      <tr>
        <td align="right">TelefonoFijo:</td>
        <td><input type="text" name="TelefonoFijo_" id="TelefonoFijo_" value=""/></td>
      </tr>
      <tr>
        <td align="right">TelefonoMovil:</td>
        <td><input type="text" name="TelefonoMovil_" id="TelefonoMovil_" value=""/></td>
      </tr>
      <tr>
        <td align="right">ProductorId:</td>
        <td><input type="text" name="ProductorId_" id="ProductorId_" value=""/></td>
      </tr>
      <tr>
        <td align="right">ClienteId:</td>
        <td><input type="text" name="ClienteId_" id="ClienteId_" value=""/></td>
      </tr>
      <tr>
        <td align="right">AgendaId:</td>
        <td><input type="text" name="AgendaId_" id="AgendaId_" value=""/></td>
      </tr>
      <tr>
        <td align="right"><input type="submit" value="Registrar" name="btregistrar"></td>
        <td><input type="reset" value="Limpiar"/></td>
      </tr>
      <tr>
        <td align="right" colspan="2"><?php echo $rpta;?></td>
      </tr>
    </table>
  </form>
</div>
