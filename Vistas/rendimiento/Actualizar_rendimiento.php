<div id="divActualizar_rendimiento">
<form id="frmActualizar_rendimiento" name="frmRegistrar_rendimiento" method="post" action="<?php echo $accionf;?>">
<fieldset> <legend> Actualizar Rendimiento</legend>
<p><label for="RendimientoId_">RendimientoId : </label><input type="text" name="RendimientoId_" id="RendimientoId_" value="<?php echo $RendimientoId;?>"/></p>
<p><label for="RendimientoMuestra_">RendimientoMuestra : </label><input type="text" name="RendimientoMuestra_" id="RendimientoMuestra_" value="<?php echo $RendimientoMuestra;?>"/></p>
<p><label for="RendimientoCafePilado_">RendimientoCafePilado : </label><input type="text" name="RendimientoCafePilado_" id="RendimientoCafePilado_" value="<?php echo $RendimientoCafePilado;?>"/></p>
<p><label for="RendimientoCafeDescarte_">RendimientoCafeDescarte : </label><input type="text" name="RendimientoCafeDescarte_" id="RendimientoCafeDescarte_" value="<?php echo $RendimientoCafeDescarte;?>"/></p>
<p><label for="RendimientoCascara_">RendimientoCascara : </label><input type="text" name="RendimientoCascara_" id="RendimientoCascara_" value="<?php echo $RendimientoCascara;?>"/></p>
<p><label for="RendimientoExportable_">RendimientoExportable : </label><input type="text" name="RendimientoExportable_" id="RendimientoExportable_" value="<?php echo $RendimientoExportable;?>"/></p>
<p><label for="RendimientoTotal_">RendimientoTotal : </label><input type="text" name="RendimientoTotal_" id="RendimientoTotal_" value="<?php echo $RendimientoTotal;?>"/></p>
<p><label for="RendimientoPorcentaje_">RendimientoPorcentaje : </label><input type="text" name="RendimientoPorcentaje_" id="RendimientoPorcentaje_" value="<?php echo $RendimientoPorcentaje;?>"/></p>
<p><label for="AcopioId_">AcopioId : </label><input type="text" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId;?>"/></p>
<div class="botones"><button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button><button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button></div>
</fieldset>
</form>
</div>