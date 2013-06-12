<div id="divActualizar_tipoproducto">
<form id="frmActualizar_tipoproducto" name="frmRegistrar_tipoproducto" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_tipoproducto">
<tr><td align="right">TipoProductoId:</td><td><input type="text" name="TipoProductoId_" id="TipoProductoId_" value="<?php echo $TipoProductoId;?>"/></td></tr>
<tr><td align="right">TipoProducto:</td><td><input type="text" name="TipoProducto_" id="TipoProducto_" value="<?php echo $TipoProducto;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>