<div id="divActualizar_c_modulo">
<form id="frmActualizar_c_modulo" name="frmRegistrar_c_modulo" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_c_modulo">
<tr><td align="right">ModuloId:</td><td><input type="text" name="ModuloId_" id="ModuloId_" value="<?php echo $ModuloId;?>"/></td></tr>
<tr><td align="right">ModuloNombre:</td><td><input type="text" name="ModuloNombre_" id="ModuloNombre_" value="<?php echo $ModuloNombre;?>"/></td></tr>
<tr><td align="right">ModuloNota:</td><td><input type="text" name="ModuloNota_" id="ModuloNota_" value="<?php echo $ModuloNota;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>