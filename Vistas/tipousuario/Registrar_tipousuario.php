<div id="divRegistrar_tipousuario">
<form id="frmRegistrar_tipousuario" name="frmRegistrar_tipousuario" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaRegistrar_tipousuario">
<tr><td align="right">TipoUsuarioId:</td><td><input type="text" name="TipoUsuarioId_" id="TipoUsuarioId_" value=""/></td></tr>
<tr><td align="right">TipoUsuario:</td><td><input type="text" name="TipoUsuario_" id="TipoUsuario_" value=""/></td></tr>
<tr><td align="right">TipoUsuarioEstado:</td><td><input type="text" name="TipoUsuarioEstado_" id="TipoUsuarioEstado_" value=""/></td></tr>
<tr><td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="reset" value="Limpiar"/></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>