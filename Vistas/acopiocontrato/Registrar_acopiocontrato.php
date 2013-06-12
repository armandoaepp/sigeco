<div id="divRegistrar_acopiocontrato">
<form id="frmRegistrar_acopiocontrato" name="frmRegistrar_acopiocontrato" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Nuevo Acopiocontrato</legend>
<p><label for="AcopioContratoId_">AcopioContratoId : </label><input type="text" name="AcopioContratoId_" id="AcopioContratoId_" value=""/></p>
<p><label for="AcopioAsignado_">AcopioAsignado : </label><input type="text" name="AcopioAsignado_" id="AcopioAsignado_" value=""/></p>
<p><label for="AcopioPorAsignar_">AcopioPorAsignar : </label><input type="text" name="AcopioPorAsignar_" id="AcopioPorAsignar_" value=""/></p>
<p><label for="ContratoRequerido_">ContratoRequerido : </label><input type="text" name="ContratoRequerido_" id="ContratoRequerido_" value=""/></p>
<p><label for="ContratoAsignado_">ContratoAsignado : </label><input type="text" name="ContratoAsignado_" id="ContratoAsignado_" value=""/></p>
<p><label for="AcopioId_">AcopioId : </label><input type="text" name="AcopioId_" id="AcopioId_" value=""/></p>
<p><label for="ContratoId_">ContratoId : </label><input type="text" name="ContratoId_" id="ContratoId_" value=""/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>