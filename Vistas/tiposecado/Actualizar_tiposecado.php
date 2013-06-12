<div id="divActualizar_tiposecado">
<form id="frmActualizar_tiposecado" name="frmRegistrar_tiposecado" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_tiposecado">
<tr><td align="right">TipoSecadoId:</td><td><input type="text" name="TipoSecadoId_" id="TipoSecadoId_" value="<?php echo $TipoSecadoId;?>"/></td></tr>
<tr><td align="right">TipoSecado:</td><td><input type="text" name="TipoSecado_" id="TipoSecado_" value="<?php echo $TipoSecado;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>