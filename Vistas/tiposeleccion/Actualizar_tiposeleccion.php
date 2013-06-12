<div id="divActualizar_tiposeleccion">
<form id="frmActualizar_tiposeleccion" name="frmRegistrar_tiposeleccion" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_tiposeleccion">
<tr><td align="right">TipoSeleccionId:</td><td><input type="text" name="TipoSeleccionId_" id="TipoSeleccionId_" value="<?php echo $TipoSeleccionId;?>"/></td></tr>
<tr><td align="right">TipoSeleccion:</td><td><input type="text" name="TipoSeleccion_" id="TipoSeleccion_" value="<?php echo $TipoSeleccion;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>