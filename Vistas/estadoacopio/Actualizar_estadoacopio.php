<div id="divActualizar_estadoacopio">
<form id="frmActualizar_estadoacopio" name="frmRegistrar_estadoacopio" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Estadoacopio</legend>
<p><label for="EstadoAcopioId_">EstadoAcopioId : </label><input type="text" name="EstadoAcopioId_" id="EstadoAcopioId_" value="<?php echo $EstadoAcopioId;?>"/></p>
<p><label for="EstadoAcopioEstimado_">EstadoAcopioEstimado : </label><input type="text" name="EstadoAcopioEstimado_" id="EstadoAcopioEstimado_" value="<?php echo $EstadoAcopioEstimado;?>"/></p>
<p><label for="EstadoAcopioAcopiado_">EstadoAcopioAcopiado : </label><input type="text" name="EstadoAcopioAcopiado_" id="EstadoAcopioAcopiado_" value="<?php echo $EstadoAcopioAcopiado;?>"/></p>
<p><label for="EstadoAcopioSaldo_">EstadoAcopioSaldo : </label><input type="text" name="EstadoAcopioSaldo_" id="EstadoAcopioSaldo_" value="<?php echo $EstadoAcopioSaldo;?>"/></p>
<p><label for="EstadoAcopioEstado_">EstadoAcopioEstado : </label><input type="text" name="EstadoAcopioEstado_" id="EstadoAcopioEstado_" value="<?php echo $EstadoAcopioEstado;?>"/></p>
<p><label for="UnidadProductivaId_">UnidadProductivaId : </label><input type="text" name="UnidadProductivaId_" id="UnidadProductivaId_" value="<?php echo $UnidadProductivaId;?>"/></p>
<p><label for="PeriodoId_">PeriodoId : </label><input type="text" name="PeriodoId_" id="PeriodoId_" value="<?php echo $PeriodoId;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>