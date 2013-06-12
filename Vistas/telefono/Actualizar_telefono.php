<div id="divActualizar_telefono">
<form id="frmActualizar_telefono" name="frmRegistrar_telefono" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_telefono">
<tr><td align="right">TelefonoId:</td><td><input type="text" name="TelefonoId_" id="TelefonoId_" value="<?php echo $TelefonoId;?>"/></td></tr>
<tr><td align="right">TelefonoFijo:</td><td><input type="text" name="TelefonoFijo_" id="TelefonoFijo_" value="<?php echo $TelefonoFijo;?>"/></td></tr>
<tr><td align="right">TelefonoMovil:</td><td><input type="text" name="TelefonoMovil_" id="TelefonoMovil_" value="<?php echo $TelefonoMovil;?>"/></td></tr>
<tr><td align="right">ProductorId:</td><td><input type="text" name="ProductorId_" id="ProductorId_" value="<?php echo $ProductorId;?>"/></td></tr>
<tr><td align="right">ClienteId:</td><td><input type="text" name="ClienteId_" id="ClienteId_" value="<?php echo $ClienteId;?>"/></td></tr>
<tr><td align="right">AgendaId:</td><td><input type="text" name="AgendaId_" id="AgendaId_" value="<?php echo $AgendaId;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>