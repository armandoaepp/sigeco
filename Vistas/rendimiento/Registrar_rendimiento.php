<div id="divRegistrar_rendimiento">
  <form id="<?php echo $frmModalidadR;?>" name="<?php echo $frmModalidadR;?>" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> <?php echo  $ModalidadR;?> </legend>
      <p>
        <!--<label for="RendimientoId_">RendimientoId : </label>-->
        <input type="hidden" name="RendimientoId_" id="RendimientoId_" value="<?php echo $RendimientoId;?>"/>
      </p>
      <p><strong >Ingrese Datos</strong></p>
      <p>
        <label for="RendimientoMuestra_">Muestra gramos: </label>
        <input type="text" name="RendimientoMuestra_" id="RendimientoMuestra_" value="<?php echo $RendimientoMuestra;?>"/>
        g </p>
      <p>
        <label for="RendimientoCafePilado_">Café Pilado : </label>
        <input type="text" name="RendimientoCafePilado_" id="RendimientoCafePilado_" value="<?php echo $RendimientoCafePilado;?>"/>
        g</p>
      <p>
        <label for="RendimientoCafeDescarte_">Café Descarte : </label>
        <input type="text" name="RendimientoCafeDescarte_" id="RendimientoCafeDescarte_" value="<?php echo $RendimientoCafeDescarte;?>"/>
        g</p>
      <p><strong>Resultados</strong></p>
      <p>
        <label for="RendimientoCascara_">Cáscara/Impurezas : </label>
        <input type="text" name="RendimientoCascara_" id="RendimientoCascara_"  readonly="readonly" value="<?php echo $RendimientoCascara;?>"/>
        g</p>
      <p>
        <label for="RendimientoExportable_">Exportable : </label>
        <input type="text" name="RendimientoExportable_" id="RendimientoExportable_" readonly="readonly" value="<?php echo $RendimientoExportable;?>"/>
        g</p>
      <p>
        <label for="RendimientoTotal_">Total gramos: </label>
        <input type="text" name="RendimientoTotal_" id="RendimientoTotal_" readonly="readonly" value="<?php echo $RendimientoTotal;?>"/>
        g</p>
      <p>
        <label for="RendimientoPorcentaje_">Rendimiento Porcentaje : </label>
        <input type="text" name="RendimientoPorcentaje_" id="RendimientoPorcentaje_" readonly="readonly" value="<?php echo $RendimientoPorcentaje;?>"/>
        %</p>
      <p>
        <!--<label for="AcopioId_">AcopioId : </label>-->
        <input type="hidden" name="AcopioId_" id="AcopioId_" value="<?php echo $AcopioId;?>"/>
      </p>
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/><?php echo $tipoModalidad; ?> </button>
        <button  type="button" id="btnCancelar" onclick="linkCancelarRendimiento(); return false;"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
</div>
