<div id="divRegistrar_georeferencia">
<form id="frmRegistrar_georeferencia" name="frmRegistrar_georeferencia" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaRegistrar_georeferencia">
<tr><td align="right">GeoReferenciaId:</td><td><input type="text" name="GeoReferenciaId_" id="GeoReferenciaId_" value=""/></td></tr>
<tr><td align="right">GeoReferenciaLatitud:</td><td><input type="text" name="GeoReferenciaLatitud_" id="GeoReferenciaLatitud_" value=""/></td></tr>
<tr><td align="right">GeoReferenciaLongitud:</td><td><input type="text" name="GeoReferenciaLongitud_" id="GeoReferenciaLongitud_" value=""/></td></tr>
<tr><td align="right">GeoReferenciaAltitud:</td><td><input type="text" name="GeoReferenciaAltitud_" id="GeoReferenciaAltitud_" value=""/></td></tr>
<tr><td align="right">GeoReferenciaTipoGps:</td><td><input type="text" name="GeoReferenciaTipoGps_" id="GeoReferenciaTipoGps_" value=""/></td></tr>
<tr><td align="right">ParcelaId:</td><td><input type="text" name="ParcelaId_" id="ParcelaId_" value=""/></td></tr>
<tr><td align="right"><input type="submit" value="Registrar" name="btregistrar"></td><td><input type="reset" value="Limpiar"/></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>