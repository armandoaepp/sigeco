<div id="divActualizar_educacion">
<form id="frmActualizar_educacion" name="frmRegistrar_educacion" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_educacion">
<tr><td align="right">EducacionId:</td><td><input type="text" name="EducacionId_" id="EducacionId_" value="<?php echo $EducacionId;?>"/></td></tr>
<tr><td align="right">EducacionNivel:</td><td><input type="text" name="EducacionNivel_" id="EducacionNivel_" value="<?php echo $EducacionNivel;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>