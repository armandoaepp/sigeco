<div id="divActualizar_certificacionparcela">
<form id="frmActualizar_certificacionparcela" name="frmRegistrar_certificacionparcela" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_certificacionparcela">
<tr><td align="right">CertificacionParcelaId:</td><td><input type="text" name="CertificacionParcelaId_" id="CertificacionParcelaId_" value="<?php echo $CertificacionParcelaId;?>"/></td></tr>
<tr><td align="right">CertificacionId:</td><td><input type="text" name="CertificacionId_" id="CertificacionId_" value="<?php echo $CertificacionId;?>"/></td></tr>
<tr><td align="right">ParcelaId:</td><td><input type="text" name="ParcelaId_" id="ParcelaId_" value="<?php echo $ParcelaId;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>