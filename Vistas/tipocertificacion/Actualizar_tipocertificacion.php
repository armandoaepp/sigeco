<div id="divActualizar_tipocertificacion">
<form id="frmActualizar_tipocertificacion" name="frmRegistrar_tipocertificacion" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_tipocertificacion">
<tr><td align="right">TipoCertificacionId:</td><td><input type="text" name="TipoCertificacionId_" id="TipoCertificacionId_" value="<?php echo $TipoCertificacionId;?>"/></td></tr>
<tr><td align="right">TipoCertificacion:</td><td><input type="text" name="TipoCertificacion_" id="TipoCertificacion_" value="<?php echo $TipoCertificacion;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>