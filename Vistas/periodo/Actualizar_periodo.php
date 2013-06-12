<div id="divActualizar_periodo">
  <form id="frmActualizar_periodo" name="frmRegistrar_periodo" method="post" action="<?php echo $accionf;?>">
    <fieldset>
      <legend> Actualizar Periodo</legend>
      <p>
        <label for="PeriodoId_">PeriodoId : </label>
        <input type="text" name="PeriodoId_" id="PeriodoId_" value="<?php echo $PeriodoId;?>"/>
      </p>
      <p>
        <label for="PeriodoAño_">PeriodoAño : </label>
        <input type="text" name="PeriodoAño_" id="PeriodoAño_" value="<?php echo $PeriodoAño;?>"/>
      </p>
      <p>
        <label for="PeriodoFechaInicio_">PeriodoFechaInicio : </label>
        <input type="date"  name="PeriodoFechaInicio_" id="PeriodoFechaInicio_" value="<?php echo $PeriodoFechaInicio;?>"/>
      </p>
      <p>
        <label for="PeriodoFechaCierre_">PeriodoFechaCierre : </label>
        <input type="date" name="PeriodoFechaCierre_" id="PeriodoFechaCierre_" value="<?php echo $PeriodoFechaCierre;?>"/>
      </p>
      <p>
        <label for="PeriodoEstado_">PeriodoEstado : </label>
        <input type="text" name="PeriodoEstado_" id="PeriodoEstado_" value="<?php echo $PeriodoEstado;?>"/>
      </p>
      <div class="botones">
        <button type="submit"  id="btregistrar"><img src="../imgcixphp/ico_guardar.png" title="Registar"/>Registrar </button>
        <button  type="button" id="btnCancelar" onclick="location.href='index.php?accion=Listar';"><img src="../imgcixphp/ico_cancelar.png" title="Cancelar"/>Cancelar </button>
      </div>
    </fieldset>
  </form>
</div>
