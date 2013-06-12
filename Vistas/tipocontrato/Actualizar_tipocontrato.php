<div id="divActualizar_tipocontrato">
<form id="frmActualizar_tipocontrato" name="frmRegistrar_tipocontrato" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Tipocontrato</legend>
<p><label for="TipoContratoId_">TipoContratoId : </label><input type="text" name="TipoContratoId_" id="TipoContratoId_" value="<?php echo $TipoContratoId;?>"/></p>
<p><label for="TipoContrato_">TipoContrato : </label><input type="text" name="TipoContrato_" id="TipoContrato_" value="<?php echo $TipoContrato;?>"/></p>
<p><label for="TipoContratoEstado_">TipoContratoEstado : </label><input type="text" name="TipoContratoEstado_" id="TipoContratoEstado_" value="<?php echo $TipoContratoEstado;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>