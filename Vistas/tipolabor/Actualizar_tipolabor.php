<div id="divActualizar_tipolabor">
<form id="frmActualizar_tipolabor" name="frmRegistrar_tipolabor" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_tipolabor">
<tr><td align="right">TipoLaborId:</td><td><input type="text" name="TipoLaborId_" id="TipoLaborId_" value="<?php echo $TipoLaborId;?>"/></td></tr>
<tr><td align="right">TipoLabor:</td><td><input type="text" name="TipoLabor_" id="TipoLabor_" value="<?php echo $TipoLabor;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>