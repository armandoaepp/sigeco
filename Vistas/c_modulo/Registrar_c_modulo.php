<div id="divRegistrar_c_modulo">
<form id="frmRegistrar_c_modulo" name="frmRegistrar_c_modulo" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaRegistrar_c_modulo">
<tr><td align="right">ModuloId:</td><td><input type="text" name="ModuloId_" id="ModuloId_" value=""/></td></tr>
<tr><td align="right">ModuloNombre:</td><td><input type="text" name="ModuloNombre_" id="ModuloNombre_" value=""/></td></tr>
<tr><td align="right">ModuloNota:</td><td><input type="text" name="ModuloNota_" id="ModuloNota_" value=""/></td></tr>
<tr><td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="reset" value="Limpiar"/></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>