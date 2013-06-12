<div id="divRegistrar_c_menu">
<form id="frmRegistrar_c_menu" name="frmRegistrar_c_menu" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaRegistrar_c_menu">
<tr><td align="right">MenuId:</td><td><input type="text" name="MenuId_" id="MenuId_" value=""/></td></tr>
<tr><td align="right">MenuNombre:</td><td><input type="text" name="MenuNombre_" id="MenuNombre_" value=""/></td></tr>
<tr><td align="right">MenuUrl:</td><td><input type="text" name="MenuUrl_" id="MenuUrl_" value=""/></td></tr>
<tr><td align="right">PadreMenuId:</td><td><input type="text" name="PadreMenuId_" id="PadreMenuId_" value=""/></td></tr>
<tr><td align="right">ModuloId:</td><td><input type="text" name="ModuloId_" id="ModuloId_" value=""/></td></tr>
<tr><td align="right">MenuEstado:</td><td><input type="text" name="MenuEstado_" id="MenuEstado_" value=""/></td></tr>
<tr><td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="reset" value="Limpiar"/></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>