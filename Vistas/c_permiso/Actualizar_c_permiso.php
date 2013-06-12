<div id="divActualizar_c_permiso">
<form id="frmActualizar_c_permiso" name="frmRegistrar_c_permiso" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_c_permiso">
<tr><td align="right">PermisoId:</td><td><input type="text" name="PermisoId_" id="PermisoId_" value="<?php echo $PermisoId;?>"/></td></tr>
<tr><td align="right">FechaCreacion:</td><td><input type="text" name="FechaCreacion_" id="FechaCreacion_" value="<?php echo $FechaCreacion;?>"/></td></tr>
<tr><td align="right">UsuarioId:</td><td><input type="text" name="UsuarioId_" id="UsuarioId_" value="<?php echo $UsuarioId;?>"/></td></tr>
<tr><td align="right">MenuTipoUsuarioId:</td><td><input type="text" name="MenuTipoUsuarioId_" id="MenuTipoUsuarioId_" value="<?php echo $MenuTipoUsuarioId;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>