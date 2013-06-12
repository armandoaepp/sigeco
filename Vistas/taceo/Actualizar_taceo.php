<div id="divActualizar_taceo">
<form id="frmActualizar_taceo" name="frmRegistrar_taceo" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Taceo</legend>
<p><label for="TaceoId_">TaceoId : </label><input type="text" name="TaceoId_" id="TaceoId_" value="<?php echo $TaceoId;?>"/></p>
<p><label for="TaceoFraganciaAroma_">TaceoFraganciaAroma : </label><input type="text" name="TaceoFraganciaAroma_" id="TaceoFraganciaAroma_" value="<?php echo $TaceoFraganciaAroma;?>"/></p>
<p><label for="TaceoSaborResidual_">TaceoSaborResidual : </label><input type="text" name="TaceoSaborResidual_" id="TaceoSaborResidual_" value="<?php echo $TaceoSaborResidual;?>"/></p>
<p><label for="TaceoAcidez_">TaceoAcidez : </label><input type="text" name="TaceoAcidez_" id="TaceoAcidez_" value="<?php echo $TaceoAcidez;?>"/></p>
<p><label for="TaceoCuerpo_">TaceoCuerpo : </label><input type="text" name="TaceoCuerpo_" id="TaceoCuerpo_" value="<?php echo $TaceoCuerpo;?>"/></p>
<p><label for="TaceoBalance_">TaceoBalance : </label><input type="text" name="TaceoBalance_" id="TaceoBalance_" value="<?php echo $TaceoBalance;?>"/></p>
<p><label for="TaceoDulsor_">TaceoDulsor : </label><input type="text" name="TaceoDulsor_" id="TaceoDulsor_" value="<?php echo $TaceoDulsor;?>"/></p>
<p><label for="TaceoUniformidad_">TaceoUniformidad : </label><input type="text" name="TaceoUniformidad_" id="TaceoUniformidad_" value="<?php echo $TaceoUniformidad;?>"/></p>
<p><label for="TaceoTazaLimpia_">TaceoTazaLimpia : </label><input type="text" name="TaceoTazaLimpia_" id="TaceoTazaLimpia_" value="<?php echo $TaceoTazaLimpia;?>"/></p>
<p><label for="TaceoPuntajeCatador_">TaceoPuntajeCatador : </label><input type="text" name="TaceoPuntajeCatador_" id="TaceoPuntajeCatador_" value="<?php echo $TaceoPuntajeCatador;?>"/></p>
<p><label for="TaceoDefectos_">TaceoDefectos : </label><input type="text" name="TaceoDefectos_" id="TaceoDefectos_" value="<?php echo $TaceoDefectos;?>"/></p>
<p><label for="TaceoNumeroTazas_">TaceoNumeroTazas : </label><input type="text" name="TaceoNumeroTazas_" id="TaceoNumeroTazas_" value="<?php echo $TaceoNumeroTazas;?>"/></p>
<p><label for="TaceoNotas_">TaceoNotas : </label><input type="text" name="TaceoNotas_" id="TaceoNotas_" value="<?php echo $TaceoNotas;?>"/></p>
<p><label for="TaceoCatadopor_">TaceoCatadopor : </label><input type="text" name="TaceoCatadopor_" id="TaceoCatadopor_" value="<?php echo $TaceoCatadopor;?>"/></p>
<p><label for="AcopioId_">AcopioId : </label><input type="text" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>