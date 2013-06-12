<div id="divActualizar_tipousuario">
<form id="frmActualizar_tipousuario" name="frmRegistrar_tipousuario" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_tipousuario">
<tr><td align="right">TipoUsuarioId:</td><td><input type="text" name="TipoUsuarioId_" id="TipoUsuarioId_" value="<?php echo $TipoUsuarioId;?>"/></td></tr>
<tr><td align="right">TipoUsuario:</td><td><input type="text" name="TipoUsuario_" id="TipoUsuario_" value="<?php echo $TipoUsuario;?>"/></td></tr>
<tr><td align="right">TipoUsuarioEstado:</td><td><input type="text" name="TipoUsuarioEstado_" id="TipoUsuarioEstado_" value="<?php echo $TipoUsuarioEstado;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>