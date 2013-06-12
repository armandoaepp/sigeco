<div id="divRegistrar_certificacionparcela">
<form id="frmRegistrar_certificacionparcela" name="frmRegistrar_certificacionparcela" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaRegistrar_certificacionparcela">
<tr><td align="right">CertificacionParcelaId:</td><td><input type="text" name="CertificacionParcelaId_" id="CertificacionParcelaId_" value=""/></td></tr>
<tr><td align="right">CertificacionId:</td><td><input type="text" name="CertificacionId_" id="CertificacionId_" value=""/></td></tr>
<tr><td align="right">ParcelaId:</td><td><input type="text" name="ParcelaId_" id="ParcelaId_" value=""/></td></tr>
<tr><td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="reset" value="Limpiar"/></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>