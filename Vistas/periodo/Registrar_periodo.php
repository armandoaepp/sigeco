<div id="divRegistrar_periodo">
  <form id="frmRegistrar_periodo" name="frmRegistrar_periodo" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Nuevo Periodo</legend>
      <!-- <p><label for="PeriodoId_">PeriodoId : </label><input type="text" name="PeriodoId_" id="PeriodoId_"  value=""/></p>-->
      <p>
        <label for="PeriodoAño_">PeriodoAño : </label>
        <input type="text" name="PeriodoAño_" id="PeriodoAño_" value="" required="required"/>
      </p>
      <p>
        <label for="PeriodoFechaInicio_">PeriodoFechaInicio : </label>
        <input type="date" name="PeriodoFechaInicio_" id="PeriodoFechaInicio_" value=""/>
      </p>
      <p>
        <label for="PeriodoFechaCierre_">PeriodoFechaCierre : </label>
        <input type="date" name="PeriodoFechaCierre_" id="PeriodoFechaCierre_" value=""/>
      </p>
      <p>
        <label for="PeriodoEstado_">PeriodoEstado : </label>
        <input type="text" name="PeriodoEstado_" id="PeriodoEstado_" value="A"/>
      </p>
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button>
        <button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
</div>
