<div id="divActualizar_labor">
<form id="frmActualizar_labor" name="frmRegistrar_labor" method="post" action="<?php echo $accionf;?>">
<table border="0" id="tablaActualizar_labor">
<tr><td align="right">LaborId:</td><td><input type="text" name="LaborId_" id="LaborId_" value="<?php echo $LaborId;?>"/></td></tr>
<tr><td align="right">TipoLaborId:</td><td><input type="text" name="TipoLaborId_" id="TipoLaborId_" value="<?php echo $TipoLaborId;?>"/></td></tr>
<tr><td align="right">LaborFecha:</td><td><input type="text" name="LaborFecha_" id="LaborFecha_" value="<?php echo $LaborFecha;?>"/></td></tr>
<tr><td align="right">LaborJornalesFamiliar:</td><td><input type="text" name="LaborJornalesFamiliar_" id="LaborJornalesFamiliar_" value="<?php echo $LaborJornalesFamiliar;?>"/></td></tr>
<tr><td align="right">LaborJornalesContratado:</td><td><input type="text" name="LaborJornalesContratado_" id="LaborJornalesContratado_" value="<?php echo $LaborJornalesContratado;?>"/></td></tr>
<tr><td align="right">LaborCostoUnitarioJornal:</td><td><input type="text" name="LaborCostoUnitarioJornal_" id="LaborCostoUnitarioJornal_" value="<?php echo $LaborCostoUnitarioJornal;?>"/></td></tr>
<tr><td align="right">LaborArea:</td><td><input type="text" name="LaborArea_" id="LaborArea_" value="<?php echo $LaborArea;?>"/></td></tr>
<tr><td align="right">LaborNota:</td><td><input type="text" name="LaborNota_" id="LaborNota_" value="<?php echo $LaborNota;?>"/></td></tr>
<tr><td align="right">LaborTipo:</td><td><input type="text" name="LaborTipo_" id="LaborTipo_" value="<?php echo $LaborTipo;?>"/></td></tr>
<tr><td align="right">ParcelaId:</td><td><input type="text" name="ParcelaId_" id="ParcelaId_" value="<?php echo $ParcelaId;?>"/></td></tr>
<tr><td align="right"><input type="submit" value="Actualizar" name="btActualizar"></td><td></td></tr>
<tr><td align="right" colspan="2"><?php echo $rpta;?></td></tr>
</table>
</form>
</div>