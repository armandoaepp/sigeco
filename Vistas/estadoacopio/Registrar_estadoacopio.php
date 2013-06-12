<div id="divRegistrar_estadoacopio">
<form id="frmRegistrar_estadoacopio" name="frmRegistrar_estadoacopio" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Estado de Acopio
</legend><p><label for="EstadoAcopioId_">EstadoAcopioId : </label><input type="text" name="EstadoAcopioId_" id="EstadoAcopioId_" value=""/></p>
<p>
  <label for="EstadoAcopioEstimado_">Estimado : </label><input type="text" name="EstadoAcopioEstimado_" id="EstadoAcopioEstimado_" value=""/>
  kg</p>
<p><label for="EstadoAcopioAcopiado_">Acopiado : </label><input type="text" name="EstadoAcopioAcopiado_" id="EstadoAcopioAcopiado_" value=""/>
kg</p>
<p><label for="EstadoAcopioSaldo_">Saldo : </label><input type="text" name="EstadoAcopioSaldo_" id="EstadoAcopioSaldo_" value=""/>
kg</p>
<p>&nbsp;</p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>