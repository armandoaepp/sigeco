<div id="divActualizar_unidadproductiva">
<form id="frmActualizar_unidadproductiva" name="frmRegistrar_unidadproductiva" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_unidadproductiva">
<tr><td align="right">UnidadProductivaId:</td><td><input type="text" name="UnidadProductivaId_" id="UnidadProductivaId_" value="<?php echo $UnidadProductivaId;?>"/></td></tr>
<tr><td align="right">UnidadProductivaArea:</td><td><input type="text" name="UnidadProductivaArea_" id="UnidadProductivaArea_" value="<?php echo $UnidadProductivaArea;?>"/></td></tr>
<tr><td align="right">UnidadProductivaComentario:</td><td><input type="text" name="UnidadProductivaComentario_" id="UnidadProductivaComentario_" value="<?php echo $UnidadProductivaComentario;?>"/></td></tr>
<tr><td align="right">ProductorId:</td><td><input type="text" name="ProductorId_" id="ProductorId_" value="<?php echo $ProductorId;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>