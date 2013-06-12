<div id="divActualizar_base">
<form id="frmActualizar_base" name="frmRegistrar_base" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_base">
<tr><td align="right">BaseId:</td><td><input type="text" name="BaseId_" id="BaseId_" value="<?php echo $BaseId;?>"/></td></tr>
<tr><td align="right">BaseNombre:</td><td><input type="text" name="BaseNombre_" id="BaseNombre_" value="<?php echo $BaseNombre;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>